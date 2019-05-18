<?php
session_start();
include "database.php";

$show_like_topic_id = "";

if(isset($show_like_topic_id))
    $show_like_topic_id = mysqli_real_escape_string($connection, $_POST['show_like_topic_id']);

    $sql_show_likes = "SELECT count(id_like) as num_rows from likes WHERE id_topics ='$show_like_topic_id';";
    $result_show_likes = mysqli_query($connection, $sql_show_likes) or die(mysqli_error($connection));
    $values_show_likes = mysqli_fetch_array($result_show_likes);
    $show_like = $values_show_likes['num_rows'];
    echo $show_like;
