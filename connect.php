<?php
$servername = "localhost";
$username = "id19461841_lambdateam";
$password = 'cG13hS7b[]>6}Sx8';

try {
    $conn = new PDO("mysql:host=$servername;dbname=id19461841_lambda", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}
