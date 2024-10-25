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

    const deleteButtons = document.querySelectorAll('[id^="deleteBtn-"]');

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            const employeeId = this.id.split("-")[1]; // Extract ID from button ID

            if (confirm("Are you sure you want to delete this employee?")) {
                // Submit the corresponding form
                document.getElementById(`deleteForm-${employeeId}`).submit();
            }
        });
    
});

</script>