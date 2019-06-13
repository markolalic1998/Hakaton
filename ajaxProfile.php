<?php
session_start();
include "database.php";


$_SESSION['my'] = false;
if(isset($_POST['my'])){
$_SESSION['my'] = true; //da bi se izbegao user not found
    ?>

    <div class="col-md-5">
        <img src="img/profile/<?php echo $_SESSION['picture']; ?>" width="300px" height="300px" alt="profil picture" class="img-circle img-responsive">
    </div>
    <div class="col-md-7" >
        <h1><?php echo $_SESSION['first']." ".$_SESSION['last']; ?></h1>
        <p class="title">
            <?php
            if($_SESSION['abs']){
                echo "ABS - Administrator Bridge System @".$_SESSION['username'];
            }
            else
            {
                echo "Drina[Bridge] - Member @".$_SESSION['username'];
            }
            ?>
        </p>
        <hr>
        <div class="col-md-6">
        <p><b>Name:</b> <?php echo $_SESSION['first']." ".$_SESSION['last']; ?></p>
        <p><b>Username:</b> <?php echo $_SESSION['username']; ?></p>
        <p><b>Birthday:</b> <?php echo $_SESSION['birth']; ?></p>
        <p><b>Registred</b> <?php echo $_SESSION['reg']; ?></p>
        <br>
            <button id="settings" class="btn btn-primary" onclick="loadSettings()" style="display: none;">Setting</button>
            <br>
        </div>
        <div class="col-md-4" id="sett" style="display: none">
            <span>Change username</span>
            <span>Change name</span>
            <span>Change birthday</span>
            <span>Change password</span>
            <br>
            <span id="hide">Hide settings menu</span>
        </div>
    </div>



<script>

    function loadSettings(){
    let x = $('sett');
    let y = x.style.display;
    if(y != "block")
    x.style.display = "block";
    else
    x.style.display = "none";
    }

</script>
<?php

}

// for searching

$username = '';

if(isset($_POST['name']))
    $username = $_POST['name'];

$sql = "SELECT * from users WHERE username = '$username'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if(mysqli_num_rows($result) > 0){
    if($_SESSION['username']==$username){
        ?>

        <div class="col-md-5">
            <img src="img/profile/<?php echo $_SESSION['picture']; ?>" width="300px" height="300px" alt="profil picture" class="img-circle img-responsive">
        </div>
        <div class="col-md-7" >
            <h1><?php echo $_SESSION['first']." ".$_SESSION['last']; ?></h1>
            <p class="title">
                <?php
                if($_SESSION['abs']){
                    echo "ABS - Administrator Bridge System @".$_SESSION['username'];
                }
                else
                {
                    echo "Drina[Bridge] - Member @".$_SESSION['username'];
                }
                ?>
            </p>
            <hr>
            <div class="col-md-6">
                <p><b>Name:</b> <?php echo $_SESSION['first']." ".$_SESSION['last']; ?></p>
                <p><b>Username:</b> <?php echo $_SESSION['username']; ?></p>
                <p><b>Birthday:</b> <?php echo $_SESSION['birth']; ?></p>
                <p><b>Registred</b> <?php echo $_SESSION['reg']; ?></p>
                <br>
                <button id="settings" class="btn btn-primary" onclick="loadSettings()" style="display: none;">Setting</button>
                <br>
            </div>
            <div class="col-md-4" id="sett" style="display: none">
                <span>Change username</span>
                <span>Change name</span>
                <span>Change birthday</span>
                <span>Change password</span>
                <br>
                <span id="hide">Hide settings menu</span>
            </div>
        </div>

        <?php

    }
    else {
        while ($record = mysqli_fetch_array($result)) {

            echo "
        
                <div class=\"col-md-5\">
                <img src=\"img/profile/" . $record['picture'] . "\" width=\"300px\" height=\"300px\" alt=\"profil picture\" class=\"img-circle img-responsive\">
                </div>
        
        ";

            echo "<div class=\"col-md-7\">";
            echo " <h1>" . $record['first'] . " " . $record['last'] . "</h1>";
            echo "<hr>";
            echo "  <p><b>Name:</b>" . $record['first'] . " " . $record['last'] . "</p>";
            echo " <p><b>Username:</b>" . $record['username'] . "</p>";
            echo " <p><b>Communitys:</b></p>";
            echo " <p><b>Birthday: </b>" . $record['birth'] . "</p>";
            echo " <p><b>Registred: </b>" . $record['registered'] . "</p>";
            echo "  <br> ";
            echo "</div>";


        }
    }
}
else
{
    if($_SESSION['my']!=true) {
        echo "<div class=\"col-sm-3\"></div>";
        echo "
        
                <div class=\"col-md-2\">
                <img style='border: 2px; border-color: red;' src=\"img/profile/defaultError.jpg\" width=\"150px\" height=\"150px\" alt=\"profil picture\" class=\"img-circle img-responsive\">
                </div>
        
        ";

        echo "<div class=\"col-sm-4\">";
        echo "<br><br>";
        echo " <h3 style='color: red;'>[ ! ] User not found !</h3>";
        echo "</div>";
    }
}



