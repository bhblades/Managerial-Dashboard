<?php

$host = '127.0.0.1';
$dbname = "managerial_dashboard";
$dbusername = "root";
$dbpassword = "rootroot";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection Failed: ". $e->getMessage());
}
