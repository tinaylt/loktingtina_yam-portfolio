<!DOCTYPE html>
<html lang="en">
    
    <?php

    session_start();

    if(!isset($_SESSION['username'])) {
    header('Location: login_form.php');
    }


    require_once('../includes/connect.php');
    $stmt = $connection->prepare('SELECT id, title FROM projects ORDER BY id ASC');
    $stmt->execute();
    
    ?>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMS Main Page</title>
        <link rel="stylesheet" href="../css/main.css" type="text/css">
    </head>

    <body>
        
        <?php

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo  '<div id="project-record">
            <p class="project-list">'.$row['title'].'</p>
            <a href="edit_project_form.php?id='.$row['id'].'">edit</a>'.
          
            '<a href="delete_project.php?id='.$row['id'].'">delete</a></p>
            </div>';
        }
        ?>
        <div id="add">
        <h3>Add a New Project</h3>
        <form id="add-project" action="add_project.php" method="POST" enctype="multipart/form-data">
            <label for="title">Project Title:</label>
            <input name="title" type="text" required>
            <br>
            <label for="main">Project Type:</label>
            <input name="main" type="text" required>
            <br>
            <label for="thumbnail">Project Thumbnail:</label>
            <input name="thumbnail" type="file" id="uploaded" required>
            <br>
            <label for="details">Project Details:</label><br>
            <textarea name="details" type="text" required></textarea>
            <br>
            <label for="brief">Project Brief:</label><br>
            <textarea name="brief" type="text" required></textarea>
            <br>
            <label for="service">Service:</label><br>
            <textarea name="service" type="text" required></textarea>
            <br>
            <label for="year">Year:</label>
            <input name="year" type="text" required>
            <br>
            <label for="credit">Credit:</label><br>
            <textarea name="credit" type="text" required></textarea>
            <br>
            <label for="issue1">Issue1:</label><br>
            <textarea name="issue1" type="text" required></textarea><br>
            <label for="issue2">Issue2:</label><br>
            <textarea name="issue2" type="text" required></textarea><br>
            <label for="issue3">Issue3:</label><br>
            <textarea name="issue3" type="text" required></textarea><br>
            <label for="solution1">Solution1:</label><br>
            <textarea name="solution1" type="text" required></textarea><br>
            <label for="solution2">Solution2:</label><br>
            <textarea name="solution2" type="text" required></textarea><br>
            <label for="solution3">Solution3:</label><br>
            <textarea name="solution3" type="text" required></textarea><br>

            <label for="image">Project Image:</label>
            <input name="image" type="file"><br>
            <input name="submit" type="submit" value="Add"> 
        </form>
        </div>
    </body>
</html>