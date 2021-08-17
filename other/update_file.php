<?php

$local = '<?php
 // $con = mysqli_connect("localhost", "u762435158_techeduxon", "Techeduxon@123", "u762435158_techeduxon");
$con = mysqli_connect("localhost", "root", "", "techeduxon");
// $con = mysqli_connect("localhost", "root", "", "test");

if(isset($_GET["check"])){
    if($con){
        echo "Connected Successfully";
    }else{
        echo "Connection Failed";
    }
}

?>
';
$stag = '<?php  
$con = mysqli_connect("localhost", "u762435158_techeduxon", "Techeduxon@123", "u762435158_techeduxon");
// $con = mysqli_connect("localhost", "root", "", "techeduxon");
// $con = mysqli_connect("localhost", "root", "", "test");

if(isset($_GET["check"])){
    if($con){
        echo "Connected Successfully";
    }else{
        echo "Connection Failed";
    }
}

?>
';


if(isset($_GET['local'])){
echo file_put_contents("./main_config.php","$local");
}

if(isset($_GET['stag'])){
echo file_put_contents("./main_config.php","$stag");
}





?>