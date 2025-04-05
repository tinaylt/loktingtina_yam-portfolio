<!DOCTYPE html>

<?php

require_once('includes/connect_local.php');

$stmt = $connection->prepare('SELECT projects.id AS projects, title, main, thumbnail, brief FROM projects');
$stmt->execute();

// $query = 'SELECT projects.id AS projects, title, main, thumbnail FROM projects';

// $results = mysqli_query($connection, $query); 
?>

<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>TINA's site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lunasima:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&family=Barriecito&family=Jolly+Lodger&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Joti+One&family=Margarine&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="images/site.webmanifest" />


    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script defer src="js/SplitText.js"></script>
    <script type="module" defer src="js/home.js"></script>
</head>

<body>
    <header>
        <h2 class="hidden">TINA's site</h2>
        <div id="sticky-nav" class="grid-con">
            <div id="main-logo" class="col-start-1 col-end-4 m-col-start-1 m-col-end-5">
                <a href="index.php">
                    <img src="images/logo-final-v2.png" alt="logo">
                </a>
            </div>

            <div id="burger-icon" class="col-start-4 col-end-5">
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <div id="nav" class="col-span-full m-col-start-5 m-col-end-13">
                <nav id="mobile-nav" class="hide">
                    <ul>
                        <li><p><a href="about.html">About</a></p></li>
                        <li><p><a href="#projects">Projects</a></p></li>
                        <li><p><a href="contact.php">Contact</a></p></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <section  id="hero">
        <h2 class="hidden">Welcome!</h2>

        <div id="hero-bg">
            <img src="images/hero-bg.png" alt="background">
        </div>

            <div id="hero-section" class="grid-con">
                <div id="hero-h3" class="col-span-full m-col-start-1 m-col-end-7 l-col-start-2 l-col-end-8">
                    <h3>Digital<br>Designer</h3>
                </div>

                <div id="hero-p" class="col-span-full m-col-start-1 m-col-end-7 l-col-start-2 l-col-end-8">
                    <p>Hello! I am Tina Yam, a digital designer and front-end developer, passionate about design and coding. I graduated with a degree in Interactive Media Design from Fanshawe College.</p>
                </div>

                <div id="hello" class="col-span-full m-col-start-7 m-col-end-13 l-col-start-8 l-col-end-13">
                    <a href="about.html">
                        <div>
                            <div class=graphic-box></div>
                            <img src="images/self-graphic-01.png" alt="graphic" id="graphic1">
                        </div>
                    </a>
                </div>

            <div>
    </section>

    <section id="projects">
        <div id="grid-bg" class="full-width-grid-con">
        <h2 class="col-span-full m-col-span-full"><span class="first-letter">F</span>eatured <br><span class="first-letter">P</span>rojects</h2>
            <div class="wrap-container grid-con">

            <?php

                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                echo'<div class="project grid-con col-span-full m-col-start-1 m-col-end-13 l-col-span-full">
                    <div class="project-thumbnail col-span-full m-col-start-1 m-col-end-8">
                        <img src="images/'.$row['thumbnail'].'" alt="burple thumbnail">
                    </div>
                    <div id="project-brief" class="col-span-full m-col-start-8 m-col-end-13 ">
                        <div class="projects-title">
                            <h3>'.$row['title'].'</h3>
                        </div>
                        <p class="categories">'.$row['main'].'</p>
                        <div class="desciption"><p>'.$row['brief'].'</p></div>
                        <a href="project.php?id='.$row['projects'].'"class="project-button">Project Details</a>
                    </div>
                </div>';
            }
            
            $stmt = null;

            ?>

            </div>
        </div>

    </section>


    <!-- <div id="video-container" class="col-span-full m-col-span-full">
        <video controls preload="metadata" poster="video/video-poster.png">
            <source src="video/demo-reelv2.mp4" type="video/mp4">
        </video>

        <div class="video-controls hide" id="video-controls">
            <button id="play-button"><i class="fa-solid fa-play"></i></button>
            <button id="pause-button"><i class="fa-solid fa-pause"></i></button>
            <button id="stop-button"><i class="fa-solid fa-stop"></i></button>
            <i class="fa fa-volume-up"></i>
            <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
            <button id="full-screen"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
        </div>
    </div> -->

    <footer>
        <div id="footer" class="grid-con">
            <p id="resume" class="col-start-1 col-end-3 m-col-start-1 m-col-end-7"><a href="document/resume.pdf" target="_blank">Resume</a></p>
            <p id="linkedin" class="col-start-3 col-end-5 m-col-start-7 m-col-end-13"><a href="http://www.linkedin.com/in/tinayam">Linkedin</a></p>
            <p class="col-span-full m-col-span-full">&#169; 2024</p>
            <p class="col-span-full m-col-span-full">Designed by Tina Yam</p>

        </div>
    </footer>

</body>

</html>