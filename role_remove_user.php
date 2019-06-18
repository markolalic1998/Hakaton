<?php
session_start();
include "database.php";

$code = 0;
$username = "";
$new_role = "";
$comm_id = 5000;

if(isset($_POST['code']))
    $code = $_POST['code'];

if(isset($_POST['username']))
    $username = $_POST['username'];

if(isset($_POST['new_role']))
    $new_role = $_POST['new_role'];

if(isset($_POST['id_comm']))
    $comm_id = $_POST['id_comm'];

if($code == 1 && !empty($username) && !empty($new_role) && $comm_id != 5000 )
{
    $sql_search_for_id = "SELECT id_user FROM users WHERE username = '$username';";
    $result_searching = mysqli_query($connection, $sql_search_for_id) or die(mysqli_error($connection));
    $value = mysqli_fetch_array($result_searching);
    $id = $value['id_user'];

    echo $id;


    $sql_update = "UPDATE comm_members SET role_name = '$new_role'  WHERE username = '$username' AND id_comm = '$comm_id';";
    $result_insert = mysqli_query($connection, $sql_update) or die(mysqli_error($connection));

}


if($code == 3){

    $user = $_SESSION['username'];

    $sql_check_admin = "SELECT * FROM community WHERE c_abs = '$user' AND id_comm = '$comm_id';";
    $result_c_check = mysqli_query($connection, $sql_check_admin) or die(mysqli_error($connection));

    $check_c_admin = 0;
    if(mysqli_num_rows($result_c_check)>0)
        echo "You can not leave this community, casue you are Admin here !";
    else
        $check_c_admin = 1;


    $sql_leave = "DELETE FROM comm_members WHERE id_comm = '$comm_id' AND username = '$user';";

    if($check_c_admin == 1) {
        $result_leave = mysqli_query($connection, $sql_leave) or die(mysqli_error($connection));

        if ($result_leave)
            echo "You are not more  member of that community";
    }
}
