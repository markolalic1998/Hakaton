<?php
 session_start();
 include "database.php";

if(isset($_POST['submit'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conf_pass = $_POST['confirm'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];

    $reg = date("Y-m-d");
    $logged = 0;
    $picture = "default.jpg";
    $abs = 0;

    $sql2 = "SELECT * FROM users WHERE username = '$username';";
    $result2 = mysqli_query($connection, $sql2)  or die(mysqli_error($connection)); // CHECK USERNAME
    $error = 0;
    if(mysqli_num_rows($result2) > 0)
    {
        $error = 1;
    }

    if($password == $conf_pass and $error == 0) {

        $SALT="aSD2213qse21ewdqwQWEQDWQWE13";
        $pass1 = md5($password);
        $password = $SALT.$pass1.$SALT;
        $sql = "INSERT INTO users (username, password, first, last, email, birth, abs, logged, picture, registered, banned,warn) values ('$username', '$password', '$first', '$last', '$email', '$birth', '$abs', '$logged', '$picture', '$reg', 0, 0)";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        header("location: index.php");
    }
    elseif ($error == 1 and $password != $conf_pass) {
        header("Location: registration.php?nav=3");
    }
    elseif ($error == 1)
    {
        header("Location: registration.php?nav=1");
    }
    elseif ($password != $conf_pass) {
        header("Location: registration.php?nav=2");
    }
}

