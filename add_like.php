<?php

session_start();
include "database.php";

$id_topic = "";

if(isset($_POST['id_topic']))
    $id_topic = mysqli_real_escape_string($connection, $_POST['id_topic']);


if(!empty($id_topic)) {
// =========== Trazimo id od korisnika preko SESSIONA
    $username = $_SESSION['username'];

// =========== Proveravamo da li je vec lajkovano, odnosno da li postoji u bazi
    $sql_check_liked = "SELECT id_like as id_like FROM likes WHERE id_topics = '$id_topic' AND username = '$username';";
    $result_check_liked = mysqli_query($connection, $sql_check_liked) or die(mysqli_error($connection));
    if(mysqli_num_rows($result_check_liked)>0)
    {
        $values = mysqli_fetch_array($result_check_liked);
        $id_like = $values['id_like'];
    }

// =========== Ako vec postoji u bazi, obrisi, ako ne (else) onda dodaj u bazi !
    if (mysqli_num_rows($result_check_liked) > 0) {

        $sql_unlike = "DELETE FROM likes WHERE id_like = '$id_like' AND id_topics = '$id_topic' AND username = '$username';";
        $result_unlike = mysqli_query($connection, $sql_unlike) or die(mysqli_error($connection));
        if ($result_unlike)
            echo false;
    } else {
        $sql_like = "INSERT INTO likes(id_topics, username) VALUES ('$id_topic', '$username');";
        $result_like = mysqli_query($connection, $sql_like) or die($connection);
        if ($result_like)
            echo true;
    }
}

// ========== Broj lajkova
































