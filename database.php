<?php

$ip = "127.0.0.1";
$name = "root";
$pass = "";
$db = "goods";

$inclutions = mysqli_connect($ip, $name, $pass, $db);

if($inclutions == false){
    echo "Помилка підключення";
}

?>