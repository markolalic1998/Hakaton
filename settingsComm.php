<?php

session_start();
include "database.php";

$sett = "";
if(isset($_POST['change']))
    $sett = mysqli_real_escape_string($connection, $_POST['change']);

$coom = "";
if(isset($_POST['change']))
    $coom = mysqli_real_escape_string($connection, $_POST['coom']);

if(!empty($sett)){


    $check1 = 0;
    if(strlen($sett)> 5 || strlen($sett)<255)
        $check1 = 1;
    else
        echo "min 5 chars/ max 255 chars";

    $sql = "UPDATE community SET c_name = '$sett' WHERE c_name = '$coom';";
    if($check1){
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        if($result)
            echo "Name changed";
        else
            echo "Error";
    }
}
