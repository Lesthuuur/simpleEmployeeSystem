<?php
session_start();
require "../../includes/connection.php";
require "../../includes/functions.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $employeeId = $_POST['id'];

        $delete = "DELETE FROM employees WHERE id = :id";
        $deleteStmt = $conn->prepare($delete);
        $stmt = $deleteStmt->execute([":id" => $employeeId]);
      

        if ($stmt) {
 
            header("Location: /admin/controller/dashboard.php");
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
