<?php
$result = $_GET['image'];

// Create the size of image or blank image
$image = imagecreate(500, 300);

// Set the background color of image
$background_color = imagecolorallocate($image, 0, 153, 0);

// Set the text color of image
$text_color = imagecolorallocate($image, 255, 255, 255);

// Function to create image which contains string.
imagestring($image, 10, 100, 100,  "You choose by GET request:", $text_color);
imagestring($image, 20, 100, 120,  $result, $text_color);
imagestring($image, 20, 100, 160,  "The UTC time is " . date("M,d,Y h:i:s A"), $text_color);
header("Content-Type: image/png");

imagepng($image);
?>