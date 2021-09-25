<?php
require 'includes/db-inc.php';
session_start();
$student_name = $_SESSION['student-username'];
$cpassword = $_POST["cpassword"];
$sql = "Update students SET password = '{$cpassword}' where username = '$student_name'";
$query = mysqli_query($conn, $sql);
header("Location: http://localhost/LibraryManagement/profile.php");
?>