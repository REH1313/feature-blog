<?php
$host = "ftp://mywebtraining.net";              // or the server name if remote
$dbname = "reh144";   // the database you created in phpMyAdmin
$username = "reh144@mywebtraining.net"; // the username you log in with
$password = "^pgzU%;d}}h9"; // the password you log in with

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
