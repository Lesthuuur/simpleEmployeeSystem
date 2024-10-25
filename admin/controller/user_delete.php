<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $user = $_POST['id'];

        $delete = "DELETE FROM admin WHERE id = :id";
        $deleteStmt = $conn->prepare($delete);
        $stmt = $deleteStmt->execute([":id" => $user]);
      

        if ($stmt) {
 
            header("Location: /admin/controller/admin.php");
            exit;
        } else {
            echo "Error deleting employee.";
        }
    } else {
        echo "No employee ID specified.";
    }
} else {
    echo "Invalid request method.";
}
?>
