<?php
require_once('../includes/connect.php');

// Update the projects table
$query1 = "UPDATE projects SET title = ?, main = ?, thumbnail = ?, details = ?, brief = ?, service = ?, year = ?, credit = ?, issue1 = ?, issue2 = ?, issue3 = ?, solution1 = ?, solution2 = ?, solution3 = ? WHERE id = ?";


$stmt1 = $connection->prepare($query1);

$stmt1->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt1->bindParam(2, $_POST['main'], PDO::PARAM_STR);
$stmt1->bindParam(3, $_POST['thumbnail'], PDO::PARAM_STR);
$stmt1->bindParam(4, $_POST['details'], PDO::PARAM_STR);
$stmt1->bindParam(5, $_POST['brief'], PDO::PARAM_STR);
$stmt1->bindParam(6, $_POST['service'], PDO::PARAM_STR);
$stmt1->bindParam(7, $_POST['year'], PDO::PARAM_STR);
$stmt1->bindParam(8, $_POST['credit'], PDO::PARAM_STR);
$stmt1->bindParam(9, $_POST['issue1'], PDO::PARAM_STR);
$stmt1->bindParam(10, $_POST['issue2'], PDO::PARAM_STR);
$stmt1->bindParam(11, $_POST['issue3'], PDO::PARAM_STR);
$stmt1->bindParam(12, $_POST['solution1'], PDO::PARAM_STR);
$stmt1->bindParam(13, $_POST['solution2'], PDO::PARAM_STR);
$stmt1->bindParam(14, $_POST['solution3'], PDO::PARAM_STR);
$stmt1->bindParam(15, $_POST['pk'], PDO::PARAM_INT);

$stmt1->execute();

// Update the media table for location (image updates)
$query2 = "UPDATE media SET location = ? WHERE projects_id = ? AND id = ?";
$stmt2 = $connection->prepare($query2);

$stmt2->bindParam(1, $_POST['location'], PDO::PARAM_STR);
$stmt2->bindParam(2, $_POST['pk'], PDO::PARAM_INT);
$stmt2->bindParam(3, $mediaId, PDO::PARAM_INT); // Media IDs are expected to be sequential

$stmt2->execute();

$stmt1 = null;
$stmt2 = null;

header('Location: project_list.php');
?>
