<?php
session_start();
include "database.php";


$title = "";
$tag = "";
$desc = "";
$content = "";

 // nastaviti ajax za dodavanje topica

if(isset($_POST['title']))
    $title =mysqli_real_escape_string($connection, $_POST['title']);

if(isset($_POST['tag']))
    $tag =mysqli_real_escape_string($connection, $_POST['tag']);

if(isset($_POST['desc']))
    $desc =mysqli_real_escape_string($connection, $_POST['desc']);

if(isset($_POST['content']))
    $content =mysqli_real_escape_string($connection, $_POST['content']);

if(isset($_POST['cover']))
    $cover = $_POST['cover'];

    $target = "img/blog/" . basename($_FILES[$cover]['name']); //['name']
    $image = mysqli_real_escape_string($connection, $_FILES[$cover]['name']);


$creator = $_SESSION['username'];
$created = date("Y-m-d");

$sql = "INSERT INTO topics (title, content, creator, cover, tag, full_content, created, topic_likes) values ('$title', '$desc', '$creator', '$image', '$tag','$content', '$created', 0)";

    if(move_uploaded_file($_FILES['cover']['tmp_name'], $target)  AND $tag != "" AND $title != "" AND $desc != "" AND $image != "")
    {
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if($result)
            echo "<p style='color: green; font-style: oblique;'> [*] Topic was added !</p>";

    }
    else
    {
        echo "<p style='color: red; font-style: oblique;'> [!] Somethings went wrong !</p>";
    }

