<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";
$errors = [];
$success = "";

if (isset($_POST["create"])) {
    $firstname = trim($_POST['firstname']);
    $surname = trim($_POST['surname']);
    $department = trim($_POST['department']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    if (empty($firstname)) {
        $errors[] = "Firstname is required.";
    } elseif (empty($surname)) {
        $errors[] = "Surname is required.";
    } elseif (empty($department)) {
        $errors[] = "Department is required.";
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    } elseif (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^09\d{9}$/', $phone)) {
        $errors[] = "Phone number must be 11 digits and start with '09'.";
    } else {
        $empNum = generateEmployeeNumber();

        $create = "INSERT INTO employees (employee_number, first_name, surname, department, email, phone) VALUES (:empNum, :firstname, :surname, :department, :email, :phone)";
        $stmt = $conn->prepare($create);

        if ($stmt->execute([
            ":empNum" => $empNum,
            ":firstname" => $firstname,
            ":surname" => $surname,
            ":department" => $department,
            ":email" => $email,
            ":phone" => $phone
        ])) {
            $success = "Employee created successfully!";
            header("Location: /admin/controller/dashboard.php");
            exit;
        } else {
            $errors[] = "Failed to create employee. Please try again.";
        }
    }
}

include "../views/create.view.php";
