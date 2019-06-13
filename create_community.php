<?php
session_start();
include "database.php";

$input1 = "";
if(isset($_POST['input1']))
    $input1 = mysqli_real_escape_string($connection, $_POST['input1']);

$c_logo = "";
if(isset($_POST['c_logo']))
    $c_logo = mysqli_real_escape_string($connection, $_POST['c_logo']);

$opis = "";
if(isset($_POST['opis']))
    $opis = mysqli_real_escape_string($connection, $_POST['opis']);


if(!empty($input1) || !empty($c_logo) || !empty($opis))
{
    $username = $_SESSION['username'];

    $check_user = 0;
    $sql_check_user = "SELECT * FROM community WHERE c_abs = '$username';";
    $res_check_user = mysqli_query($connection, $sql_check_user) or die(mysqli_error($connection));
    if(mysqli_num_rows($res_check_user)>0){
        $j=1;
        while($couner = mysqli_fetch_array($res_check_user)){
            $j++;
        }
    }

    if($j>=3)
        echo "You already have more then 3 communities on your name !";
    else
        $check_user = 1;

    $check1 = 0;
    if(strlen($input1)>5)
        $check1 = 1;
    else
        echo "Name < 5 !chars";


    $check2 = 0;
    if(strlen($opis)>=5)
        $check2 = 1;
    else
        echo "Description < 5 !chars";

    $color = "grey";
    $date = date("Y-m-d");
    $c_abs = $_SESSION['username'];

    $sql_insert = "INSERT INTO community (c_name, created, c_abs, comm_logo, color, description, status) VALUES ('$input1', '$date', '$c_abs', '$c_logo', '$color', '$opis', 0);";

    if($check1 && $check2 && $check_user)
    {
        $result_insert = mysqli_query($connection, $sql_insert) or die(mysqli_error($connection));

        if($result_insert) {
            echo "Community is created !";

            $sql_id = "SELECT id_comm FROM community WHERE c_name = '$input1';";
            $res_id = mysqli_query($connection, $sql_id);
            $value = mysqli_fetch_array($res_id);
            $id = $value['id_comm'];


            $add_member = "INSERT INTO (username, id_comm) VALUES ('$c_abs', '$id');";
            $added = mysqli_query($connection, $add_member);
            if($added)
                echo "You are first member of new community !";
        }
        else
            echo "Error ! Try later !";
    }
}
else
{
    echo "Something went wrong, try later !";
}