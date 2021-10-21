<?php

$student_id = 1;
$student_name = "student_name";
$course_id = 1;
$course_name = "course_name";
$date3 = "date3";

// (A) OPEN IMAGE
$img = imagecreatefrompng("./certificate_new.png");

// (B) WRITE TEXT
$white = imagecolorallocate($img, 89, 0, 255);
$txt = "$student_name";
$font = "./DancingScript.ttf";
// $font = "./Gabriola.ttf";
// $font = "C:\Windows\Fonts\gabriola.ttf";
imagettftext($img, 70, 0, 1000, 500, $white, $font, $txt);

$white = imagecolorallocate($img, 89, 0, 255);
$txt = "$course_name";
$font = "./DancingScript.ttf";
// $font = "./Gabriola.ttf";
// $font = "C:\Windows\Fonts\gabriola.ttf";
imagettftext($img, 70, 0, 600, 760, $white, $font, $txt);

$white = imagecolorallocate($img, 160, 110, 126);
$txt = "$date3";
$font = "./arial.ttf";
// $font = "C:\Windows\Fonts\arial.ttf";
imagettftext($img, 25, 0, 180, 1050, $white, $font, $txt);

// (C) OUTPUT IMAGE
header('Content-type: image/png');
$name1 = "certificate_stud" . $student_id . "course" . $course_id . ".png";
imagepng($img, "./$name1", 9);
// imagepng($img);
// imagedestroy($img);