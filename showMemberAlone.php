<?php
// Ovde se iscitava zasebno jedan clan zajednice u izdvojeni div koji je display none dok se ne klikne, sluzi da bi se vrsile admin komande nad njim
session_start();
include "database.php";

if(isset($_POST['id_member']))
    $id_member = $_POST['id_member'];

$sql_find_username = "SELECT username, role_name FROM comm_members WHERE id_member = '$id_member';";
$result_find_username = mysqli_query($connection, $sql_find_username) or die(mysqli_error($connection));
$value = mysqli_fetch_array($result_find_username);
$username = $value['username'];

$select_user = "SELECT * FROM users WHERE username = '$username';";
$result_user = mysqli_query($connection, $select_user) or die(mysqli_error($connection));
$values = mysqli_fetch_array($result_user);

echo $values['username'].";";
echo $value['role_name'].";";
echo $values['picture'].";";
echo $values['first']." ".$values['last'];

