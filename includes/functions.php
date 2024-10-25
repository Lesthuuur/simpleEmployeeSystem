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