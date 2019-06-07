<?php
// DEO ZA PRIHVATANJE PODATAKA
require "database.php";
$comm_id = 0;

if(isset($_POST['comm_id']))
    $comm_id = $_POST['comm_id'];


if($comm_id != 0)
{
    $sql_find_comm = "SELECT * FROM community WHERE id_comm = '$comm_id';";
    $result_find_comm = mysqli_query($connection, $sql_find_comm) or die($connection);

    if(mysqli_num_rows($result_find_comm)>0) {
        while ($recordd = mysqli_fetch_array($result_find_comm, MYSQLI_ASSOC)) {
            echo $recordd['comm_logo'] . ",";
            echo $recordd['c_name'] . ",";
            echo $recordd['id_comm'] . ",";
            echo $recordd['color'] . ",";
            echo $recordd['c_abs'] . ",";

            $abs_username = $recordd['c_abs'];
            $sql_profile_picture = "SELECT picture FROM users WHERE username = '$abs_username';";
            $result_profile_picture = mysqli_query($connection, $sql_profile_picture) or die(mysqli_error($connection));
            $value = mysqli_fetch_array($result_profile_picture);
            $admin_pict = $value['picture'];
            echo $admin_pict . ",";

            $sql_show_members = "SELECT * FROM comm_members WHERE id_comm = '$comm_id';";
            $result_show_members = mysqli_query($connection, $sql_show_members) or die(mysqli_error($connection));
            if (mysqli_num_rows($result_show_members) > 0) {
                while ($recorddd = mysqli_fetch_array($result_show_members, MYSQLI_ASSOC)) {
                    $user_member = $recorddd['username'];
                    $sql_member_user = "SELECT * FROM users WHERE username = '$user_member';";
                    $result_member_user = mysqli_query($connection, $sql_member_user) or die(mysqli_error($connection));

                    while ($record_m_u = mysqli_fetch_array($result_member_user, MYSQLI_ASSOC)) {
                        ?>

                        <div class="col-sm-4 text-center high-member-card animated fadeIn">
                        <br>
                        <div class="col-sm-12 member-card">
                        <div class="col-sm-12">
                            <img class="img-circle img-thumbnail"
                                 src="img/profile/<?php echo $record_m_u["picture"]; ?>" height="100px" width="100px"
                                 alt="Member Picture">
                        </div>
                        <div class="col-sm-12 member-card-info text-center">
                            <span><?php echo $record_m_u["username"]; ?></span>
                            <span id="role"><?php echo $recorddd["role_name"]; ?></span>
                            <span id="id_member" style="display: none;"><?php echo $recorddd["id_member"]; ?></span>
                        </div>
                        <?php
                        $user_check = $record_m_u['username'];
                        $sql_check_c_abs = "SELECT c_abs FROM community WHERE id_comm='$comm_id'";
                        $result_check_c_abs = mysqli_query($connection, $sql_check_c_abs) or die(mysqli_error($connection));
                        $value_c_abs = mysqli_fetch_array($result_check_c_abs);
                        $check_c_abs = $value_c_abs['c_abs'];
                        if($record_m_u['username'] != $check_c_abs) {
                            ?>
                            <div class="col-sm-6">
                                <i class="fas fa-angle-double-up" style="font-size: 20px;" title="Promotion"></i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-user-slash" style="font-size: 20px;" title="Remove"></i>
                            </div>
                            <?php

                        }
                        else
                        {
                            ?>
                            <div class="col-sm-12 text-center" style="font-weight: bold">
                                Admin
                            </div>
                            <?php
                        }
                            ?>
                            </div>
                            </div>

                            <?php

                    }

                }

            }
        }

    }

}




