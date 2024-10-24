<?php
require "../../includes/connection.php";
require "../../includes/functions.php";

if (isset($_GET['id'])) {
    $id = $_GET["id"];

    $getUser = "SELECT * FROM employees WHERE id = :id";

    $getUserStmt = $conn->prepare($getUser);

    $getUserStmt->execute([
        ":id" => $id
    ]);

    $employee = $getUserStmt->fetch();

    $employee_number = $employee['employee_number'];
    $firstname = $employee['first_name'];
    $surname = $employee['surname'];
    $department = $employee['department'];
    $email = $employee['email'];
    $phone = $employee['phone'];
    $username = $employee['username'];
    $password = $employee['password'];

    if (isset($_POST['update-profile'])) {

        $input_firstname = $_POST['firstname'];
        $input_surname = $_POST['surname'];
        $input_department = $_POST['department'];
        $input_email = $_POST['email'];
        $input_phone = $_POST['phone'];
        $input_username = $_POST['username'];

        $input_array = [
            $input_firstname,
            $input_surname,
            $input_department,
            $input_email,
            $input_phone,
            $input_username
        ];

        $isInputEmpty = false;
        foreach ($input_array as $value) {

            if (empty($value)) {
                $isInputEmpty = true;
            }
        }

        if ($isInputEmpty) {
            echo "
                <script>

                    window.alert('Please fill all the fields');
                </script>
            ";
        } else {


            if (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
                echo "
                    <script>
                        window.alert('Invalid email format');
                    </script>
                ";
            }
            // Validate phone (Assume 10-digit phone number for this example)
            elseif (!preg_match('/^[0-9]{10}$/', $input_phone)) {
                echo "
                    <script>
                        window.alert('Invalid phone number format. Must be 10 digits.');
                    </script>
                ";
            } else {
                // If all inputs are valid, proceed with updating the data
                $update = "UPDATE employees SET first_name = :firstname, surname = :surname, department = :department, email = :email, phone = :phone, username = :username WHERE id = :id";
                $updateStmt = $conn->prepare($update);

                $updateStmt->execute([
                    ':firstname' => $input_firstname,
                    ':surname' => $input_surname,
                    ':department' => $input_department,
                    ':email' => $input_email,
                    ':phone' => $input_phone,
                    ':username' => $input_username,
                    ':id' => $id
                ]);

                echo "
                    <script>
                        window.alert('Profile updated successfully');
                        window.location.href = 'dashboard.php';
                    </script>
                ";
            }
        }
    }

    if (isset($_POST['change-password'])) {
    }
} else {

    header("location: dashboard.php");
}


include "../views/update.view.php";
