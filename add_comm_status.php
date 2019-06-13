<?php
session_start();
include "database.php";


$id_comm = 0;
$statusText = "";

if(isset($_POST['statusText']))
    $statusText = mysqli_real_escape_string($connection, $_POST['statusText']);

if(isset($_POST['id_comm']))
    $id_comm = mysqli_real_escape_string($connection, $_POST['id_comm']);

if(!empty($statusText)) {
    $date = date("Y-m-d");

    $sql_check_comm = "SELECT * FROM community WHERE id_comm = '$id_comm';";
    $result_check_comm = mysqli_query($connection, $sql_check_comm) or die(mysqli_error($connection));

    $check_comm = 0;
    if (mysqli_num_rows($result_check_comm) > 0)
        $check_comm = 1;
    else
        echo "That community does not exist in the database !";

    $statusText_check = 0; // OVO NE RADI
    if (strlen($statusText) > 5 OR strlen($statusText) < 255)
        $statusText_check = 1;
    else
        echo "Strlen >5 <255";

    $creator = $_SESSION['username'];

    // prover da li je korisnik clan grupe
    $sql_check_member = "SELECT * FROM comm_members WHERE username = '$creator' AND id_comm = '$id_comm';";
    $result_check_member = mysqli_query($connection, $sql_check_member) or die(mysqli_error($connection));

    $check_member = 0;
    if (mysqli_num_rows($result_check_member) > 0)
        $check_member = 1;
    else
        echo "You must be member of this community !";


    $sql_insert_status = "INSERT INTO comm_status (creator, id_comm, added, s_content) VALUES ('$creator', '$id_comm', '$date', '$statusText')";

    if ($check_comm == 1 && $statusText_check == 1 && $check_member == 1)
    {
        $result_insert_status = mysqli_query($connection, $sql_insert_status) or die(mysqli_error($connection));
        if (!$result_insert_status)
            echo "Something went wrong, try later !";


    } else {
        echo "Problem with check !";
    }
}
else
{
    echo "You can't post status without text !";
}