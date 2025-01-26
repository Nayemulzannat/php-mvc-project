<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Update with your username
define('DB_PASS', '');     // Update with your password
define('DB_NAME', 'mvc_raw_php');

function connect()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
    return $conn;
}
