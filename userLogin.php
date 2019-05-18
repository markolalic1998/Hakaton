<?php

session_start();

include_once "database.php";

if(isset($_POST['submit'])) {
    $_SESSION['logged'] = "false";

    $username = $password = "";

    if(isset($_POST['username']))
        $username = mysqli_real_escape_string($connection, $_POST['username']);

    if(isset($_POST['password']))
        $password =  mysqli_real_escape_string($connection, $_POST['password']);

    $SALT="aSD2213qse21ewdqwQWEQDWQWE13";
    $pass1 = md5($password);
    $password = $SALT.$pass1.$SALT;


    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password';";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


    if (mysqli_num_rows($result) > 0) {
        while ($record = mysqli_fetch_array($result)) {

            $_SESSION['logged'] = 'true';
            $_SESSION['username'] = $username;

            $_SESSION['id_user'] = $record['id_user'];
            $_SESSION['first'] = $record['first'];
            $_SESSION['last'] = $record['last'];
            $_SESSION['picture'] = $record['picture'];
            $_SESSION['birth'] = $record['birth'];
            $_SESSION['abs'] = $record['abs'];
            $_SESSION['reg'] = $record['registered'];

            header("Location:index.php");

        }
    }
    else
    {
        $_SESSION['logged'] = false;
        header("Location:login.php");
    }

}