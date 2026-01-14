-- This script will remove all demo products, categories, manufacturers, and related demo content from your OpenCart database.
-- It is designed to resolve the "Messaging Conflict" by creating a clean slate for your NNL products and investment bonds.
-- Please execute this script in your database manager (e.g., phpMyAdmin) on your Hostinger server.

SET FOREIGN_KEY_CHECKS = 0;

-- Clear Product Data
TRUNCATE TABLE `dnoy_product`;
TRUNCATE TABLE `dnoy_product_attribute`;
TRUNCATE TABLE `dnoy_product_description`;
TRUNCATE TABLE `dnoy_product_discount`;
TRUNCATE TABLE `dnoy_product_filter`;
TRUNCATE TABLE `dnoy_product_image`;
TRUNCATE TABLE `dnoy_product_option`;
TRUNCATE TABLE `dnoy_product_option_value`;
TRUNCATE TABLE `dnoy_product_related`;
TRUNCATE TABLE `dnoy_product_reward`;
TRUNCATE TABLE `dnoy_product_to_category`;
TRUNCATE TABLE `dnoy_product_to_download`;
TRUNCATE TABLE `dnoy_product_to_layout`;
TRUNCATE TABLE `dnoy_product_to_store`;
TRUNCATE TABLE `dnoy_review`;
TRUNCATE TABLE `dnoy_product_viewed`;

-- Clear Category Data
TRUNCATE TABLE `dnoy_category`;
TRUNCATE TABLE `dnoy_category_description`;
TRUNCATE TABLE `dnoy_category_filter`;
TRUNCATE TABLE `dnoy_category_path`;
TRUNCATE TABLE `dnoy_category_to_layout`;
TRUNCATE TABLE `dnoy_category_to_store`;

-- Clear Manufacturer Data
TRUNCATE TABLE `dnoy_manufacturer`;
TRUNCATE TABLE `dnoy_manufacturer_to_store`;
TRUNCATE TABLE `dnoy_manufacturer_to_layout`;

-- Clear Demo Attributes and Options
TRUNCATE TABLE `dnoy_attribute`;
TRUNCATE TABLE `dnoy_attribute_description`;
TRUNCATE TABLE `dnoy_attribute_group`;
TRUNCATE TABLE `dnoy_attribute_group_description`;
TRUNCATE TABLE `dnoy_option`;
TRUNCATE TABLE `dnoy_option_description`;
TRUNCATE TABLE `dnoy_option_value`;
TRUNCATE TABLE `dnoy_option_value_description`;

-- Clear Demo Banners and Modules
TRUNCATE TABLE `dnoy_banner`;
TRUNCATE TABLE `dnoy_banner_image`;
DELETE FROM `dnoy_layout_module` WHERE `code` LIKE 'opencart.featured%' OR `code` LIKE 'opencart.banner%';
DELETE FROM `dnoy_module` WHERE `code` LIKE 'opencart.featured%' OR `code` LIKE 'opencart.banner%';

-- Clear SEO URLs related to demo content
DELETE FROM `dnoy_seo_url` WHERE `key` IN ('product_id', 'category_id', 'manufacturer_id');

SET FOREIGN_KEY_CHECKS = 1;

