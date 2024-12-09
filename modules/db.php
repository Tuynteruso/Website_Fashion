<?php
const HOST = 'localhost';
const DB = 'db_cuahangthoitrang';
const USERNAME = 'root';
const PASSWORD = '';
const CHARSET = 'utf8mb4';

/** @var PDO $db */
$db = null;

function newDB(): void
{
    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', HOST, DB, CHARSET);
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    global $db;
    
    try {
        $db = new PDO($dsn, USERNAME, PASSWORD, $options);
    } catch (PDOException $e) {
        die('Database connection failed: ' . $e->getMessage());
    }
}

if ($db === null) {
    newDB();
}

function DB(): PDO
{
    global $db;
    return $db;
}

// Optionally, to close the connection
function closeDB(): void
{
    global $db;
    $db = null; // Close the connection
}