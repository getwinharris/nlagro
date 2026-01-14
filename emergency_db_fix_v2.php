<?php
// STANDALONE EMERGENCY DATABASE FIX (v2)
// VISIT THIS FILE'S URL ONCE TO EXECUTE THE FIX.
// DELETE THIS FILE IMMEDIATELY AFTER USE.

// Database credentials from your config.php
$db_hostname = '127.0.0.1';
$db_username = 'u925137283_nluser';
$db_password = 'Getwin28#';
$db_database = 'u925137283_nlname';
$db_prefix = 'dnoy_';

echo "<html><body style=\"font-family: sans-serif;\">";
echo "<h1>Emergency Database Fix (v2)</h1>";
echo "<p>Attempting to connect to database...</p>";

// Use mysqli for a direct connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

// Check connection
if ($conn->connect_error) {
    die("<p style=\"color: red;\">Connection failed: " . $conn->connect_error . "</p></body></html>");
}

echo "<p style=\"color: green;\">Connection successful.</p>";

$sql = "DELETE FROM `" . $db_prefix . "startup` WHERE `code` = 'currency'";

echo "<p>Executing query: <code>" . $sql . "</code></p>";

if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 0) {
        echo "<p style=\"font-weight: bold; color: green;\">SUCCESS: The faulty startup record was deleted.</p>";
    } else {
        echo "<p style=\"font-weight: bold; color: orange;\">NOTICE: The query ran successfully, but the faulty startup record was not found. It may have been deleted already.</p>";
    }
    echo "<p>The site should now be fixed. Please verify the site is working and then <strong style=\"color: red;\">DELETE THIS FILE IMMEDIATELY</strong> for security reasons.</p>";
} else {
    echo "<p style=\"font-weight: bold; color: red;\">ERROR: Could not execute the query. Error: " . $conn->error . "</p>";
}

$conn->close();

echo "</body></html>";
?>
