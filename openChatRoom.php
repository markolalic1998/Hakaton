<?php
session_start();
include "database.php";

$cr_id = 0;
if(isset($_POST['cr-id']))
    $cr_id = $_POST['cr-id'];

$_SESSION['id_cr'] = $cr_id;



$sql_cr2 = "SELECT * FROM cr_mess WHERE id_cr = '$cr_id';";
$result_cr2 = mysqli_query($connection, $sql_cr2) or die(mysqli_error($connection));
echo $cr_id.",";
if(mysqli_num_rows($result_cr2)>0) {
    $s=0;
    while ($rec_cr2 = mysqli_fetch_array($result_cr2)) {

        $user = $rec_cr2['id_user'];
        $sql_find_user = "SELECT * FROM users WHERE id_user = '$user';";
        $result_user = mysqli_query($connection, $sql_find_user) or die(mysqli_error($connection));
        $values = mysqli_fetch_array($result_user);

        $user_pp = $values['picture'];
        $user_fl = $values['first'] . " " . $values['last'];

/*
        <div class="col-sm-12" id="cr_message">
            <div class="col-sm-12">
                <h6 id="user-title"><?php echo $user_fl; ?></h6>
            </div>
            <div class="col-sm-2">
                <img id="user-pp" class="img-circle" src="img/profile/<?php echo $user_pp; ?>" alt="MessPP" height="40px" width="40px">
            </div>
            <div class="col-sm-10" id="mess-text">
                <h6><?php echo $rec_cr2['text']; ?></h6>
            </div>
            <hr>
        </div>
*/

        print " <div class=\"col-sm-12\" id=\"cr_message\">\n";
        print "            <div class=\"col-sm-12\">\n";
        print "                <h6 id=\"user-title\">".$user_fl."</h6>\n";
        print "            </div>\n";
        print "            <div class=\"col-sm-2\">\n";
        print "                <img id=\"user-pp\" class=\"img-circle\" src=\"img/profile/".$user_pp."\" alt=\"MessPP\" height=\"40px\" width=\"40px\">\n";
        print "            </div>\n";
        print "            <div class=\"col-sm-10\" id=\"mess-text\">\n";
        print "                <h6>".$rec_cr2["text"]."</h6>\n";
print "            </div>\n";
print "            <hr>\n";
print "        </div>\n";

    }
}
else
{
    ?>
    <div>
        <h1 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;"><i class="far fa-comments"></i></h1>
        <h3 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;"> Start conversation in this chat room</h3>
    </div>
<?php


}


