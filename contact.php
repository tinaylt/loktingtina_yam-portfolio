<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>TINA's Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="images/site.webmanifest" />

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="js/SplitText.js"></script>
    <script type="module" defer src="js/contact.js"></script>
</head>

<body>
<header>
        <h2 class="hidden">Tina's Portfolio</h2>
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

            <div class="col-span-full m-col-start-6 m-col-end-13">
                <nav id="mobile-nav" class="hide">
                    <ul>
                        <li><p><a href="about.html">About</a></p></li>
                        <li><p><a href="index.php">Projects</a></p></li>
                        <li><p><a href="contact.php">Contact</a></p></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="connect">
        <h2 class="hidden">CONNECT</h2>

        <img src="images/contact-sticker1.png" alt="sticker" id="connect-sticker">
        <img src="images/contact-sticker3.png" alt="sticker" id="connect-sticker1">

        <div id="contact-form"  class="grid-con">
            <div class="col-span-full">
                <p>I'd love to hear from you! Whether you have questions, feedback, project inquiries, want to grab a coffee &#x2615 or just need a companion, feel free to reach out!</p>
            </div>

            <form id="contacts" class="col-span-full" method="POST">
                <label for="fname">First Name:</label><br>
                <input type="text" name="fname" id="fname">
                <br><br>
                <label for="lname">Last Name:</label><br>
                <input type="text" name="lname" id="lname">
                <br><br>
                <label for="email">Email: </label><br>
                <input type="text" name="email" id="email">
                <br><br>
                <label for="message">Message:</label><br>
                <textarea name="message" id="message"></textarea>
                <br>
                <input type="submit" value="Submit" id="send-button">
                <section id="feedback" class="col-span-full m-col-span-full"></section>
            </form>

            
        </div>
            <img src="images/contact-sticker2.png" alt="sticker" id="connect-sticker3">

    </section>

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
