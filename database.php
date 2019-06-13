<?php

$conn= "localhost";
$user="root";
$password="";
$dbname="bridge";

$connection = mysqli_connect($conn,$user,$password,$dbname);

if(!$connection){
    mysqli_error($connection);
    die();
}
