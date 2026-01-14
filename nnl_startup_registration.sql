-- Register NNL Referral Startup Action
-- This makes the referral tracking run on every page load

INSERT INTO `dnoy_setting` (`store_id`, `code`, `key`, `value`, `serialized`)
SELECT 0, 'startup', 'startup_nnl_referral', 'catalog/startup/nnl_referral', 0
WHERE NOT EXISTS (
  SELECT 1 FROM `dnoy_setting`
  WHERE `key` = 'startup_nnl_referral' AND `code` = 'startup'
);

-- Add investor flag column if not exists
SET @dbname = DATABASE();
SET @tablename = 'dnoy_customer';
SET @sql = (SELECT IF(
  (SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = @tablename AND table_schema = @dbname AND column_name = 'nnl_is_investor') > 0,
  'SELECT 1',
  CONCAT('ALTER TABLE ', @tablename, ' ADD COLUMN `nnl_is_investor` TINYINT(1) NOT NULL DEFAULT 0 AFTER `nnl_investment_balance`')
));
PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
