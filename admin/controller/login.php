<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";

$usernameError = null;
$passwordError = null;



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty($password)){
        echo "
            <script>
                window.alert('Fill all the input');
            </script>
        ";
    }else{
        $getUser = "SELECT * FROM admin WHERE username = :username";

        $getUserStmt = $conn->prepare($getUser);
        $getUserStmt->execute([":username" => $username]);
    
        $user = $getUserStmt->fetch();

        if(!$user){
            $usernameError = "Username not found!";
        }else{

            if($user['password'] !== $password){
                $passwordError = "Password does not match!";
            }else{
                $_SESSION["current_user_id"] = $user['id'];    
                $_SESSION["current_user_username"] = $user['username'];    
                
                header("location: dashboard.php");
    
            }
        }

    }

    
}

require "../views/login.view.php";