<?php

session_start();
include "database.php";

// ============================================== BRISANJE TOPICA

$del_topic_id = "";
if(isset($_POST['del_topic_id']))
    $del_topic_id = $_POST['del_topic_id'];

// prvo moramo pronaci korisnika / abs-a koji je postavio topic, da bi mu se poslali poruka o brisanju istog topica

$sql_catch = "SELECT * FROM topics WHERE id_topics = '$del_topic_id';";
$result_catch = mysqli_query($connection, $sql_catch) or die(mysqli_error($connection));
if (mysqli_num_rows($result_catch) > 0) {
    $record_catch = mysqli_fetch_array($result_catch);
    $creator = $record_catch['creator'];
}

// brisu se  i komentari i lajkovi jer su referencirani na id_topics, prvo njih moramo obrisati

    $sql_del_topic_likes = "DELETE FROM likes WHERE id_topics = '$del_topic_id';";
    $result_del_topic_likes = mysqli_query($connection, $sql_del_topic_likes) or die(mysqli_error($connection));

    $sql_del_topic_comments = "DELETE FROM topic_comments WHERE id_topics = '$del_topic_id';";
    $result_del_topic_comments = mysqli_query($connection, $sql_del_topic_comments) or die(mysqli_error($connection));

    $sql_del_topic = "DELETE FROM topics WHERE id_topics = '$del_topic_id';";
    $result_del_topic = mysqli_query($connection, $sql_del_topic) or die(mysqli_error($connection));

    if ($result_del_topic) {

            $sql_user_id = "SELECT * FROM users WHERE username = '$creator';";
            $result_user_id = mysqli_query($connection, $sql_user_id) or die(mysqli_error($connection));

            if (mysqli_num_rows($result_user_id) > 0) {

                $record_user_id = mysqli_fetch_array($result_user_id);
                $user_id = $record_user_id['id_user'];
                $id_abs = $_SESSION['id'];
                $text_notf = "Topic which you are posted was deleted by abs " . $_SESSION['username'];
                $sql_send_notf = "INSERT INTO notf(id_user, id_abs, text)VALUES('$user_id', '$id_abs', '$text_notf')";
                $result_send_notf = mysqli_query($connection, $sql_send_notf);

            }
    }
    if($result_del_topic)
        header("Location: index.php");

