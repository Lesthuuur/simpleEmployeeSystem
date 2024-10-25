<?php
require "../../includes/connection.php";
require "../../includes/functions.php";

$errors = [];
$success = "";

if (isset($_GET['id'])) {
    $id = $_GET["id"];

    $getUser = "SELECT * FROM employees WHERE id = :id";
    $getUserStmt = $conn->prepare($getUser);
    $getUserStmt->execute([":id" => $id]);
    $employee = $getUserStmt->fetch();

    $employee_number = $employee['employee_number'];
    $firstname = $employee['first_name'];
    $surname = $employee['surname'];
    $department = $employee['department'];
    $email = $employee['email'];
    $phone = $employee['phone'];

    if (isset($_POST['update-profile'])) {
        $input_firstname = trim($_POST['firstname']);
        $input_surname = trim($_POST['surname']);
        $input_department = trim($_POST['department']);
        $input_email = trim($_POST['email']);
        $input_phone = trim($_POST['phone']);

        if (empty($input_firstname) || empty($input_surname) || empty($input_department) || empty($input_email) || empty($input_phone)) {
            $errors[] = "Please fill all the fields.";
        } elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        } elseif (!preg_match('/^09\d{9}$/', $input_phone)) {
            $errors[] = "Phone number must be 11 digits and start with '09'.";
        } else {
            $update = "UPDATE employees SET first_name = :firstname, surname = :surname, department = :department, email = :email, phone = :phone WHERE id = :id";
            $updateStmt = $conn->prepare($update);

            if ($updateStmt->execute([
                ':firstname' => $input_firstname,
                ':surname' => $input_surname,
                ':department' => $input_department,
                ':email' => $input_email,
                ':phone' => $input_phone,
                ':id' => $id
            ])) {
                $success = "Profile updated successfully!";
                header("Location: dashboard.php");
                exit;
            } else {
                $errors[] = "Failed to update profile. Please try again.";
            }
        }
    }
} else {
    header("location: dashboard.php");
}

include "../views/update.view.php";
