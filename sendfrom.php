<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once('includes/connect_local.php');
    $errors = array();

    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    $fname = trim($fname);
    $lname = trim($lname);
    $email = trim($email);
    $msg = trim($message);
    
    if(empty($fname)) {
        $errors[] = 'Please fill in your First Name';
    }
    
    if(empty($lname)) {
        $errors[] = 'Please fill in your Last Name';
    }
    
    if(empty($email)) {
        $errors[] = 'You must provide an email';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'I know this is not your REAL email.';
    }

    if(empty($msg)) {
        $errors[] = 'Please leave a message for me';
    }
    
    $errorcount = count($errors);
    
    if($errorcount > 0) {
        echo json_encode(array("errors" => $errors));
    } else {
        $query = "INSERT INTO contacts (fname, lname, email, message) VALUES (:fname, :lname, :email, :msg)";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':msg', $msg); 
        
        $stmt->execute();

        $to = 'l_yam203842@fanshaweonline.ca';
        $subject = 'You got a message from your portfolio site!';
        
        $email_message = "You have received a new contact form submission:\n\n";
        $email_message .= "Name: ".$fname." ".$lname."\n";
        $email_message .= "Email: ".$email."\n\n";
        $email_message .= "Message:\n" . $msg;

        if(mail($to, $subject, $email_message)) {
            echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));
        };
    }
?>