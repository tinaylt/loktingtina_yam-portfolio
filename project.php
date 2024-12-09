<!DOCTYPE html>

<?php
    require_once('includes/connect.php');

    $query = 'SELECT projects.id, title, thumbnail, details, service, year, credit, issue1, issue2, issue3, solution1, solution2, solution3, GROUP_CONCAT(media.location) AS locations  FROM projects, media WHERE projects_id = projects.id AND projects.id ='.$_GET['id'].' GROUP BY projects_id';

    $results = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($results);
    $image_array = explode(',',$row['locations']);
?>
<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Tina's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script defer src="js/main.js"></script>
</head>

<body>
    <section id="projects-details">
        <h2 class="hidden">Project Details</h2>

        <?php
        echo'<div class="grid-con">
            <div id="close-button" class="col-start-4 col-end-5 m-col-start-12 m-col-end-13">
                <span class="close"></span>
                <span class="close"></span>
            </div>
            <h3 class="col-span-full project-title">'.$row['title'].'</h3>
            <div class="col-span-full project-thumbnail">
                <img src="'.$row['thumbnail'].'" alt="main image" class="mobile-size">
                <img src="'.$image_array[0].'" alt="main image" class="desktop-size">
            </div>
        <div id="project" class="col-span-full grid-con">
            <div class="project-description col-span-full m-col-start-1 m-col-end-8">
                <h3>Project Details:</h3>
                <p>'.$row['details'].'</p>
            </div>
            <div class="project-line col-span-full mobile-size"></div>
            <div class="col-span-full m-col-start-8 m-col-end-13">
            <div class="detail-list">
                <ul>
                    <li class="categories"><h3>Service:</h3></li>
                    <li class="list"><p>'.$row['service'].'</p></li>
                </ul>
            </div>
            <div class="project-line mobile-size"></div>
            <div class="detail-list">
                <ul>
                    <li class="categories"><h3>Year:</h3></li>
                    <li class="list"><p>'.$row['year'].'</p></li>
                </ul>
            </div>
            <div class="project-line mobile-size"></div>
            <div id="credit" class="detail-list">
                <ul>
                    <li class="categories"><h3>Credit:</h3></li>
                    <li class="list">'.$row['credit'].'</li>
                </ul>
            </div>
         </div>
        </div>
            <div class="project-line col-span-full"></div>
        <div class="col-span-full project-image">
            <div><img src="'.$image_array[1].'" alt="image2"></div>
            <div><img src="'.$image_array[2].'" alt="image3"></div>

        </div>
            <div id="issue" class="col-span-full">
                <h3>Issue:</h3>
<<<<<<< Updated upstream
                <p><span class="num">1</span>'.$row['issue1'].'</p>
                <p><span class="num">2</span>'.$row['issue2'].'</p>
                <p><span class="num">3</span>'.$row['issue3'].'</p>
=======
                <p><span class="num">1</span><br>'.$row['issue1'].'</p>
                <p><span class="num">2</span><br>'.$row['issue2'].'</p>
                <p><span class="num">3</span><br>'.$row['issue3'].'</p>
>>>>>>> Stashed changes
            </div>
            <div class="col-span-full project-line"></div>
            <div id="solution" class="col-span-full">
                <h3>Solution:</h3>
<<<<<<< Updated upstream
                <p><span class="num">1</span>'.$row['solution1'].'</p>
                <p><span class="num">2</span>'.$row['solution2'].'</p>
                <p><span class="num">3</span>'.$row['solution3'].'</p>
=======
                <p><span class="num">1</span><br>'.$row['solution1'].'</p>
                <p><span class="num">2</span><br>'.$row['solution2'].'</p>
                <p><span class="num">3</span><br>'.$row['solution3'].'</p>
>>>>>>> Stashed changes
            </div>
            <div id="project-video" class="col-span-full">
                <img src="'.$image_array[3].'" alt="image6">
            </div>
            <div class="col-span-full">
                <img src="'.$image_array[4].'" alt="image6">
            </div>
        </div>';

?>

    </section>


    <footer>
        <div id="footer" class="grid-con">
            <div class="copyright col-start-1 col-end-3 m-col-start-1 m-col-end-8">
                <p>	&#169; 2024</p>
            </div>

            <div class="col-start-3 col-end-5 m-col-start-8 m-col-end-13 mark">
                <p>Designed by Tina Yam</p>
            </div>
        </div>
    </footer>
</body>




</html>