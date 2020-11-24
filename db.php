<?php
$servername = 'localhost';
$username = 'mahbub';
$password = '12345678';
$dbname = 'currency_basic';
try {
    $conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    throw new \Exception($e->getMessage());
}