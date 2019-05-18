<?php
session_start();
include "database.php";


$error = '';
$comment_name = '';
$comment_content = '';
$posted = date("Y-m-d H:i:s");

$post = '';
if(isset($_POST['id_topic']))
    $post = mysqli_real_escape_string($connection, $_POST['id_topic']);

$username = '';
if(isset($_POST['user']))
    $username = mysqli_real_escape_string($connection, $_POST['user']);

$sql = "SELECT id_user as id from users WHERE username='$username';";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$values = mysqli_fetch_array($result);
$user = $values['id'];



if(empty($_POST["message"])){
    $error = '<p class="text-danger">Text is required !</p>';
    echo "<p class=\"text-danger\">Text is required !</p>";
}
else{
    $comment_content = $_POST['message'];
}

if($error == ''){
    $query ="INSERT INTO topic_comments (id_topics, id_user, text, posted) VALUES ('$post', '$user', '$comment_content', '$posted');";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    if($result)
        echo "<p class=\"text-success\">Comment added !</p>";

    $error = '<label class="succes">Comment added !</label>';
}


