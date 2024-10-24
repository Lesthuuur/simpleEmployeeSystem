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

    const deleteBtn = document.getElementsByClassName("delete");

    document.getElementById("deleteBtn-<?php echo $employee['id']; ?>").addEventListener("click", function() {
    // Show confirmation dialog
    if (confirm("Are you sure you want to delete this employee?")) {
        // If confirmed, submit the form
        document.getElementById("deleteForm-<?php echo $employee['id']; ?>").submit();
    }
});

</script>