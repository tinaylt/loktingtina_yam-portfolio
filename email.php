<?php 

require_once('includes/connect.php');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
<<<<<<< Updated upstream
$message = $_POST['message'];
=======
$msg = $_POST['message'];

$errors = [];
>>>>>>> Stashed changes


$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
<<<<<<< Updated upstream
$message = trim($message);

$query = "INSERT INTO contacts (id, fname, lname, email, message) VALUES (NULL, '".$fname."','".$lname."','".$email."','".$message."')";

mysqli_query($connect, $query);

header('Location: contact.php');

=======
$msg = trim($msg);

if(empty($fname)) {
    $errors['first_name'] = 'Please fill in your first name';
}

if(empty($lname)) {
    $errors['last_name'] = 'Please fill in your last name';
}

if(empty($msg)) {
    $errors['message'] = 'please leave a message for me';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'I know this is not your REAL email';
}

if(empty($errors)) {

    $query = "INSERT INTO contacts (id, fname, lname, email, message) VALUES (NULL, '.$fname.','.$lname.','.$email.','.$msg.')";

    if(mysqli_query($connect, $query)) {
        $to = 'l_yam203842@fanshaweonline.ca';
        $subject = 'You got a message from your portfolio site!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: ".$fname." ".$lname."\n";
        $message .= "Email: ".$email."\n\n";

        mail($to,$subject,$message);

        header('Location: contact.php');

    }else {
        for($i=0; $i < count($errors); $i++) {
            echo $errors[$i].'<br>';
    }
}

}
>>>>>>> Stashed changes
?>