<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Nginx cache demonstration</title>
    </head>
    <body>
        <h1> Nginx cache demonstration </h1>

        <a href="index.php?image=img1.jpg">1.jpg</a>
        <a href="index.php?image=img2.png">2.png</a>
        <a href="index.php?image=img3.jpg">3.jpg</a>

        <p>Image from GET:
            <?php
            $result = $_GET['image'];
            echo $result;
            ?>
        </p>
        <img src="./<?php echo $result; ?>">
        <a href="image.php?image=My_custom_text">Or try this for opening on-flow-generated image</a>
    </body>
</html>