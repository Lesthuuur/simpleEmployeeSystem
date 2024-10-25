<?php

function checkAndDisplayError($error){
    if($error != null){
        return $error;
    }
}

function generateEmployeeNumber() {

    $randomNumber = rand(100, 999);

    return "EMP" . $randomNumber;
}

function isLoggedIn($session) {
   
    if (isset($session['current_user_id'])) {
        return true;
    } else {
      
        header("Location: login.php");
        exit();
    }
}
