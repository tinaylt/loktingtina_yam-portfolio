<?php 

// echo 'make sure this is working';

require_once('includes/connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

$errors = [];

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($message);

if(empty($lname)) {
    $errors['last_name'] = 'Please fill in your last name';
}

if(empty($fname)) {
    $errors['first_name'] = 'Please fill in your first name';
}

if(empty($message)) {
    $errors['message'] = 'please leave a message for me';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'I know this is not your REAL email';
}

if(empty($errors)) {

    // $query = "INSERT INTO contacts (fname, lname, email, message) VALUES ('.$fname.','.$lname.','.$email.','.$msg.')";
    $query = "INSERT INTO contacts (fname, lname, email, message) VALUES (:fname, :lname, :email, :message)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
   
    if($stmt->execute()) {
        
        $to = 'l_yam203842@fanshaweonline.ca';
        $subject = 'You got a message from your portfolio site!';
        echo "Email sent successfully!";

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: ".$fname." ".$lname."\n";
        $message .= "Email: ".$email."\n\n";
        $message .= "Message:\n" . $msg;

        mail($to,$subject,$message);

        header('Location: contact.php');
        exit;
        
    }else {
        for($i=0; $i < count($errors); $i++) {
            echo $errors[$i].'<br>';
        }
    }
}
?>