<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroHelp911 Boxtruck Custom Printed Commercial Wrap | Testament Graphic House</title>
    <meta name="description" content="High Quality Custom Vehicle Wraps and Graphics, Chrome Deletes. Denver, NC - Design Print Install - 10 Years Installation Experience. 3M Certified. Insured.">
    <meta name="keywords" content="Custom Vehicle Wraps Denver NC, Custom Vehicle Wraps LKN, Chrome Deletes Denver NC, Commercial Wraps Denver NC, Custom Graphics Denver NC, Custom Wraps Charlotte">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="banner">
        <img src="assets/images/hhboxtruck/alt/hhboxtruck2h.jpg" height="500" style="object-position: 0 77%;" alt="">
        <div class="banner-content">
            <h1>HydroHelp911 Boxtruck</h1>
        </div>
    </div>

    <div class="container">

        <div class="title">
            <h2>Custom Printed Commercial Wrap</h2>
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad non officiis laborum cupiditate odit tenetur quasi earum hic sit! Ea nobis debitis iste alias asperiores incidunt quae odit ab! Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad non officiis laborum cupiditate odit tenetur quasi earum hic sit! Ea nobis debitis iste alias asperiores incidunt quae odit ab!</p>
            -->
        </div>

        <div class="project-gallery">
            <script>
                function hideSkeleton(imgElement) {
                    const skeleton = imgElement.previousElementSibling;
                    skeleton.style.display = 'none';

                }
            </script>

            <?php
            $directory = 'assets/images/hhboxtruck/';
            $images = glob($directory . "*.jpg");

            foreach ($images as $image) {
                list($width, $height) = getimagesize($image);
                echo '<div class="image-container">';
                echo '    <div class="skeleton"></div>';
                echo '    <img src="' . $image . '" width="' . $width . '" height="' . $height . '" alt="" onload="hideSkeleton(this)">';
                echo '</div>';
            }
            ?>

        </div>

    </div>

    <div class="contact-us">
        <div class="contact-us-item">
            <h2>Contact Us</h2>
            <p>Give us a call today to get started on your custom graphic project!</p>
            <a href="contact.php" class="btn btn-primary">Contact Us</a>
        </div>

        <div class="contact-us-image">
            <img src="assets/images/hhboxtruck/alt/hhboxtruck7b.jpg" alt="">
            <div class="contact-us-overlay">

            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>