<?php include "database.php";
header('Content-Type:application/json;charset=utf-8');

$sql = "SELECT username FROM users WHERE banned=1";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {

    $data = [];
    $users = [];

    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = ['username' => $record['username']];
    }
    $users = ["users" => $data];
    echo json_encode($users);
} else
    echo "No data!";
?>