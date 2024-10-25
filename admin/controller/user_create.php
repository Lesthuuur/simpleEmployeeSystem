<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";
isLoggedIn($_SESSION);
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = trim($_POST['userType']);
    $username = trim($_POST['username']);
    $password = trim($_POST['newPass']);
    $confirmPass = trim($_POST['confirmPass']);

    if (empty($userType)) {
        $errors[] = "User Type is required.";
    } elseif (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (empty($confirmPass)) {
        $errors[] = "Confirm Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    } elseif ($password != $confirmPass) {
        $errors[] = "Passwords do not match.";
    } else {
        $hashPass = hash("sha256", $password);

        $create = "INSERT INTO admin (user_type, username, password) VALUES (:userType, :username, :password)";
        $stmt = $conn->prepare($create);

        if ($stmt->execute([
            ":userType" => $userType,
            ":username" => $username,
            ":password" => $hashPass
        ])) {
            header("Location: /admin/controller/admin.php?success=Employee created successfully!");
            exit;
        } else {
            $errors[] = "Failed to create employee. Please try again.";
        }
    }
}

include "../views/user_create.view.php";
