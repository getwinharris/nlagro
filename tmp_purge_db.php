<?php
// Include the OpenCart config file
require_once('config.php');

// Create a new database connection
$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$queries = [
    "SET FOREIGN_KEY_CHECKS = 0;",
    "TRUNCATE TABLE " . DB_PREFIX . "product;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_description;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_to_category;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_to_layout;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_to_store;",
    "TRUNCATE TABLE " . DB_PREFIX . "review;",
    "TRUNCATE TABLE " . DB_PREFIX . "category;",
    "TRUNCATE TABLE " . DB_PREFIX . "category_description;",
    "TRUNCATE TABLE " . DB_PREFIX . "category_to_layout;",
    "TRUNCATE TABLE " . DB_PREFIX . "category_to_store;",
    "TRUNCATE TABLE " . DB_PREFIX . "manufacturer;",
    "TRUNCATE TABLE " . DB_PREFIX . "manufacturer_to_store;",
    "TRUNCATE TABLE " . DB_PREFIX . "option;",
    "TRUNCATE TABLE " . DB_PREFIX . "option_description;",
    "TRUNCATE TABLE " . DB_PREFIX . "option_value;",
    "TRUNCATE TABLE " . DB_PREFIX . "option_value_description;",
    "TRUNCATE TABLE " . DB_PREFIX . "attribute;",
    "TRUNCATE TABLE " . DB_PREFIX . "attribute_description;",
    "TRUNCATE TABLE " . DB_PREFIX . "attribute_group;",
    "TRUNCATE TABLE " . DB_PREFIX . "attribute_group_description;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_attribute;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_option;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_option_value;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_discount;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_special;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_image;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_related;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_reward;",
    "TRUNCATE TABLE " . DB_PREFIX . "product_filter;",
    "SET FOREIGN_KEY_CHECKS = 1;"
];

foreach ($queries as $query) {
    if ($conn->query($query) === TRUE) {
        echo "Query executed successfully: $query\n";
    } else {
        echo "Error executing query: $query\nError: " . $conn->error . "\n";
    }
}

$conn->close();
?>