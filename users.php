<?php

include "database.php";

$abs = 0;

if(isset($_POST['abs']))
    $abs = $_POST['abs'];

if($abs == 1)
{
    $user = $_POST['user'];

    //napraviti posle proveru da li je koristnik abs, ako jeste onda set abs na 0

    $sql_give_abs = "INSERT INTO users(abs) VALUE (1);";
    $result_give_abs = mysqli_query($connection, $sql_give_abs);
}
