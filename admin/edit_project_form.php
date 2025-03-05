<!DOCTYPE html>
<html lang="en">

<?php

    session_start();

    if(!isset($_SESSION['username'])) {
    header('Location: login_form.php');
    }

    require_once('../includes/connect.php');
    $query = 'SELECT * FROM projects, media WHERE projects_id = projects.id AND projects.id =:projectId';
    $stmt = $connection->prepare($query);
    $projectId = $_GET['id'];
    $stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $image_array = [];

    foreach ($rows as $row) {
        $image_array[] = $row['location'];
    }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>

<body>
<form id="edit-project" action="edit_project.php" method="POST">
    <input name="pk" type="hidden" value="<?php echo $row['id'];?>">
            <label for="title">Project Title:</label>
            <input name="title" type="text" value="<?php echo $row['title']; ?>" required>
            <br>
            <label for="main">Project Type:</label>
            <input name="main" type="text" value="<?php echo $row['main']; ?>" required>
            <br>
            <label for="thumbnail">Project Thumbnail:</label>
            <input name="thumbnail" type="text" value="<?php echo $row['thumbnail']; ?>" class="image-box" required>
            <br>
            <label for="details">Project Details:</label><br>
            <textarea name="details" type="text" required><?php echo $row['details']; ?></textarea>
            <br>
            <label for="brief">Project Brief:</label><br>
            <textarea name="brief" type="text" required><?php echo $row['brief']; ?></textarea>
            <br>
            <label for="image0">Project Main Image:</label>
            <input name="image0" type="text" value="<?php echo $image_array[0]; ?>" class="image-box" required>
            <br>
            <label for="service">Service:</label><br>
            <textarea name="service" type="text" required><?php echo $row['service']; ?></textarea>
            <br>
            <label for="year">Year:</label>
            <input name="year" type="text" value="<?php echo $row['year']; ?>" required>
            <br>
            <label for="credit">Credit:</label><br>
            <textarea name="credit" type="text" required><?php echo $row['credit']; ?></textarea>
            <br>
            <label for="issue1">Issue1:</label><br>
            <textarea name="issue1" type="text" required><?php echo $row['issue1']; ?></textarea><br>
            <label for="issue2">Issue2:</label><br>
            <textarea name="issue2" type="text" required><?php echo $row['issue2']; ?></textarea><br>
            <label for="issue3">Issue3:</label><br>
            <textarea name="issue3" type="text" required><?php echo $row['issue3']; ?></textarea><br>
            <label for="solution1">Solution1:</label><br>
            <textarea name="solution1" type="text" required><?php echo $row['solution1']; ?></textarea><br>
            <label for="solution2">Solution2:</label><br>
            <textarea name="solution2" type="text" required><?php echo $row['solution2']; ?></textarea><br>
            <label for="solution3">Solution3:</label><br>
            <textarea name="solution3" type="text" required><?php echo $row['solution3']; ?></textarea><br>
            <label for="images">Project Images</label><br>
            <?php
            for ($i = 1; $i < count($image_array); $i++) {
            echo '<input name="image' . $i . '" type="text" value="' . $image_array[$i] . '" class="image-box" required><br>';
        }
    ?>


            <input name="submit" type="submit" value="Edit">
        </form>
</body>

</html>