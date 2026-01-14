<?php
namespace Opencart\Catalog\Controller\Startup;

/**
 * NNL Startup Controller
 * - Handles referral tracking cookies.
 * - Manages one-time database schema and data migration.
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class NnlReferral extends \Opencart\System\Engine\Controller {
    // This constant defines the target database version.
    // Increment this number when new database changes are added.
    private const NNL_DB_VERSION = '1.1';

    /**
     * The main index method, called on every page load by OpenCart.
     */
    public function index(): void {
        // Run the one-time database migration/update process.
        $this->runDatabaseUpdates();

        // The original referral tracking logic.
        if (isset($this->request->get['agent'])) {
            $this->setAgentCookie((int)$this->request->get['agent']);
        }

        if (isset($this->request->get['ref'])) {
            $this->setAgentCookie((int)$this->request->get['ref']);
        }
    }

    /**
     * Checks the current DB version and applies updates if necessary.
     * This is designed to be safe to run on every page load.
     */
    private function runDatabaseUpdates(): void {
        $this->load->model('setting/setting');
        $current_version = $this->model_setting_setting->getValue('nnl_db_version');

        // Only proceed if the version in the database is less than the version in the code.
        if (version_compare($current_version, self::NNL_DB_VERSION, '< ')) {
            $this->log->write('NNL: Database update required. Current: ' . ($current_version ?: 'None') . ', Target: ' . self::NNL_DB_VERSION);

            try {
                if (version_compare($current_version, '1.0', '< ')) {
                    $this->updateToV1();
                }
                if (version_compare($current_version, '1.1', '< ')) {
                    $this->updateToV1_1();
                }

                // After all updates, set the version in the DB to the latest version.
                $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = 'config' AND `key` = 'nnl_db_version'");
                $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = 0, `code` = 'config', `key` = 'nnl_db_version', `value` = '" . $this->db->escape(self::NNL_DB_VERSION) . "', `serialized` = 0");

                $this->log->write('NNL: Database update to version ' . self::NNL_DB_VERSION . ' completed successfully.');

            } catch (\Exception $e) {
                $this->log->write('NNL: FATAL DATABASE UPDATE FAILED! Error: ' . $e->getMessage());
            }
        }
    }

    /**
     * V1.0: Sets up the core NNL schema, tables, and settings.
     */
    private function updateToV1(): void {
        $this->log->write('NNL: Applying database schema updates for v1.0...');

        // --- Safely add columns to existing tables ---
        $this->addColumnIfNotExists('customer', 'nnl_is_agent', 'TINYINT(1) NOT NULL DEFAULT 0');
        $this->addColumnIfNotExists('customer', 'nnl_ref_id', 'VARCHAR(50) NULL');
        $this->addColumnIfNotExists('customer', 'nnl_agent_id', 'INT(11) NULL');
        $this->addColumnIfNotExists('customer', 'nnl_total_commission', 'DECIMAL(15,2) NOT NULL DEFAULT 0.00');
        $this->addColumnIfNotExists('customer', 'nnl_investment_balance', 'DECIMAL(15,2) NOT NULL DEFAULT 0.00');

        $this->addColumnIfNotExists('product', 'production_cost', 'DECIMAL(15,2) NOT NULL DEFAULT 0.00 AFTER `price`');
        $this->addColumnIfNotExists('product', 'farmer_share', 'DECIMAL(5,2) NOT NULL DEFAULT 60.00 AFTER `production_cost`');
        $this->addColumnIfNotExists('product', 'investor_share', 'DECIMAL(5,2) NOT NULL DEFAULT 20.00 AFTER `farmer_share`');
        $this->addColumnIfNotExists('product', 'platform_share', 'DECIMAL(5,2) NOT NULL DEFAULT 20.00 AFTER `investor_share`');

        // --- Create NNL-specific tables if they don't exist ---
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "nnl_investments` ( `investment_id` INT(11) NOT NULL AUTO_INCREMENT, `customer_id` INT(11) NOT NULL, `product_id` INT(11) NOT NULL, `amount` DECIMAL(15,2) NOT NULL, `profit_share_percentage` DECIMAL(5,2) NOT NULL, `duration` INT(11) NOT NULL, `production_cost` DECIMAL(15,2) NOT NULL DEFAULT 0.00, `expected_profit` DECIMAL(15,2) NOT NULL DEFAULT 0.00, `actual_profit` DECIMAL(15,2) NULL, `status` ENUM('active','completed','cancelled') NOT NULL DEFAULT 'active', `date_added` DATETIME NOT NULL, `date_maturity` DATETIME NULL, `date_completed` DATETIME NULL, PRIMARY KEY (`investment_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "nnl_commissions` ( `commission_id` INT(11) NOT NULL AUTO_INCREMENT, `agent_id` INT(11) NOT NULL, `customer_id` INT(11) NOT NULL, `amount` DECIMAL(15,2) NOT NULL, `commission` DECIMAL(15,2) NOT NULL, `type` ENUM('sales','investment') NOT NULL DEFAULT 'sales', `order_id` INT(11) NULL, `investment_id` INT(11) NULL, `date_added` DATETIME NOT NULL, PRIMARY KEY (`commission_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "nnl_bond_logs` ( `bond_log_id` INT(11) NOT NULL AUTO_INCREMENT, `investment_id` INT(11) NOT NULL, `yield_progress` DECIMAL(5,2) NOT NULL DEFAULT 0.00, `harvest_date` DATE NULL, `projected_yield` DECIMAL(15,2) NULL, `notes` TEXT NULL, `date_added` DATETIME NOT NULL, PRIMARY KEY (`bond_log_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "nnl_source_partners` ( `partner_id` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL, `type` ENUM('farmer','manufacturer') NOT NULL, `location` VARCHAR(255) NULL, `contact` VARCHAR(255) NULL, `description` TEXT NULL, `status` TINYINT(1) NOT NULL DEFAULT 1, `date_added` DATETIME NOT NULL, PRIMARY KEY (`partner_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

        // --- Update core settings ---
        $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = 'Namathu Natural Leader (NNL)' WHERE `key` = 'config_name' AND `code` = 'config'");
        $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = 'Asia/Kolkata' WHERE `key` = 'config_timezone' AND `code` = 'config'");

        // --- Add and configure INR currency ---
        $this->db->query("INSERT INTO `" . DB_PREFIX . "currency` (`title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`) SELECT 'Indian Rupee', 'INR', '₹', '', 2, 1.00000, 1, NOW() WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "currency` WHERE `code` = 'INR')");
        $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = 'INR' WHERE `key` = 'config_currency' AND `code` = 'config'");

        // --- Add placeholder for Gemini API Key ---
        $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` (`store_id`, `code`, `key`, `value`, `serialized`) SELECT 0, 'config', 'nnl_ai_api_key', 'YOUR_GEMINI_API_KEY_HERE', 0 WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE `key` = 'nnl_ai_api_key')");

        // --- Register this startup file to be run by OpenCart ---
        $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` (`store_id`, `code`, `key`, `value`, `serialized`) SELECT 0, 'startup', 'startup_nnl_referral', 'catalog/startup/nnl_referral', 0 WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE `key` = 'startup_nnl_referral')");

        $this->log->write('NNL: Schema updates for v1.0 complete.');
    }

    /**
     * V1.1: Seeds the database with initial categories and products.
     */
    private function updateToV1_1(): void {
        $this->log->write('NNL: Applying data seeding for v1.1...');

        // --- Seed Categories ---
        $this->db->query("INSERT INTO `" . DB_PREFIX . "category` (`parent_id`, `top`, `column`, `sort_order`, `status`, `date_added`, `date_modified`) SELECT 0, 1, 1, 0, 1, NOW(), NOW() FROM (SELECT 1) AS tmp WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "category` c JOIN `" . DB_PREFIX . "category_description` cd ON c.category_id = cd.category_id WHERE cd.name = 'Organic Products')");
        $organic_cat_id = $this->db->getLastId();
        if ($organic_cat_id > 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "category_description` (`category_id`, `language_id`, `name`, `description`, `meta_title`) VALUES (" . (int)$organic_cat_id . ", 1, 'Organic Products', 'High-quality, farm-fresh organic products.', 'Organic Products')");
            $this->db->query("INSERT INTO `" . DB_PREFIX . "category_to_store` (`category_id`, `store_id`) VALUES (" . (int)$organic_cat_id . ", 0)");
        }

        $this->db->query("INSERT INTO `" . DB_PREFIX . "category` (`parent_id`, `top`, `column`, `sort_order`, `status`, `date_added`, `date_modified`) SELECT 0, 1, 1, 1, 1, NOW(), NOW() FROM (SELECT 1) AS tmp WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "category` c JOIN `" . DB_PREFIX . "category_description` cd ON c.category_id = cd.category_id WHERE cd.name = 'Investment Bonds')");
        $investment_cat_id = $this->db->getLastId();
        if ($investment_cat_id > 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "category_description` (`category_id`, `language_id`, `name`, `description`, `meta_title`) VALUES (" . (int)$investment_cat_id . ", 1, 'Investment Bonds', 'Invest in sustainable agriculture through our share-base bonds.', 'Investment Bonds')");
            $this->db->query("INSERT INTO `" . DB_PREFIX . "category_to_store` (`category_id`, `store_id`) VALUES (" . (int)$investment_cat_id . ", 0)");
        }

        // --- Seed Sample Agent ---
        $this->db->query("INSERT INTO `" . DB_PREFIX . "customer` (`store_id`, `language_id`, `firstname`, `lastname`, `email`, `telephone`, `password`, `nnl_is_agent`, `nnl_ref_id`, `status`, `approved`, `safe`, `date_added`) SELECT 0, 1, 'Test', 'Agent', 'agent@nlagro.com', '1234567890', '" . $this->db->escape(password_hash('password', PASSWORD_DEFAULT)) . "', 1, 'AGENT1', 1, 1, 1, NOW() FROM (SELECT 1) AS tmp WHERE NOT EXISTS (SELECT 1 FROM `" . DB_PREFIX . "customer` WHERE email = 'agent@nlagro.com')");

        $this->log->write('NNL: Data seeding for v1.1 complete.');
    }

    /**
     * Helper function to safely add a column to a table.
     */
    private function addColumnIfNotExists(string $table, string $column, string $definition): void {
        $table_name = DB_PREFIX . $table;
        $query = $this->db->query("SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . $table_name . "' AND COLUMN_NAME = '" . $column . "'");
        if ($query->num_rows == 0) {
            $this->db->query("ALTER TABLE `" . $table_name . "` ADD `" . $column . "` " . $definition);
            $this->log->write("NNL: Added column '{$column}' to table '{$table_name}'.");
        }
    }

    /**
     * Original Function: Set agent cookie for 90 days
     */
    private function setAgentCookie(int $agent_id): void {
        if ($agent_id > 0) {
            $query = $this->db->query("SELECT `customer_id` FROM `" . DB_PREFIX . "customer` WHERE `customer_id` = '" . (int)$agent_id . "' AND `status` = '1' AND `nnl_is_agent` = '1'");
            if ($query->num_rows) {
                $expire = time() + (90 * 24 * 60 * 60);
                setcookie('nnl_agent_id', (string)$agent_id, ['expires' => $expire, 'path' => '/', 'samesite' => 'Lax']);
                $this->session->data['nnl_agent_id'] = $agent_id;
            }
        }
    }

    /**
     * Original Function: Get current agent ID from cookie or session
     */
    public function getAgentId(): ?int {
        if (isset($this->session->data['nnl_agent_id'])) {
            return (int)$this->session->data['nnl_agent_id'];
        }
        if (isset($this->request->cookie['nnl_agent_id'])) {
            return (int)$this->request->cookie['nnl_agent_id'];
        }
        return null;
    }
}
