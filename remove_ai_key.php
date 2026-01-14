<?php
// Configuration
require_once('config.php');

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Database
$db = new \Opencart\System\Library\DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

// SQL to delete the setting
$db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = 'config' AND `key` = 'nnl_ai_api_key'");

echo 'SUCCESS: The nnl_ai_api_key has been removed from the database.';
?>