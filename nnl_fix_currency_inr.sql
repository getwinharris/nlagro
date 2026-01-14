-- Fix INR Currency - Add Indian Rupee to OpenCart
-- Table Prefix: dnoy_

-- Add INR Currency if it doesn't exist
INSERT INTO `dnoy_currency` (`name`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`)
SELECT 'Indian Rupee', 'INR', '₹', '', 2, 1.00000, 1, NOW()
WHERE NOT EXISTS (SELECT 1 FROM `dnoy_currency` WHERE `code` = 'INR');

-- Set INR as default currency
UPDATE `dnoy_setting` SET `value` = 'INR' WHERE `key` = 'config_currency' AND `code` = 'config';

-- Update currency value (adjust based on your base currency - this assumes base is USD)
-- If your base currency is different, adjust the value accordingly
UPDATE `dnoy_currency` SET `value` = 83.00 WHERE `code` = 'INR';

-- Set INR as active
UPDATE `dnoy_currency` SET `status` = 1 WHERE `code` = 'INR';

-- Also set session currency to INR if not set
-- This will be handled by the application, but we ensure it's available
