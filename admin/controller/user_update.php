<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";
isLoggedIn($_SESSION);
$passwordErrors = [];
$passwordSuccess = "";
$profileErrors = [];
$profileSuccess = "";

if (isset($_GET['id'])) {
    $id = $_GET["id"];

    $getUser = "SELECT * FROM admin WHERE id = :id";

    $getUserStmt = $conn->prepare($getUser);

    $getUserStmt->execute([
        ":id" => $id
    ]);

    $user = $getUserStmt->fetch();

    $userType = $user['user_type'];
    $username = $user['username'];
    $password = $user['password'];


    if (isset($_POST['update-user'])) {

        $input_usertype = $_POST['userType'];
        $input_username = $_POST['username'];
       

        $input_array = [
            $input_usertype,
            $input_username,
        ];

        $isInputEmpty = false;
        foreach ($input_array as $value) {

            if (empty($value)) {
                $isInputEmpty = true;
            }
        }

        if ($isInputEmpty) {
            $profileErrors[] = "Please fill all the fields";
        } 
        
        else {
        
            $update = "UPDATE admin SET user_type = :userType, username = :username WHERE id = :id";
            $updateStmt = $conn->prepare($update);

            $updateStmt->execute([
                ':userType' => $input_usertype,
                ':username' => $input_username,
        
                ':id' => $id
            ]);

            

            echo "
                <script>
                    window.alert('Profile updated successfully');
                    window.location.href = 'admin.php';
                </script>
            ";
             
        }
    }


    if(isset($_POST['update-pass'])){
        $input_password = $_POST['password'];
        $inputNewPass = $_POST['newPass'];
        $input_confirm_password = $_POST["confirm_password"]; 

        // get the user password

        if(empty($input_password)){
            $passwordErrors[] = "Please fill up the password";
        }elseif(hash("sha256", $input_password) != $password){
            $passwordErrors[] = "Password does not match to your old password";
        
        }elseif ($inputNewPass !== $input_confirm_password) { // Check if passwords match
            $passwordErrors[] = "Passwords do not match!";
        }else{
            $hashedPassword = hash("sha256", $inputNewPass);
            
            // Update the password in the database
            $updatePassword = "UPDATE admin SET password = :password WHERE id = :id";
            $updatePasswordStmt = $conn->prepare($updatePassword);
            $updatePasswordStmt->execute([
                ':password' => $hashedPassword,
                ':id' => $id
            ]);

            $passwordSuccess = "Password updated successfully!";
            header("location: admin.php");
        }
    }
    
} else {

    header("location: admin.php");
}


include "../views/user_update.view.php";
