<?php
// DEO ZA PRIHVATANJE PODATAKA
require "database.php";
$comm_id = 0;

if(isset($_POST['comm_id']))
    $comm_id = $_POST['comm_id'];


if($comm_id != 0)
{
    $sql_find_comm = "SELECT * FROM community WHERE id_comm = '$comm_id';";
    $result_find_comm = mysqli_query($connection, $sql_find_comm) or die($connection);

    if(mysqli_num_rows($result_find_comm)>0) {
        while ($recordd = mysqli_fetch_array($result_find_comm, MYSQLI_ASSOC))
        {
            echo $recordd['comm_logo'].",";
            echo $recordd['c_name'].",";
            echo $recordd['id_comm'].",";
            echo $recordd['color'];
        }
    }

}




