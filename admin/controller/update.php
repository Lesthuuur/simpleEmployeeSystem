<?php 


if(isset($_GET['id'])){
    $id = $_GET["id"];


}else{

    header("location: dashboard.php");
}


include "../views/update.view.php";