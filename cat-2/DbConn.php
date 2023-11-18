<?php
// Task 4: Creating database connection using PDO

include 'constants.php'; // Importing constant values

try {
    // Establishing a PDO connection without a password
    $DbConn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME);

    // Setting the PDO error mode to exception
    $DbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
