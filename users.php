<?php

include "database.php";

$abs = 0;
$user = "";

if(isset($_POST['abs']))
    $abs = $_POST['abs'];

if(isset($_POST['user']))
    $user = $_POST['user'];

if($abs == 1 && !empty($user))
{
    //napraviti proveru da ne mozes samom sebi skinuti admina

    $sql_abs_status_check = "SELECT * FROM users WHERE abs = '1' AND username='$user';";
    $result_abs_status_check = mysqli_query($connection, $sql_abs_status_check) or die(mysqli_error($connection));

    if(mysqli_num_rows($result_abs_status_check)>0)
        $change_status = 0; // ako postoji kao admin, onda mu se skida
    else
        $change_status = 1; // ako nije admin onda mu ga dajemo


    $sql_give_abs = "UPDATE users SET abs = '$change_status' WHERE username = '$user';";
    $result_give_abs = mysqli_query($connection, $sql_give_abs);

    if($result_give_abs){
        if($change_status)
            echo "Drina Community Member ".$user." is now ABS !";
        else
            echo "Drina Community ABS ".$user." is no more ABS ! ";
    }
    else
    {
        echo "There was a problem with the ABS assignment, try later !";
    }

}
else
{
    echo "There was a mistake, try later! ";
}
