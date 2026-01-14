<?php
/**
 * Auto-update script - pulls from git on every page load.
 * This is for development purposes as requested.
 */
@shell_exec('cd /home/u925137283/domains/nlagro.com/public_html/ && git pull origin main > /dev/null 2>&1');

// --- Original OpenCart index.php content ---

// Version
define('VERSION', '4.1.0.3');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit();
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Framework
require_once(DIR_SYSTEM . 'framework.php');
