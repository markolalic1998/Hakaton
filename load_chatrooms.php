<?php
session_start();
include "database.php";

// chat roooms

$cr_id = 0;
if(isset($_POST['crID']))
    $cr_id = $_POST['crID'];

$comm_id=0;
if (isset($_POST['comm_id']))
    $comm_id = $_POST['comm_id'];

$code=0;
if (isset($_POST['code']))
    $code = $_POST['code'];

$text_mess= "";
if (isset($_POST['text']))
    $text_mess = $_POST['text'];


if($code!=2) {
    $sql_cr = "SELECT * FROM chat_rooms WHERE id_comm = '$comm_id';";
    $result_cr = mysqli_query($connection, $sql_cr) or die(mysqli_error($connection));


    if (mysqli_num_rows($result_cr) > 0) {
        $s = 0;
        while ($rec_cr = mysqli_fetch_array($result_cr)) {
            $s = $s + 1;
            // echo "<h6 onclick='openCr(\".$idcr.\")'>" . $rec_cr['cr_name'] . "</h6>";
            ?>
            <span style="display: none;" id="cr<?php echo $s; ?>"> <?php echo $rec_cr['id_cr']; ?>"</span>
            <h6 onclick="openCr(<?php echo $rec_cr['id_cr']; ?>)"> <?php echo $rec_cr['cr_name']; ?> </h6>
            <?php

        }
    }
}
elseif ($code == 2){
    $id_user = $_SESSION['id_user'];


    $check_mess = 0;
    if(strlen($text_mess)>0 || strlen($text_mess)<255)
        $check_mess = 1;
    else
        echo "min 1 - max 255";

        $sql_insert = "INSERT INTO cr_mess (id_cr, id_user, text) VALUES ('$cr_id', '$id_user', '$text_mess');";


    if($check_mess == 1)
        $res_insert = mysqli_query($connection, $sql_insert) or die(mysqli_error($connection));


}
//////////////
