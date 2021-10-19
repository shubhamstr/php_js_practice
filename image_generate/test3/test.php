<?php
// (A) OPEN IMAGE
$img = imagecreatefromjpeg('certificate.jpg');
// $img = imagecreatefromjpeg('balloon.jpg');

// (B) WRITE TEXT
$white = imagecolorallocate($img, 148, 49, 234);
$txt = "Hello World";
$font = "C:\Windows\Fonts\arial.ttf";
imagettftext($img, 24, 0, 5, 24, $white, $font, $txt);

// (C) OUTPUT IMAGE
header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($img);

// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
// imagejpeg($img, "test.jpg", 100);