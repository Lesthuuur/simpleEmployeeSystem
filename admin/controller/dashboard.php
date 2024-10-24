<?php

require "../../includes/connection.php";
require "../../includes/functions.php";




$getEmp = "SELECT * FROM employees";

$getEmpStmt = $conn->prepare($getEmp);
$getEmpStmt->execute();
$employees = $getEmpStmt->fetchAll();



include "../views/dashboard.view.php";

?>
<script>

    function updateRedirection(link, id){
        window.location.href = link + "?id="  + id;
    }

</script>