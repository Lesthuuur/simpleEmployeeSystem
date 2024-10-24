<?php

$host = "localhost";
$port = "3306";
$user = "root";
$pass = "";
$db = "employee";
$dbLappy = "employees";

$dsn = "mysql:host=$host;port=$port;dbname=$dbLappy;charset=UTF8";

$conn = new PDO($dsn, $user, $pass);
