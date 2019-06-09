<?php
session_start();
include "database.php";

$code = 0; //request isn't sent

if(isset($_POST['value']))
    $value = mysqli_real_escape_string($connection, $_POST['value']);

if(isset($_POST['code']))
    $code = $_POST['code'];


if($code == 1) {
    $sql_search = "SELECT * FROM community WHERE c_name like '%$value%'";
    $result_search = mysqli_query($connection, $sql_search) or die(mysqli_error($connection));

    if (mysqli_num_rows($result_search) > 0) {
        while ($record = mysqli_fetch_array($result_search)) {
            ?>

            <div class="col-sm-4 text-center high-member-card">
                <br>
                <div class="col-sm-12 member-card">
                    <div class="col-sm-12" id="c_logo">
                        <p><i class="<?php echo $record['comm_logo'] ?>" style="font-size: 60px;"></i></p>
                    </div>
                    <div class="col-sm-12 member-card-info text-center">
                        <span id="c_name"><?php echo $record["c_name"]; ?></span>
                        <span id="role"><?php echo $record["c_abs"]; ?></span>
                        <span id="id_member" style="display: none;"><?php echo $record["id_comm"]; ?></span>

                    </div>
                    <div class="col-sm-12">
                        <?php

                        if($record['status'] == 0) {
                            ?>
                            <span class="join" onclick="ajaxJoinComm(<?php echo $record['id_comm']; ?>);">JOIN</span>
                            <?php
                        }
                        else{
                            ?>
                            <span class="join">PRIVATE</span>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
elseif ($code == 2){

$id_comma = "";
$username = $_SESSION['username'];


if(isset($_POST['id_comm']))
    $id_comma = $_POST['id_comm'];


$sql_check_new_member = "SELECT * FROM comm_members WHERE username = '$username' and id_comm = '$id_comma';";
$result_check_new_member = mysqli_query($connection, $sql_check_new_member) or die(mysqli_error($connection));

$check_mem = 0;
if(mysqli_num_rows($result_check_new_member)<1)
    $check_mem = 1;



$sql_add_user = "INSERT INTO comm_members(username, id_comm) VALUES ('$username', '$id_comma');";
if($check_mem == 1) {
    $result_add_user = mysqli_query($connection, $sql_add_user) or die(mysqli_error($connection));

    if($result_add_user)
        echo "You are now member of your new community !";
    else
        echo "Error with adding news members";
}
else
{
    echo "You are already member of that community !";
}


}
else
{
    echo "error";
}