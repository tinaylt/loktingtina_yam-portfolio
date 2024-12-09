<!DOCTYPE html>

<?php

require_once('includes/connect.php');

$query = 'SELECT projects.id AS projects, title, main, thumbnail FROM projects';

$results = mysqli_query($connect, $query); 
?>


<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Tina's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script defer src="js/main.js"></script>
</head>

<body class="greyscale">
    <header>
        <h2 class="hidden">Tina's Portfolio</h2>
        <div id="sticky-nav" class="grid-con">
            
            <div id="main-logo" class="col-start-1 col-end-4 m-col-start-1 m-col-end-7">
                <a href="index.php">
                    <img src="images/logo-final.svg" alt="logo">
                </a>
            </div>

            <div id="burger-icon" class="col-start-4 col-end-5">
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <div class="col-span-full m-col-start-7 m-col-end-13">
                <nav id="mobile-nav" class="hide">
                    <ul>
                        <li><p><a href="index.php">Home</a></p></li>
                        <li><p><a href="#projects">Projects</a></p></li>
                        <li><p><a href="contact.php">Contact</a></p></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section  id="hero" class="full-width-grid-con">
        <h2 class="hidden">Welcome!</h2>
        
        <img src="images/background-mobile.jpg" alt="mobile background" class="mobile-size">
        <img src="images/background-desktop.jpg" alt="mobile background" class="desktop-size">

        <div class="grid-con">
        <div id="header-message" class="col-span-full m-col-start-2 m-col-end-11 l-col-start-1 l-col-end-13">
            <div id="box1" class="message-box">
                <p class="hello"></p>
                <p id="tick1" class="tick">&#10004;</p>
            </div>

            <div id="box2" class="message-box">
                <p class="position"></p>
                <p id="tick2" class="tick">&#10004;</p>
            </div>

            <div id="about-me-message" class="message-box">
                <div id="about-img-container">
                    <img
                    sizes="(max-width: 1400px) 100vw, 1400px"
                    srcset="
                    images/about-me-img_cm8wlz_c_scale,w_533.jpg 533w,
                    images/about-me-img_cm8wlz_c_scale,w_950.jpg 950w,
                    images/about-me-img_cm8wlz_c_scale,w_1400.jpg 1400w"
                    src=" images/about-me-img_cm8wlz_c_scale,w_1400.jpg"
                    alt="personal image">
                </div>

                <p class="link"></p>
                <p id="tick3" class="tick">&#10004;</p>
            </div>

        </div>

        <div id="video-container" class="col-span-full">
            <video controls preload="metadata" poster="video/video-poster.png">
                <source src="video/demo-reelv2.mp4" type="video/mp4">
            </video>

            <div class="video-controls hide" id="video-controls">
                <button id="play-button"><i class="fa-solid fa-play"></i></button>
                <button id="pause-button"><i class="fa-solid fa-pause"></i></button>
                <button id="stop-button"><i class="fa-solid fa-stop"></i></button>
                <i class="fa fa-volume-up"></i>
                <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
                <!-- <button id="full-screen"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></button> -->
            </div>
        </div>


        </div>
    </section>

    <section id="projects" class="grid-con">
        <h2 class="col-span-full">Project</h2>

        <div class="col-span-full section-line-start"></div>

        <?php

        while($row = mysqli_fetch_array($results)) {

        echo'<div class="col-span-full m-col-span-6 l-col-span-4 project-container">
            <a href="project.php?id='.$row['projects'].'">
                <div class="project-thumbnail">
                    <img src="'.$row['thumbnail'].'" alt="project thumbnail">
                </div>

                <h3>'.$row['title'].'</h3>
                <p>'.$row['main'].'</p>
            </a>
        </div>';

        }
        ?>


    <div class="col-span-full section-line-end"></div>

    </section>

    <footer>
        <div id="footer" class="grid-con">

            <div id="copyright" class="col-start-1 col-end-3 m-col-start-1 m-col-end-8">
                <p>	&#169; 2024</p>
            </div>

            <div id="mark" class="col-start-3 col-end-5 m-col-start-10 m-col-end-13">
                <p>Designed by Tina Yam</p>
            </div>
        </div>

    </footer>

    <section id="lightbox" class="lightbox">
        <h2 class="hidden">About Me</h2>

        <div id="about-me" class="grid-con">

            <div id="aboutme-close-button" class="col-start-4 col-end-5 m-col-start-11 m-col-end-13">
                <span class="aboutme-close"></span>
                <span class="aboutme-close"></span>
            </div>

            <div id="photo-section" class="col-span-full m-col-start-1 m-col-end-13">
                <div class="background-left"></div>
                <div class="my-photo">
                    <img src="images/about-me.jpg" alt="personal photo">
                </div>
                <div class="background-right"></div>

            </div>

                <div class="col-span-full aboutme-intro">
                    <p>I'm Tina, originally from Hong Kong and a proud graduate of Fanshawe College's Interactive Media Program. I am passionated in design and coding, which allows me to blend creativity with technology in my work. In my spare time, I love traveling and exploring new things, always curious and eager to learn.</p>
                </div>

                <div id="design-process" class="col-span-full l-col-span-6">
                    <h3 class="col-span-full">Design Process</h3>

                    <img src="images/design-process-mobile.jpg" alt="design process" class="mobile-size">
                    <img src="images/design-process.jpg" alt="design process" class="desktop-size">
                </div>

                <div id="coding" class="col-span-full l-col-span-6">
                    <h3>Frameworks I worked: </h3>
                    <p>HTML5, CSS, JavsScript, SASS, SQL, Php</p>
                </div>

        </div>
    </section>

</body>

</html>