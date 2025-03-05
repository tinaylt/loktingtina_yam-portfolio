<?php

//keep track login page by page; you login once, it remember your login//
//session is a array of $_SESSION, every person has seperate id for each login user, so it is possible to have two person login at the same time//

//the $_SWWSION 
session_start();

require_once('../includes/connect.php');
//two things have to be true in order to login//
$query = 'SELECT * FROM user WHERE username = ? AND password = ?';
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['username'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['password'], PDO::PARAM_STR);
$stmt->execute();

if($stmt->rowCount() == 1) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['username'] = $row['username'];
    header('Location: project_list.php');
    
}else {
    header('Location: login_form.php');
}





$stmt = null;
?>