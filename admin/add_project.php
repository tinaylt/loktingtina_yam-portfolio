<?php

require_once('../includes/connect.php');

$random = rand(10000, 99999);
$newname = 'image'.$random;


$filetype = strtolower(pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION));
$filetype1 = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

if($filetype == 'jpeg') {
    $filetype = 'jpg';
}

if($filetype1 == 'jpeg') {
    $filetype1 = 'jpg';
}

if($filetype == 'exe') {
    exit('nice try');
}

if($filetype1 == 'exe') {
    exit('nice try');
}

if($filetype == 'pdf') {
    exit('nice try');
}

if($filetype1 == 'pdf') {
    exit('nice try');
}

$newname .= '.'.$filetype;
$target_file = '../images/'.$newname;

if(move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_file)) {
    $query = "INSERT INTO projects (title, main, thumbnail, details, brief, service, year, credit, issue1, issue2, issue3, solution1, solution2, solution3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['main'], PDO::PARAM_STR);
    $stmt->bindParam(3, $newname, PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST['details'], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST['brief'], PDO::PARAM_STR);
    $stmt->bindParam(6, $_POST['service'], PDO::PARAM_STR);
    $stmt->bindParam(7, $_POST['year'], PDO::PARAM_STR);
    $stmt->bindParam(8, $_POST['credit'], PDO::PARAM_STR);
    $stmt->bindParam(9, $_POST['issue1'], PDO::PARAM_STR);
    $stmt->bindParam(10, $_POST['issue2'], PDO::PARAM_STR);
    $stmt->bindParam(11, $_POST['issue3'], PDO::PARAM_STR);
    $stmt->bindParam(12, $_POST['solution1'], PDO::PARAM_STR);
    $stmt->bindParam(13, $_POST['solution2'], PDO::PARAM_STR);
    $stmt->bindParam(14, $_POST['solution3'], PDO::PARAM_STR);
    $stmt->execute();

    $lastid = $connection->lastInsertId();

        $newname1 = 'image'.$random;
        $target_file1 = '../images/'.$newname1;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file1)) {
            $query2 = "INSERT INTO media (location, projects_id) VALUES (?, ?)";
            $stmt = $connection->prepare($query2);
            $stmt->bindParam(1, $newname1, PDO::PARAM_STR);
            $stmt->bindParam(2, $lastid, PDO::PARAM_INT);
            $stmt->execute();
        }

    $stmt = null;
    
    header('Location: project_list.php');
}



?>