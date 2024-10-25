<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";

isLoggedIn($_SESSION);


$getUser = "SELECT * FROM admin";

$getUserStmt = $conn->prepare($getUser);
$getUserStmt->execute();
$users = $getUserStmt->fetchAll();



include "../views/admin.view.php";

?>
<script>

function updateRedirection(link, id){
    window.location.href = link + "?id="  + id;
}

const deleteBtn = document.getElementsByClassName("delete");

const deleteButtons = document.querySelectorAll('[id^="deleteBtn-"]');

deleteButtons.forEach(button => {
    button.addEventListener("click", function() {
        const user = this.id.split("-")[1]; // Extract ID from button ID

        if (confirm("Are you sure you want to delete this employee?")) {
            // Submit the corresponding form
            document.getElementById(`deleteForm-${user}`).submit();
        }
    });

});

</script>