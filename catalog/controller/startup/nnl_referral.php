<?php
// EMERGENCY HOTFIX: Remove the faulty startup setting to break the fatal error loop.
// This code runs immediately on file inclusion, before the OpenCart application boots.
$db_hostname = \'127.0.0.1\';
$db_username = \'u925137283_nluser\';
$db_password = \'Getwin28#\';
$db_database = \'u925137283_nlname\';
$db_prefix = \'dnoy_\';

$conn = new \mysqli($db_hostname, $db_username, $db_password, $db_database);
if (!$conn->connect_error) {
    $conn->query("DELETE FROM `" . $db_prefix . "setting` WHERE `code` = \'startup\' AND `key` = \'startup_currency\'");
    $conn->close();
}
// END EMERGENCY HOTFIX

namespace Opencart\\Catalog\\Controller\\Startup;

class NnlReferral extends \\Opencart\\System\\Engine\\Controller {
    private const NNL_DB_VERSION = \'1.4\';

    public function index(): void {
        $this->runDatabaseUpdates();
        if (isset($this->request->get[\'agent\'])) {
            $this->setAgentCookie((int)$this->request->get[\'agent\']);
        }
        if (isset($this->request->get[\'ref\'])) {
            $this->setAgentCookie((int)$this->request->get[\'ref\']);
        }
    }

    private function runDatabaseUpdates(): void {
        $this->load->model(\'setting/setting\');
        $current_version = $this->model_setting_setting->getValue(\'nnl_db_version\');

        if (version_compare($current_version, self::NNL_DB_VERSION, \'<\')) {
            $this->log->write(\'NNL: Database update required. Current: \' . ($current_version ?: \'None\') . \', Target: \' . self::NNL_DB_VERSION);
            try {
                if (version_compare($current_version, \'1.0\', \'<\')) {
                    $this->updateToV1();
                }
                if (version_compare($current_version, \'1.1\', \'<\')) {
                    $this->updateToV1_1();
                }
                if (version_compare($current_version, \'1.2\', \'<\')) {
                    $this->updateToV1_2();
                }
                if (version_compare($current_version, \'1.3\', \'<\')) {
                    $this->updateToV1_3();
                }
                if (version_compare($current_version, \'1.4\', \'<\')) {
                    $this->updateToV1_4();
                }

                $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = \'config\' AND `key` = \'nnl_db_version\'");
                $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = 0, `code` = \'config\', `key` = \'nnl_db_version\', `value` = \'" . $this->db->escape(self::NNL_DB_VERSION) . "\', `serialized` = 0");
                $this->log->write(\'NNL: Database update to version \' . self::NNL_DB_VERSION . \' completed successfully.\');
            } catch (\\Exception $e) {
                $this->log->write(\'NNL: FATAL DATABASE UPDATE FAILED! Error: \' . $e->getMessage());
            }
        }
    }

    private function updateToV1(): void {
        // ... (existing V1.0 code) ...
    }

    private function updateToV1_1(): void {
        // ... (existing V1.1 code) ...
    }

    private function updateToV1_2(): void {
        // ... (existing V1.2 code) ...
    }

    private function updateToV1_3(): void {
        $this->log->write(\'NNL: Applying database schema updates for v1.3...\');
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "investment_plan` (`investment_plan_id` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL, `price` DECIMAL(15, 2) NOT NULL, PRIMARY KEY (`investment_plan_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
        $this->log->write(\'NNL: Schema updates for v1.3 complete.\');
    }

    private function updateToV1_4(): void {
        $this->log->write(\'NNL: Applying database schema fix for v1.4...\');
        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = \'startup\' AND `key` = \'startup_currency\'");
        $this->log->write(\'NNL: Schema fix for v1.4 complete.\');
    }
    private function setAgentCookie(int $agent_id): void {
        if ($agent_id > 0) {
            $this->load->model(\'account/customer\');
            $agent = $this->model_account_customer->getCustomer($agent_id);
            if ($agent) {
                $cookie_options = [
                    \'expires\' => time() + 60 * 60 * 24 * 30,
                    \'path\' => \'/\',
                    \'secure\' => true,
                    \'httponly\' => true,
                    \'samesite\' => \'Lax\'
                ];
                setcookie(\'agent\', (string)$agent_id, $cookie_options);
            }
        }
    }
}