<?php

$host = "localhost";
$userName = "root";
$password = "";

$con = mysqli_connect($host,$userName,$password);
if($con){
    echo "db connection success";
}else{
    echo "db connection error".mysqli_connect_error();
}