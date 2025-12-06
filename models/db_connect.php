<?php
$host = "ftp://mywebtraining.net";
$dbname = "reh144";
$username = "reh144@mywebtraining.net";
$password = "^pgzU%;d}}h9";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
