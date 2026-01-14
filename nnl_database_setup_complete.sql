-- NNL Complete Database Setup
-- Table Prefix: dnoy_
-- Safe column additions with existence checks

SET @dbname = DATABASE();
SET @tablename = 'dnoy_customer';

-- Customer columns
SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'nnl_is_agent') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `nnl_is_agent` TINYINT(1) NOT NULL DEFAULT 0 AFTER `status`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'nnl_ref_id') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `nnl_ref_id` VARCHAR(50) NULL AFTER `nnl_is_agent`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'nnl_agent_id') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `nnl_agent_id` INT(11) NULL AFTER `nnl_ref_id`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'nnl_total_commission') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `nnl_total_commission` DECIMAL(15,2) NOT NULL DEFAULT 0.00 AFTER `nnl_agent_id`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'nnl_investment_balance') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `nnl_investment_balance` DECIMAL(15,2) NOT NULL DEFAULT 0.00 AFTER `nnl_total_commission`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

-- Product columns
SET @tablename = 'dnoy_product';

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'production_cost') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `production_cost` DECIMAL(15,2) NOT NULL DEFAULT 0.00 AFTER `price`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'farmer_share') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `farmer_share` DECIMAL(5,2) NOT NULL DEFAULT 60.00 AFTER `production_cost`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'investor_share') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `investor_share` DECIMAL(5,2) NOT NULL DEFAULT 20.00 AFTER `farmer_share`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'platform_share') > 0, 'SELECT 1', CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `platform_share` DECIMAL(5,2) NOT NULL DEFAULT 20.00 AFTER `investor_share`')));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

-- Create tables
CREATE TABLE IF NOT EXISTS `dnoy_nnl_investments` (
  `investment_id` INT(11) NOT NULL AUTO_INCREMENT,
  `customer_id` INT(11) NOT NULL,
  `product_id` INT(11) NOT NULL,
  `amount` DECIMAL(15,2) NOT NULL,
  `profit_share_percentage` DECIMAL(5,2) NOT NULL,
  `duration` INT(11) NOT NULL,
  `production_cost` DECIMAL(15,2) NOT NULL DEFAULT 0.00,
  `expected_profit` DECIMAL(15,2) NOT NULL DEFAULT 0.00,
  `actual_profit` DECIMAL(15,2) NULL,
  `status` ENUM('active','completed','cancelled') NOT NULL DEFAULT 'active',
  `date_added` DATETIME NOT NULL,
  `date_maturity` DATETIME NULL,
  `date_completed` DATETIME NULL,
  PRIMARY KEY (`investment_id`),
  INDEX `idx_customer` (`customer_id`),
  INDEX `idx_product` (`product_id`),
  INDEX `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `dnoy_nnl_commissions` (
  `commission_id` INT(11) NOT NULL AUTO_INCREMENT,
  `agent_id` INT(11) NOT NULL,
  `customer_id` INT(11) NOT NULL,
  `amount` DECIMAL(15,2) NOT NULL,
  `commission` DECIMAL(15,2) NOT NULL,
  `type` ENUM('sales','investment') NOT NULL DEFAULT 'sales',
  `order_id` INT(11) NULL,
  `investment_id` INT(11) NULL,
  `date_added` DATETIME NOT NULL,
  PRIMARY KEY (`commission_id`),
  INDEX `idx_agent` (`agent_id`),
  INDEX `idx_customer` (`customer_id`),
  INDEX `idx_type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `dnoy_nnl_bond_logs` (
  `bond_log_id` INT(11) NOT NULL AUTO_INCREMENT,
  `investment_id` INT(11) NOT NULL,
  `yield_progress` DECIMAL(5,2) NOT NULL DEFAULT 0.00,
  `harvest_date` DATE NULL,
  `projected_yield` DECIMAL(15,2) NULL,
  `notes` TEXT NULL,
  `date_added` DATETIME NOT NULL,
  PRIMARY KEY (`bond_log_id`),
  INDEX `idx_investment` (`investment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `dnoy_nnl_source_partners` (
  `partner_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `type` ENUM('farmer','manufacturer') NOT NULL,
  `location` VARCHAR(255) NULL,
  `contact` VARCHAR(255) NULL,
  `description` TEXT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  `date_added` DATETIME NOT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Indexes
SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.STATISTICS WHERE table_name = 'dnoy_customer' AND table_schema = @dbname AND index_name = 'idx_nnl_ref_id') > 0, 'SELECT 1', 'CREATE INDEX `idx_nnl_ref_id` ON `dnoy_customer`(`nnl_ref_id`)'));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql = (SELECT IF((SELECT COUNT(*) FROM INFORMATION_SCHEMA.STATISTICS WHERE table_name = 'dnoy_customer' AND table_schema = @dbname AND index_name = 'idx_nnl_agent_id') > 0, 'SELECT 1', 'CREATE INDEX `idx_nnl_agent_id` ON `dnoy_customer`(`nnl_agent_id`)'));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;

-- Set Currency to INR (Indian Rupees)
UPDATE `dnoy_setting` SET `value` = 'INR' WHERE `key` = 'config_currency' AND `code` = 'config';
UPDATE `dnoy_setting` SET `value` = 'INR' WHERE `key` = 'config_regional_currency' AND `code` = 'config';

-- Set Timezone to India
UPDATE `dnoy_setting` SET `value` = 'Asia/Kolkata' WHERE `key` = 'config_timezone' AND `code` = 'config';

-- Update Store Name
UPDATE `dnoy_setting` SET `value` = 'Namathu Natural Leader (NNL)' WHERE `key` = 'config_name' AND `code` = 'config';

-- Add Gemini API Key Setting
INSERT INTO `dnoy_setting` (`store_id`, `code`, `key`, `value`, `serialized`)
SELECT 0, 'config', 'nnl_ai_api_key', '', 0
WHERE NOT EXISTS (SELECT 1 FROM `dnoy_setting` WHERE `key` = 'nnl_ai_api_key' AND `code` = 'config');
