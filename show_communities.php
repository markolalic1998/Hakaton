<?php
session_start();
require "database.php";

$username = $_SESSION['username'];
$sql_show_your_comm = "SELECT * FROM comm_members WHERE username = '$username';";
$result_show_your_comm = mysqli_query($connection, $sql_show_your_comm) or die(mysqli_error($connection));

if(mysqli_num_rows($result_show_your_comm)>0){
    while($record = mysqli_fetch_array($result_show_your_comm, MYSQLI_ASSOC)){
        $comm_id = $record['id_comm'];
        $sql_select_comm = "SELECT * FROM community WHERE id_comm = '$comm_id';";
        $result_select_comm = mysqli_query($connection, $sql_select_comm) or die(mysqli_error($connection));

        if(mysqli_num_rows($result_select_comm)>0) {
            while($result_select_comm1 = mysqli_fetch_array($result_select_comm, MYSQLI_ASSOC)) {
                ?>

                <div class="col-sm-4 text-center high-member-card animated fadeIn">
                <br>
                <div class="col-sm-12 member-card">
                <div class="col-sm-12">
                    <i class="<?php echo $result_select_comm1['comm_logo']; ?>"
                       style="font-size: 50px; color: <?php echo $result_select_comm1['color']; ?>"></i>
                </div>
                <div class="col-sm-12 member-card-info text-center">
                    <span><?php echo $result_select_comm1["c_name"]; ?></span>
                    <span id="role"><?php echo $result_select_comm1["c_abs"]; ?></span>
                    <span id="id_member" style="display: none;"><?php echo $result_select_comm1["id_comm"]; ?></span>
                </div>
                </div>
                </div>
                <?php
            }
        }
    }
}

