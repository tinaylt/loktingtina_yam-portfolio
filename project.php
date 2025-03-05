<!DOCTYPE html>

<?php
    require_once('includes/connect.php');

    $query = 'SELECT projects.id, title, thumbnail, details, service, year, credit, issue1, issue2, issue3, solution1, solution2, solution3, GROUP_CONCAT(media.location) AS location  FROM projects, media WHERE projects_id = projects.id AND projects.id =:projectId GROUP BY projects_id';
    $stmt = $connection->prepare($query);
    $projectId = $_GET['id'];
    $stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $image_array = explode(',',$row['location']);
    $stmt = null;
?>
<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Tina's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lunasima:wght@400;700&display=swap" rel="stylesheet">


    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="js/SplitText.js"></script>
    <script type="module" defer src="js/project.js"></script>
</head>

<body id="project-page">
        
    <?php
        echo'<section id="project-detail" class="grid-con">
            <div class="close-button col-start-4 col-end-5 m-col-start-11 m-col-end-13">
                <span class="close"></span>
                <span class="close"></span>
            </div>

            <h2 class="col-span-full m-col-span-full">'.$row['title'].'</h2>

            <P class="col-span-full m-col-span-full project-description">'.$row['details'].'</P>

            <div class="col-span-full m-col-span-full main-image">
                <img src="images/'.$image_array[0].'" alt="project Main mage">
            </div>

            <div class="col-span-full m-col-span-full l-col-start-1 l-col-end-7 project-box">
                <ul>
                    <li><h3>Services:</h3></li>
                    <li><p>'.$row['service'].'</p></li>
                </ul>
            </div>

            <div class="col-span-full m-col-span-full l-col-start-7 l-col-end-13 project-box">
                <ul>
                    <li><h3>Year:</h3></li>
                    <li><p>'.$row['year'].'</p></li>
                </ul>
            </div>

            <div class="col-span-full m-col-span-full project-box">
                <ul>
                    <li><h3>Credits:</h3></li>
                    <li><p>'.$row['credit'].'</p></li>
                </ul>
            </div>

            <div class="col-span-full m-col-span-full project-image">
                <img src="images/'.$image_array[1].'" alt="burple project image">
                <img src="images/'.$image_array[2].'" alt="burple project image">
            </div>

            <div id="issue" class="col-span-full m-col-span-full l-col-span-6 text-section">
                <h3>Issue</h3>

                <div class="para">
                    <div class="circle-p"></div>
                    <p>'.$row['issue1'].'</p>
                </div>

                <div class="para">
                    <div class="square-p"></div>
                    <p>'.$row['issue2'].'</p>
                </div>

                <div class="para">
                    <div class="triangle-p"></div>
                    <p>'.$row['issue3'].'</p>
                </div>
            </div>

            <div id="solution" class="col-span-full m-col-span-full l-col-span-6 text-section">
                <h3>Solution</h3>

                <div class="para">
                    <div class="circle-p"></div>
                    <p>'.$row['solution1'].'</p>
                </div>

                <div class="para">
                    <div class="square-p"></div>
                    <p>'.$row['solution2'].'</p>
                </div>

                <div class="para">
                    <div class="triangle-p"></div>
                    <p>'.$row['solution3'].'</p>
                </div>
            </div>


            <div class="col-span-full m-col-span-6 project-image">
                <img src="images/'.$image_array[3].'" alt="burple project image">
            </div>

            <div class="col-span-full m-col-span-6">
                <img src="images/'.$image_array[4].'" alt="burple project image6">
            </div>
        </section>';

    ?>
    
<footer>
        <div id="footer" class="grid-con">
            <div class="col-start-1 col-end-3 m-col-start-1 m-col-end-8">
                <p>	&#169; 2024</p>
            </div>

            <div class="footer-right col-start-3 col-end-5 m-col-start-8 m-col-end-13">
                <p>Designed by Tina Yam</p>
            </div>
        </div>
    </footer>
</body>
</html>