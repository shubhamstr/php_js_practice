<?php
// (A) OPEN IMAGE
$img = imagecreatefrompng('certificate_new.png');
// $img = imagecreatefromjpeg('certificate.jpg');
// $img = imagecreatefromjpeg('balloon.jpg');

// (B) WRITE TEXT
$white = imagecolorallocate($img, 89, 0, 255);
$txt = "Shubham Sutar";
$font = "C:\Windows\Fonts\gabriola.ttf";
imagettftext($img, 70, 0, 1000, 500, $white, $font, $txt);

$white = imagecolorallocate($img, 89, 0, 255);
$txt = "Javascript";
$font = "C:\Windows\Fonts\gabriola.ttf";
imagettftext($img, 70, 0, 600, 760, $white, $font, $txt);

$white = imagecolorallocate($img, 160, 110, 126);
$txt = "6th September 2021";
$font = "C:\Windows\Fonts\arial.ttf";
imagettftext($img, 25, 0, 180, 1050, $white, $font, $txt);

// (C) OUTPUT IMAGE
// header('Content-type: image/jpeg');
header('Content-type: image/png');
// imagejpeg($img);
imagepng($img);
imagedestroy($img);

// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
// imagejpeg($img, "test.jpg", 100);