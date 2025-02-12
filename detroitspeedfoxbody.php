<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Vehicle Graphics for Detroit Speed's Foxbody | Testament Graphic House</title>
    <meta name="description" content="Check out our custom graphics kit we installed on this one of a kind foxbody mustang. Designed by Lue Creative produced and installed by Testament Graphic House.">
    <meta name="keywords" content="Custom Vehicle Wraps Denver NC, Custom Vehicle Wraps LKN, Chrome Deletes Denver NC, Commercial Wraps Denver NC, Custom Graphics Denver NC, Custom Wraps Charlotte">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="banner">
        <img src="assets/images/detroitspeed/alt/detroitspeedh.jpg" height="500" style="object-position: 0 77%;" alt="Destroit Speed's custom foxbody graphics kit">
        <div class="banner-content">
            <h1>DSE Custom Foxbody Graphics Kit</h1>
            <h3>Designed by Lue Creative</h3>
        </div>
    </div>

    <div class="container">

        <div class="title">
            <h2>Custom graphics kit, produced and installed</h2>
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
            $directory = 'assets/images/detroitspeed/';
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
            <img src="assets/images/detroitspeed/alt/detroitspeedb.jpg" alt="Foxbody Mustang with custom graphics">
            <div class="contact-us-overlay">

            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>