<?php
session_start();
include "database.php";

$abs = 0;
$user = "";
$ban = 0;

if(isset($_POST['abs']))
    $abs = $_POST['abs'];

if(isset($_POST['user']))
    $user = $_POST['user'];

if(isset($_POST['ban']))
    $ban = $_POST['ban'];

if($abs == 1 && !empty($user)) {

    $user_banned = 0;
    $sql_user_banned = "SELECT * FROM users WHERE banned = '1' AND username = '$user';";
    $result_user_banned = mysqli_query($connection, $sql_user_banned) or die(mysqli_error($connection));
    if($result_user_banned)
        echo "This user is banned, you can't give him an abs";
    else
        $user_banned = 1;

    $check_logged_abs = 0;
    if ($user == $_SESSION['username'])
        echo "You can not use admin controls on yourself";
    else
        $check_logged_abs = 1;

    $sql_abs_status_check = "SELECT * FROM users WHERE abs = '1' AND username='$user';";
    $result_abs_status_check = mysqli_query($connection, $sql_abs_status_check) or die(mysqli_error($connection));

    if (mysqli_num_rows($result_abs_status_check) > 0)
        $change_status = 0; // ako postoji kao admin, onda mu se skida
    else
        $change_status = 1; // ako nije admin onda mu ga dajemo


    $sql_give_abs = "UPDATE users SET abs = '$change_status' WHERE username = '$user';";

    if ($check_logged_abs && $user_banned) {
        $result_give_abs = mysqli_query($connection, $sql_give_abs);
        if ($result_give_abs) {
            if ($change_status)
                echo "Drina Community Member " . $user . " is now ABS !";
            else
                echo "Drina Community ABS " . $user . " is no more ABS ! ";
        } else {
            echo "There was a problem with the ABS assignment, try later !";
        }

    }
}


if($ban == 1 && !empty($user)){

    $personal_prohibition = 0;
    if ($user == $_SESSION['username'])
        echo "You can not BAN yourself";
    else
        $personal_prohibition = 1;

    $sql_check_ban_status = "SELECT * FROM users WHERE banned = '1' AND username='$user';";
    $result_check_ban_status = mysqli_query($connection, $sql_check_ban_status) or die(mysqli_error($connection));

    if (mysqli_num_rows($result_check_ban_status) > 0)
        $change_ban_status = 0;
    else
        $change_ban_status = 1;


    $sql_ban_unban = "UPDATE users SET banned = '$change_ban_status' WHERE username = '$user';";

    if ($personal_prohibition) {
        $result_ban_unban = mysqli_query($connection, $sql_ban_unban);
        if ($result_ban_unban) {
            if ($change_ban_status) {
                echo "Former Drina Community Member " . $user . " is banned !";
                $sql_banned_abs  = "UPDATE users SET abs = '0' WHERE username = '$user';";
                $result_banned_abs = mysqli_query($connection, $sql_banned_abs);
            }
            else {
                echo "Drina Community Member " . $user . " is no more banned ! ";
            }
        } else {
            echo "There was a problem with banning users, try later !";
        }

    }
}
