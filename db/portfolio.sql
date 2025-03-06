-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 05, 2025 at 03:34 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table contacts
--

CREATE TABLE contacts (
  id int UNSIGNED NOT NULL,
  fname varchar(200) NOT NULL,
  lname varchar(200) NOT NULL,
  email varchar(300) NOT NULL,
  message varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table contacts
--

INSERT INTO contacts (id, fname, lname, email, message) VALUES
(1, 'mary', 'jane', 'maryjane@gmail.com', 'product design inquiry.'),
(2, 'peter', 'parkson', 'web development', 'wanna create a web page'),
(3, 'roy', 'randy', 'royrandy@gmail.com', 'do you want to work together?'),
(13, 'tom', 'lily', 'tomlily@gmail.com', 'hello'),
(14, 'peter', 'burger', 'peterburger@gmail.com', 'hello again'),
(15, 'tom', 'tom', 'tomtom@gmail.com', 'this is'),
(16, 'tina', 'yam', 'tina@gmail.com', 'this is a message'),
(48, 'abc', 'abc', 'abc@gmail.com', 'abc'),
(49, 'tom', 'chan', 'tomchan@gmail.com', 'tomchan'),
(50, 'lily', 'wong', 'lilywong@gmail.com', 'this is a message'),
(51, 'time', 'can', 'timchan@gmail.com', 'abc'),
(52, 'hello', 'hello', 'hello@gmail.com', 'hello'),
(53, 'tom', 'holland', 'tomholland@yahoo.com', 'hello! i finally did it!'),
(54, 'abc', 'abc', 'abc@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table media
--

CREATE TABLE media (
  id int UNSIGNED NOT NULL,
  location varchar(1000) NOT NULL,
  projects_id int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table media
--

INSERT INTO media (id, location, projects_id) VALUES
(1, 'burple-image1.jpg', 5),
(2, 'burple-image2.jpg', 5),
(3, 'burple-image3.jpg', 5),
(4, 'burple-image4.jpg', 5),
(5, 'burple-image5.jpg', 5),
(6, 'hackathon-image1.png', 2),
(7, 'hackathon-image2.jpg', 2),
(8, 'hackathon-image3.jpg', 2),
(9, 'hackathon-image4.jpg', 2),
(10, 'hackathon-image5.jpg\r\n', 2),
(14, 'mendelbalm-image1.jpg', 3),
(15, 'mendelbalm-image2.jpg', 3),
(16, 'mendelbalm-image3.jpg', 3),
(17, 'mendelbalm-image4.jpg', 3),
(18, 'mendelbalm-image5.jpg', 3),
(19, 'spark-image1.jpg', 4),
(20, 'spark-image2.jpg', 4),
(21, 'spark-image3.jpg', 4),
(22, 'spark-image4.jpg', 4),
(23, 'spark-image5.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table projects
--

CREATE TABLE projects (
  id int UNSIGNED NOT NULL,
  title varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  main varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  thumbnail varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  details varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  brief varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  service varchar(500) NOT NULL,
  year varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  credit varchar(500) NOT NULL,
  issue1 varchar(2000) NOT NULL,
  issue2 varchar(2000) NOT NULL,
  issue3 varchar(2000) NOT NULL,
  solution1 varchar(2000) NOT NULL,
  solution2 varchar(2000) NOT NULL,
  solution3 varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table projects
--

INSERT INTO projects (id, title, main, thumbnail, details, brief, service, year, credit, issue1, issue2, issue3, solution1, solution2, solution3) VALUES
(2, 'Industry Night', 'Web Development', 'hackathon-thumbnail.jpg', 'This group project involves creating a webpage for an event organized by Fanshawe College’s Interactive Media Program. The event will feature guest speakers from various industries and provide an opportunity for upcoming semester-four students to showcase their work. The website will include a promotional video and interactive elements (using gsap extension).', 'This group project involves creating a webpage for an event organized by Fanshawe College’s Interactive Media Program.', 'UX/UI Design<br>\r\nWeb Development<br>\r\nMotion Design<br>', '2024', 'Roy Sit:<br>\r\nWeb Design<br>\r\nMotion Design<br>\r\n<br>\r\nIshan:<br>\r\nFront-end Development<br><br>\r\nTina Yam:<br>\r\nFront-end Development<br>\r\nMotion Design', 'An autoplay video background was a unique design feature for the website. However, the video size does not adjust properly for mobile screens, appearing smaller than expected.', 'To adapt with different screen size, we have different design of the photo gallery. It carries 12 images with clickable buttons. When the gallery required different layouts, it is quite a challenge for html structure and JavaScrip functional. ', 'We were required to create a promotional video to introduce both the event and the program. While there are many outstanding images from last year’s event, the main challenge is determining how to effectively incorporate those images into the video.', 'After consideration, we decided that the autoplay video could increase loading times and cause distractions for viewers. As a solution, I suggested using a mobile-specific hero image. I took a picture of Fanshawe College’s downtown campus from a similar angle as the video background and resized it to fit the mobile screen.', 'It is quite changeling for me to switch the images with different layout size in JavaScipt. To find a better way in limited time, I separated the photo gallery into two div for mobile and desktop respectively. Both galleries are switching around through CSS. ', 'I researched event promotional videos online and found that using a flash-sequence-like effect is a suitable way to showcase the images. I also selected audio with matching beats to complement the vibe.'),
(3, 'Mendelbalm', 'Branding', 'mendelbalm-thumbnail.jpg', 'This is a design project for the IDP program. Mendelbalm is an organic cosmetic brand with three main iconic products: face balm, almond oil, and cleansing soap. My role involves designing product models, packaging, a branding guide, and promotional materials for social media and magazines.', 'This is a design project for the IDP program. Mendelbalm is an organic cosmetic brand with three main iconic products: face balm, almond oil, and cleansing soap.', 'Logo Design<br>\r\nBranding<br>\r\nProduct packaging<br>\r\nMotion Design<br>', '2024', 'Tina Yam:<br>\r\nLogo Design<br>\r\nBranding<br>\r\nMotion Design<br>', 'The name of the brand is quite long, making it challenging to create a logo that fits well on cosmetic packaging, which typically has limited space. With so many stunning packages already on the market, creating a design that is both unique and aligned with the brand concept is truly challenging.', 'Space is limited in digital advertisements, especially in banners and post feeds. Including products and a model in the imagery is essential, but I struggle to find a balance between showcasing the products, graphics, model, and the brand concept.', 'While editing the video, I wanted to include Mendelbalm products. However, the only materials I had were mock-up images. Creating a 3D model within a limited time wasn’t feasible.', 'For my solution, I conducted online research on cosmetic brands to explore their use of color palettes and logo concepts. It was noticeable that many brands tend to use earth tones or mid-tones, and their logos are often simple, without any elaborate graphics. Based on these insights, I created drafts using different fonts and designs, then gathered feedback from family and friends. Finally, I selected a font and adjusted the spacing between each letter for a cleaner look. Since the logo was too long to fit horizontally on the packaging, I placed it vertically at a larger size, making it more clear and easier to read.', 'I conducted online research to explore how brands typically approach digital advertisements. There are several strategies to create clean and engaging visuals. One option is to use a blurred background. Some advertisements forego including a model altogether and focus solely on the product. In such cases, it’s common to feature a nature-inspired background with a blur effect.\r\n<br>\r\nAnother approach is to incorporate plants or flowers into the design. Initially, I experimented with a blurred background, but since Mendelbalm has three different packaging designs, I wanted to emphasize the packaging colors. Adding a blurred background would make the composition feel overly crowded.\r\n<br>\r\nUltimately, I decided to use plants and other botanical elements to enhance the imagery. Given that almonds are the main ingredient of the product, I incorporated almonds, almond flowers, and leaves as complementary design elements.', 'I tried using Photoshop to remove the product backgrounds and incorporated botanical elements to make it look like real leaves were falling from a tree. I also added some stock footage at the beginning of the video to set the atmosphere. All three products were slid in, with branches extending at the end of the scene to showcase what we had.'),
(4, 'Spark', 'Branding', 'spark-thumbnail.jpg', 'This is an individual project that combines design, 3D modeling, and web development skills. The Spark earbuds were designed and built in Cinema 4D. The product’s design concept is not only for music lovers but also as an accessory to complement your daily outfit. After creating the model, I developed a functional Spark webpage with animations and produced a promotional video for the brand.', 'This is an individual project that combines design, 3D modeling, and web development skills.', 'Logo Design<br>\r\nBranding<br>\r\n3D Model<br>\r\nMotion Design<br>\r\nUX/UI Design<br>\r\nFront-end Development<br>\r\n', '2024', 'Tina Yam:<br>\r\nLogo Design<br>\r\nBranding<br>\r\n3D Model<br>\r\nMotion Design<br>\r\nWebsite Design<br>\r\nFront-end Development<br>', 'The classic wireless earbud shape was a new challenge when using Cinema 4D. The oval-shaped cover with left and right sides made it difficult. I tried many different approaches to cut out the shape in the same position using the Boolean function. Aligning the size with the other side of the earbud was not an easy task.', 'When making the scroll animation in JavaScript, the gap between the div which is placed the animation and the following section is unexpected. Although, I initially planned to have scroll animation at the hero images, but still it is not an ideal location. Especially the frame sizes is 1920 x 1080 px for desktop not mobile. ', 'Model viewer is a great method for showcasing my 3D model in the browser with interactive elements. However, when viewed on mobile size, the feature boxes occupy almost half of the viewer’s space, even after reducing their size using media queries.', 'To solve this issue, I used the mirror function built into Cinema 4D, which allows me to mirror the object. However, one problem is that the mirrored objects became stuck together, forming a single object that cannot be moved independently. While looking for a solution, I discovered that I could select the entire mirrored object and split it into editable objects. The downside is that you can’t remake the object using the original shapes once it’s split.', 'I tweaked the start and end positions several times in JavaScript, but it seems the browser requires some space for the scroll function. The first thing I did was add a hero image of the Spark earbuds specifically for mobile size and scaled up the image using JavaScript, switching it with CSS media queries. As a result, the location of each section and div differed between mobile and desktop sizes. It became challenging to use the same scroll trigger function to target each section and div directly. To resolve this, I found a useful method on the GSAP website that allows JavaScript to work with responsive screen sizes, similar to how media queries function in CSS. I applied it, and it worked perfectly.', 'To make it specific to mobile size, I used the same objects as the model viewer feature boxes in JavaScript, creating h2, p, and img tags dynamically using JavaScript and the appendChild function. Then, I switched the div on and off using CSS media queries.'),
(5, 'Burple', 'Rebranding', 'burple-thumbnail.jpg', 'This assignment for the second semester of the Interactive Media Design program involved rebranding the discontinued kids’ beverage brand, Burple. Our task was to develop a new logo, product packaging, poster, and promotional video. Since the brand targets children, we focused on creating a design that’s vibrant, colorful, and fun. To capture the playful and energetic spirit of a kid’s drink, we infused dynamic, lively elements into both the logo and packaging.', 'This assignment for the second semester of the Interactive Media Design program involved rebranding the discontinued kids’ beverage brand, Burple...', 'UX/UI Design<br>\r\nWeb Development<br>\r\nProduct Design<br>', '2024', 'Roy Sit:<br>\r\nPackage Design,<br> Web Design,<br> 3D Model<br><br>\r\n\r\nTina Yam:<br>\r\nLogo Design,<br>Web Design,<br>Front End Development,<br>3D Model', 'The logo it a bit flat and not playful feel using solid colour. And the original logo colour is orange, but I didn’t want to reuse the colour scheme as original, it is not impactful for rebranding.', 'The package of original brand had a unique design for kids, fun and also iconic. It is not a good way replicate the exact design for rebranding. ', 'Our team created more than one package labels and also want user to review and download it. We need a functional photo gallery. ', 'To add some playful vibes in the logo, first, I used a light pink-purple as the main colour. Then, adjust the ‘l’ as a slider and letter ‘e’ sliding down. It is also a CSS animation when user hover the logo. ', 'I found that some of the user experience online reviewed that although the bottle was unique, but it’s hard to carry out and split out easily. So we decided to make a bottle suitable for kids to carry and enhance to screw bottle cap. ', 'To showcase all labels, I made a functional photo gallery using JavaScript. I set the div to specific width and height, images had been inserted and display into inline position. After that, added button for click and slide function.  ');

-- --------------------------------------------------------

--
-- Table structure for table user
--

CREATE TABLE `user` (
  id int UNSIGNED NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table user
--

INSERT INTO user (id, username, password) VALUES
(1, 'portfolio', '2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table contacts
--
ALTER TABLE contacts
  ADD PRIMARY KEY (id);

--
-- Indexes for table media
--
ALTER TABLE media
  ADD PRIMARY KEY (id);

--
-- Indexes for table projects
--
ALTER TABLE projects
  ADD PRIMARY KEY (id);

--
-- Indexes for table user
--
ALTER TABLE user
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contacts
--
ALTER TABLE contacts
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table media
--
ALTER TABLE media
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table projects
--
ALTER TABLE projects
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table user
--
ALTER TABLE user
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
