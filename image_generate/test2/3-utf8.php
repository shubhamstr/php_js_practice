<?php
// (A) OPEN IMAGE
$img = imagecreatefromjpeg('balloon.jpg');

// (B) WRITE UTF-8 TEXT
// https://stackoverflow.com/questions/9458317/working-with-gd-imagettftext-and-utf-8-characters
$white = imagecolorallocate($img, 255, 255, 255);
$txt = "世界你好";
$txt = mb_convert_encoding($txt, "HTML-ENTITIES", "UTF-8");
$txt = preg_replace('~^(&([a-zA-Z0-9]);)~', htmlentities('${1}'), $txt);
$font = "C:\Windows\Fonts\simsun.ttc"; 
imagettftext($img, 24, 0, 5, 24, $white, $font, $txt);

// (C) OUTPUT IMAGE
header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($img);