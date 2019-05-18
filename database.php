<?php

$database= "localhost";
$user="root";
$password="";
$dbname="bridge";

$connection = mysqli_connect($database,$user,$password,$dbname);

if(!$connection){
    mysqli_error($connection);
    die();
}
