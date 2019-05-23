<?php

session_start();

include_once "database.php";

    $_SESSION['logged'] = "false";

    $username = $password = "";

    if(isset($_POST['username']))
        $username = mysqli_real_escape_string($connection, $_POST['username']);

    if(isset($_POST['password']))
        $password =  mysqli_real_escape_string($connection, $_POST['password']);

    $SALT="aSD2213qse21ewdqwQWEQDWQWE13";
    $pass1 = md5($password);
    $password = $SALT.$pass1.$SALT;

    $sql_ban_check = "SELECT * FROM users WHERE banned = '1' AND username = '$username';";
    $result_ban_check = mysqli_query($connection, $sql_ban_check) or die(mysqli_error($connection));
    $ban = 0;
    if(mysqli_num_rows($result_ban_check))
        echo "You are banned !";
    else
        $ban = 1;

    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password';";

    if($ban) {
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
        } else {
            $_SESSION['logged'] = false;
            header("Location:login.php");
        }
    }