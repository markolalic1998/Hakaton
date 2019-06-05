<?php

session_start();
include "database.php";

$id_comm = 0;

if(isset($_POST['id_comm']))
    $id_comm = $_POST['id_comm'];


if($id_comm != 0){
    $sql_status = "SELECT * FROM comm_status WHERE id_comm = '$id_comm' ORDER BY id_status DESC;";
    $result_status = mysqli_query($connection, $sql_status) or die(mysqli_error($connection));

    if(mysqli_num_rows($result_status) > 0){
        while($record = mysqli_fetch_array($result_status, MYSQLI_ASSOC))
        {
            $user = $record['creator'];
            $sql_find_user = "SELECT * FROM users WHERE username = '$user';";
            $result_find_user = mysqli_query($connection, $sql_find_user) or die(mysqli_error($connection));

            $values = mysqli_fetch_array($result_find_user);
            $userPhoto = $values['picture'];
            $first = $values['first'];
            $last = $values['last'];
            ?>
            <div class="col-sm-12" style="background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.25); border-radius: 5px; margin-bottom: 40px;"> <!-- Status block -->
                <div class="col-sm-12">
                    <div class="col-sm-12" style="padding: 20px;">  <!-- First line in status block -->
                        <div class="col-sm-2"> <!-- PROFIL PICTURE -->
                            <img id="photo" class="img-circle" style="display: block" width="50px" height="50px" src="img/profile/<?php echo $userPhoto; ?>" alt="StatusPicture">
                        </div> <!--END OF PROFIL PICTURE -->
                        <div class="col-sm-7"> <!-- Free spaces -->
                            <span style="font-size: 20px;font-family: 'Ubuntu', sans-serif; margin-top: 35px; color: #222;"> <?php echo $first ?>  <?php echo $last; ?></span>
                        </div>
                        <div class="col-sm-3" style="text-align: right;">
                            <span id="date_posted"><i class="fas fa-ellipsis-v" style="font-size: 20px;"></i></span>
                        </div>
                        <div class="col-sm-10" style="text-align: left;">
                            <span id="date_posted"><?php echo $record['added']; ?></span>
                        </div>
                    </div><!-- First line in status block -->

                    <div class="col-sm-12"> <!-- STATUS CONTENT -->
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10">
                            <p style="font-size: 25px; color: #222222"><?php echo $record['s_content']; ?></p>
                        </div>

                    </div> <!-- END OF STATUS CONTENT -->

                    <div class="col-sm-12"> <!-- USER ACTION BAR -->

                        <div class="col-sm-6 status-action" id="like-button" style="text-align: center; font-size: 15px; font-weight: bold;"> <!-- Likes -->
                            <i class="far fa-thumbs-up" style="font-size: 20px;"></i><span style="font-family: 'Ubuntu', sans-serif; margin-left: 10px;">Likes</span>
                        </div>
                        <div class="col-sm-6 status-action" id="comment-button" onclick="setFocus()" style="text-align: center; font-weight: bold;"> <!-- Comment -->
                            <i class="far fa-comments" style="font-size: 19px;"></i><span style="font-family: 'Ubuntu', sans-serif; margin-left: 10px; ">Comment</span>
                        </div>

                    </div> <!-- END OF USER ACTION BAR -->

                    <div class="col-sm-12" style="margin: 3px;"> <!-- USER  COMMENT AREA -->
                        <p style="font-size: 16px;">Comment something ...</p>
                        <div class="col-sm-2"> <!-- USER picture -->
                            <img id="photo" class="img-circle" style="display: block" width="40px" height="40px" src="img/profile/<?php echo $_SESSION['picture'];?>" alt="StatusPicture">
                        </div>
                        <div class="col-sm-10">
                            <textarea type="text" id="makeStatusComment" placeholder="Write something, <?php echo $_SESSION['first']; ?>"></textarea>
                        </div>
                    </div> <!-- END of USER COMMENT AREA -->
                </div>
            </div>


<?php
        }
    }
}
?>


<script>


</script>
