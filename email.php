<?php 

require_once('includes/connect.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];


$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$message = trim($message);

$query = "INSERT INTO contacts (id, fname, lname, email, message) VALUES (NULL, '".$fname."','".$lname."','".$email."','".$message."')";

mysqli_query($connect, $query);

header('Location: contact.php');

?>