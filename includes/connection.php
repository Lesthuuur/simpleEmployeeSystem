<?php

$host = "localhost";
$port = "3308";
$user = "root";
$pass = "";
$db = "employee";

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=UTF8";

$conn = new PDO($dsn, $user, $pass);



