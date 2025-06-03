<?php
$servername = "localhost";
$username="root";
$password="";
$db_name="academyy";

$conn = new mysqli($servername,$username,$password,$db_name);
    if($conn==true){
        echo "";
    }else{
        echo "failed to connect";
    }










?>