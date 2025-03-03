<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>TINA's Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

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

    <section id="connect" class="grid-con">
        <h2 class="col-span-full m-col-span-full">CONNECT</h2>

        <div id="connect-intro" class="col-span-full m-col-span-full">
            <p>I'd love to hear you! Whether you have questions, feedbacks, projects inquires or a cup of coffee &#x2615, feel free to reach out!  </p>
        </div>

        <div id="contact-form" class="col-span-full m-col-span-full">
            <form id="contacts" method="POST">
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
                <section id="feedback"></section>
            </form>
            
        </div>

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

</body>

</html>
