<?php
session_start();
ob_start();
ini_set('display_errors', 0);
/*
$HOST = 'sql12.freemysqlhosting.net';
$PORT = 3306;
$DB_NAME = 'sql12561191';
$DB_USER = 'sql12561191';
$DB_PASSWORD = getenv('DB_PASSWORD');
$pdo = new PDO(
    "mysql:host=$HOST;port=$PORT;dbname=$DB_NAME",
    $DB_USER,
    $DB_PASSWORD
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

$HOST = 'localhost';
$PORT = 3306;
// $DB_NAME = 'sql12561191';
$DB_NAME = 'Wisetext';
$DB_USER = 'xhon7';
$DB_PASSWORD = 'Wisetext';
$pdo = new PDO(
    "mysql:host=$HOST;port=$PORT;dbname=$DB_NAME",
    $DB_USER,
    $DB_PASSWORD
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
