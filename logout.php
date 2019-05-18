<?php
session_start();
if(isset($_POST['logout']))
{
    $_SESSION['logged'] = 'false';
    session_destroy();
    header("Location:login.php");
}
