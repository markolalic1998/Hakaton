<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Communitys</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">


        <!-- Font Awesome
        ============================================ -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="stylesheet" href="css/animate.css">

        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header-area start -->
        <header id="header" class="header-area">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="header-top-right fix">
                                <div class="header-links">
                                    <ul>
                                        <?php
                                        session_start();

                                        $logged = false;
                                        if (isset($_SESSION['logged']))
                                            $logged = $_SESSION['logged'];

                                        if ($logged) {
                                            $abs = $_SESSION['abs'];

                                            ?>
                                            <form method="post" action="logout.php">

                                                <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
                                                <li><input type="submit" class="logoutbt" value="Sign out" name="logout"></li>
                                            </form>

                                            <?php

                                        } else {
                                            header("Location: login.php");
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.header-top -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/drinalogo.png" alt="Logo" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="main-menu">
                                <nav>
                                    <ul class="main-nav navbar-right">
                                        <li><a href="index.php">Home</a></li>
                                        <li class="active"><a href="#">Community</a></li>
                                        <li><a href="blog-column-3.php">Topics</a></li>
                                        <li><a href="profile.php">Profile</a></li>
                                        <li><img id="photo" class="img-circle" style="display: block" width="40px" height="40px" src="img/profile/<?php echo $_SESSION['picture'];?>" alt="ProfileSmallPicture"></li>
                                    </ul>
                                </nav>
                            </div><!-- /.main-menu -->
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li class="active"><a href="#">Community</a></li>
                                        <li><a href="blog-column-3.php">Topics</a></li>
                                        <li><a href="profile.php">Profil</a></li>
                                        <li><a href="contact-us.php">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area end -->
            </div><!-- /.header-bottom -->
        </header>
        <!-- header-area end -->


        <!-- heading-area start -->
        <div id="blog-heading" class="heading-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Community</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- heading-area end -->

        <!-- CONTENT AREA --------------------------------------------------------------------------------------------->



            <div class="container-fluid" id="inside"> <!-- START OF CONTENT AREA -->
                <div class="row">
                    <!-- CREATE COMMUNITY SECTION -->
                    <div class="col-lg-12" style="background-color: #1b1e21">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2" style="text-align: center;">
                            <button id="button" type="button" style="padding: 1px 5px; font-family: 'Ubuntu', sans-serif; background-color: transparent; border:2px solid limegreen; border-radius: 10px; color:limegreen; margin: 3px; font-weight: bold;">Create a community</button>
                        </div>
                    </div>
                    <div class="col-lg-12" id="new-community" style="background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.55); text-align: center; display: none; margin-bottom: 30px;"> <!-- On click create community button open formular-->
                        <div class="col-sm-12" id="startNew">
                            <br>
                            <br>
                            <h1><i class="fas fa-users"></i></h1>
                            <h2 style="font-family: 'Ubuntu', sans-serif; font-weight: bold;">Create your new community</h2>
                            <br>
                            <button class="btn btn-primary" type="button" id="next">Next</button>
                        </div>
                        <div class="col-sm-12" id="step1" style="display: none;">
                            <h3>Step 1: Set name</h3>
                            <p id="error1"></p>
                            <input type="text" id="inputStep1" required placeholder="Community name">
                            <div class="col-sm-12">
                                <br>
                                <button class="btn btn-primary" type="button" id="next1">Next</button>
                                <button class="btn btn-danger" type="button" id="next1b">Back</button>

                            </div>
                        </div>
                        <div class="col-sm-12 " id="step2" style="display: none;">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <?php
                                require "database.php";
                                $sql_logoi = "SELECT * FROM c_logos";
                                $res_logoi = mysqli_query($connection, $sql_logoi);

                                while($rec_l = mysqli_fetch_array($res_logoi)){
                                    ?>
                                    <div class="col-sm-2">
                                        <i class="<?php echo $rec_l['value']; ?>" style="display: block; font-size: 35px"></i>
                                        <p style="font-size: 20px;"><?php echo $rec_l['name']; ?></p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <h3>Step 2: Choose logo</h3>
                            <p id="error2"></p>
                            <select id="logo" required>
                                <option value="choose">Choose logo </option>
                                <option value="fab fa-php"><i class="fab fa-php"></i> PHP</option>
                                <option value="fas fa-book"><i class="fas fa-book"></i> BOOK</option>
                                <option value="fas fa-flag"><i class="fas fa-flag"></i> FLAG</option>
                                <option value="fab fa-raspberry-pi"><i class="fab fa-raspberry-pi"> RASPBERRY</i></option>
                                <option value="fas fa-gamepad"><i class="fas fa-gamepad"></i> GAMEPAD</option>
                            </select>

                            <button class="btn btn-danger" type="button" id="next2b">Back</button>
                            <button class="btn btn-primary" type="button" id="next2">Next</button>
                        </div>
                        <div class="col-sm-12" id="step3" style="display: none;">
                            <h3>Step 3: Add despription</h3>
                            <p id="error3"></p>
                            <textarea id="description2" col="20" rows="2"></textarea>
                            <div class="col-sm-12">
                                <br>
                                <button class="btn btn-danger" type="button" id="next3b">Back</button>
                                <button class="btn btn-primary" type="button" id="next3">Next</button>
                            </div>
                        </div>
                        <div class="col-sm-12" id="step4" style="display: none;">
                            <br><br>
                            <h3>Step 4: Create community</h3>
                            <p id="newlogo"></p>
                            <p id="newname" style="font-size: 30px;"></p>
                            <button class="btn btn-success" type="button" id="create">Create</button>
                        </div>

                        <div class="col-sm-12">
                            <br><hr><br>
                        </div>
                        <hr>
                    </div>
                    <!-- END OF CREATE COMMUNITY SECTION -->

                    <!-- INSIDE SINGLE COMMUNITY -->
                    <div class="col-sm-3" style="text-align: center;">
                        <div class="col-sm-12"> <!-- Communiy info title -->
                            <br>
                            <h3 style="margin-top: 10px; font-family: 'Ubuntu', sans-serif;">Community Info</h3>
                        </div>
                        <div class="col-sm-12" id="logo" style="text-align: center"> <!-- Community LOGO -->
                            <br>
                            <i id="comm-logo" class="fa fa-dribbble" style="font-size: 100px;"></i>
                        </div>
                        <div class="col-sm-12" id="c_name" style="text-align: center"> <!-- Community NAME -->
                            <br>
                            <h4 id="comm-name" style="font-family: 'Ubuntu', sans-serif; font-weight: bold;">Community Name</h4>
                            <span id="comm-id" style="display: none"></span>
                        </div>
                        <div class="col-sm-12" style="text-align: left;"> <!-- Community OPTIONS AND SECTIONS/ROOMS -->
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10" style="text-align: left;">

                                <?php


                                ?>

                            <hr><br>
                                <div id="wall-btn"> <h6 style="text-align: justify;"> <span ><i class="fas fa-bars"></i></span><span style="margin-left: 20px; margin-bottom: 10px;"> Wall </span></h6></div>
                                <div id="info-btn"> <h6 style="text-align: justify;"> <span ><i class="fas fa-info"></i></span><span style="margin-left: 20px; margin-bottom: 10px;"> Informations </span></h6></div>
                                <div id="members-btn"> <h6 style="text-align: justify;"> <span ><i class="fas fa-users"></i></span><span style="margin-left: 20px; margin-bottom: 10px;"> Members </span></h6></div>
                                <div id="sett-btn"> <h6 style="text-align: justify;"><i class="fas fa-tools"></i><span style="margin-left: 20px; margin-bottom: 10px;">Settings</span></h6></div>
                                <br>


                                <hr><br>
                                <div id="chatsMain">
                                    <h5 style="text-align: justify; font-family: 'Ubuntu', sans-serif; font-weight: bold;"> @Chat rooms </h5>
                                    <div id="chats" name="chats">



                                    </div>
                                    <!--
                                    <h6 id="cr1">general</h6>
                                    <h6 id="cr2"></h6>
                                    <h6 id="cr3"></h6>
                                    -->
                                    <h6 id="createChat"><i id="plus" class="far fa-plus-square animated fadeIn"></i> Add new chat room</h6>
                                </div>

                                <br>
                                <hr>
                                <div id="leave-comm"> <h6 style="text-align: justify;"><i class="fas fa-sign-out-alt"></i><span style="margin-left: 20px; margin-bottom: 10px;">Leave</span></h6></div>
                            </div>
                        </div>
                    </div>


                    <!-- START OF CHAT ROOMS -->
                    <div class="col-sm-6 animated zoomIn text-center" id="cr" style="display:none;"> <!-- START OF CHAT ROOMS -->
                        <br>
                        <!-- Section for create chat room -->

                        <div class="col-sm-12" style="display:none;">

                        </div>

                        <!-- Section for messeging -->
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <h3 id="cr-title" style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;">Chat room </h3>
                                <span id="hideCrId"></span>
                            </div>
                            <div id="messBox" class="col-sm-12">

                            </div>
                            <div id="addMess">
                                <textarea id="messangerText" col="15" rows="3"></textarea>
                                <button id="publish2" type="button">Publish</button>
                            </div>
                        </div>
                    </div>

                    <!-- START OF SHOW ALL COMMUNITIES -->
                    <div class="col-sm-6 animated zoomIn text-center" id="allComm" style="display:block;"> <!-- START OF SHOW ALL COMMUNITIES -->
                        <br>
                        <div class="col-sm-12">
                            <h3 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;"><i class="fas fa-users"></i>  Your communites </h3>
                            <span id="hideYourComm"><i id="hideYourComm2" class="fas fa-sort-up" style="font-size: 40px; cursor: default;"></i></span>
                            <div class="col-sm-12" id="showAllComm" style="display: block;"></div>
                            <div class="col-sm-12" id="showAllComm2">
                                <br>
                                <div class="col-sm-12">
                                    <h3 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;"><i class="fas fa-search"></i> Find new communities on Drina</h3>
                                    <input type="text" id="findComm" placeholder="Search ...">
                                </div>
                                <div class="col-sm-12" id="searchResults">

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- START OF Community Setting -->
                    <div class="col-sm-6 animated zoomIn text-center" id="settings" style="display:none;"> <!-- START OF Community Setting -->
                        <br>
                        <div class="col-sm-12">
                            <h3 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;">Settings</h3>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <h3>Change community name</h3>
                            <input type="text" id="chCommName">
                            <button class="btn btn-success" id="ch">Change</button>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <h3>Change community logo</h3>
                            <input type="text" id="chCommLogo">
                            <button class="btn btn-success">Change</button>
                        </div>
                    </div>

                    <!-- START OF Community Members -->
                    <div class="col-sm-6 animated zoomIn text-center" id="members" > <!-- START OF Community Informations -->
                        <br>

                        <div class="col-sm-12 animated fadeIn" style="display: none" id="alone">
                            <h3 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold; display: inline">Member</h3><i id="x" style="float: right; font-size: 25px;" class="fas fa-times"></i>
                            <h6 id="member-name"></h6>

                        <div class="col-sm-12" id="alone-info">
                            <div class="col-sm-6">
                                <img id="alone_mem_pic" class="img-circle" src="img/profile/default.jpg" alt="Member Pic" width="180px" height="180px">
                            </div>
                            <div class="col-sm-6">
                                <h3 id="user_mem"></h3>
                                <h3 id="status_mem"></h3>
                                <button type="button" class="btn btn-danger" title="Remove from community">Remove</button>
                                <button id="clickRoleName" type="button" class="btn btn-primary">Role Name</button>
                                <br>
                                <div>
                                    <br>
                                <input type="text" id="addRoleName" style="display:none;">
                                <small id="addRoleNameHint" style="display: none">Change or add role name !</small>
                                    <button type="button" class="btn btn-primary" id="chRoleName" style="display: none;">Add/Change Role</button>
                                </div>
                            </div>
                        </div>
                        </div>


                        <div class="col-sm-12">
                            <br>
                            <h3 style="font-family: 'Ubuntu', sans-serif; margin-bottom: 1px; font-weight: bold;">Members</h3>
                            <h6 id="members-title"></h6>
                        </div>
                        <div class="col-sm-12" id="comm-members-show">

                        </div>
                    </div>

                    <!-- START OF Community Informations -->
                    <div class="col-sm-6 animated zoomIn text-center" id="information"> <!-- START OF Community Informations -->
                        <br>
                        <div class="col-sm-6 animated fadeIn">
                            <h3 style="    font-family: 'Ubuntu', sans-serif; margin-bottom: 1px;">Informations</h3>
                            <h6 id="info-title"></h6>
                            <i id="info-comm-logo" class="fa fa-dribble" style="font-size: 60px;"></i>
                        </div>
                        <div class="col-sm-6 text-center animated fadeIn">
                            <h3 style=" font-family: 'Ubuntu', sans-serif; margin-bottom: 1px;">Administrator</h3>
                            <h6 id="c_abs"></h6>
                            <img class="img-circle img-fluid" id="comm-abs" src="img/profile/default.jpg" alt="Admin Profile Picture" width="80px" height="80px">
                        </div>
                        <br><br>
                        <div class="col-sm-12 text-center animated fadeIn" style="display: none;">
                            <h2 style=" font-family: 'Ubuntu', sans-serif; margin-bottom: 1px;">Description</h2>
                            <p id="desc"></p>
                        </div>
                    </div>

                    <!-- START OF STATUS WALL -->
                    <div class="col-sm-6 animated zoomIn" id="wall" style="display: none;">
                        <br>
                        <div class="col-sm-12" style="background-color: white; border-radius: 5px; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.25); padding: 10px;"> <!-- MAKE STATUS -->
                            <div class="col-sm-12" style="margin-top: 20px;"> <!-- TITLE - MAKE Status -->
                                <h5 style="font-family: 'Ubuntu', sans-serif; font-weight: bold;">Make a post in <span id="status-group" style="font-family: 'Ubuntu', sans-serif; font-weight: normal">community</span></h5>
                                <hr>
                            </div>
                            <div class="col-sm-12"> <!-- MAKE STATUS -->
                                <div class="row">
                                    <div class="col-sm-2"> <!-- USER'S IMAGE -->
                                        <img id="photo" class="img-circle" style="display: block" width="50px" height="50px" src="img/profile/<?php echo $_SESSION['picture'];?>" alt="StatusPicture">
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea type="text" id="addStatus" placeholder="Write something, <?php echo $_SESSION['first']; ?>"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-12" style="margin-bottom: 10px;">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4" style="text-align: center;">
                                        <button id="publish" type="button">Publish</button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>
                        </div> <!-- END OF MAKE STATUS BLOCK -->


                        <div class="col-sm-12"> <!-- DIVIDE MAKE STATUS BLOCK AND STATUS OF OTHER MEMBERS -->
                            <br><hr><br>
                        </div>


                        <div class="row" id="statusBlock">
                       <!-- <div class="col-sm-12" id="statusBlock" style="background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.55); border-radius: 5px;"> <!-- Status block -->
                                <!--
                            <div class="col-sm-12">
                                <div class="col-sm-12" style="padding: 20px;">  <!-- First line in status block
                                    <div class="col-sm-2"> <!-- PROFIL PICTURE
                                        <img id="photo" class="img-circle" style="display: block" width="50px" height="50px" src="img/profile/" alt="StatusPicture">
                                    </div> <!--END OF PROFIL PICTURE
                                    <div class="col-sm-7"> <!-- Free spaces
                                        <span style="font-size: 20px;font-family: 'Ubuntu', sans-serif; margin-top: 35px;"></span>
                                    </div>
                                    <div class="col-sm-3" style="text-align: right;">
                                        <span id="date_posted"><i class="fas fa-ellipsis-v" style="font-size: 20px;"></i></span>
                                    </div>
                                    <div class="col-sm-10" style="text-align: left;">
                                        <span id="date_posted">date section</span>
                                    </div>
                                </div><!-- First line in status block

                                <div class="col-sm-12"> <!-- STATUS CONTENT
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <p style="font-size: 25px;">Status content</p>
                                    </div>

                                </div> <!-- END OF STATUS CONTENT

                                <div class="col-sm-12"> <!-- USER ACTION BAR

                                    <div class="col-sm-6 status-action" style="text-align: center; font-size: 15px; font-weight: bold;"> <!-- Likes
                                        <i class="far fa-thumbs-up" style="font-size: 20px;"></i><span style="font-family: 'Ubuntu', sans-serif; margin-left: 10px;">Likes</span>
                                    </div>
                                    <div class="col-sm-6 status-action" style="text-align: center; font-weight: bold;"> <!-- Comment
                                        <i class="far fa-comments" style="font-size: 19px;"></i><span style="font-family: 'Ubuntu', sans-serif; margin-left: 10px; ">Comment</span>
                                    </div>

                                </div> <!-- END OF USER ACTION BAR

                                <div class="col-sm-12"> <!-- USER  COMMENT AREA
                                    <br>
                                    <p style="font-size: 16px;">Comment something ...</p>
                                    <div class="col-sm-2"> <!-- USER picture
                                        <img id="photo" class="img-circle" style="display: block" width="50px" height="50px" src="img/profile/<?php echo $_SESSION['picture'];?>" alt="StatusPicture">
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea type="text" id="makeStatusComment" placeholder="Write something, <?php echo $_SESSION['first']; ?>"></textarea>
                                    </div>
                                </div> <!-- END of USER COMMENT AREA
                            </div>
                        </div> -->
                        </div>
                    </div> <!-- END OF STATUS WALL -->

                    <div class="col-sm-3"> <!-- SECTION FOR OTHER GROPU PROMOTION AND ADVERTISEMENTS -->
                        <br>



                        <div class="col-sm-12" style="background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.55); border-radius: 5px;"> <!-- SIMILAR GROUPS -->
                            <div class="col-sm-12" style="text-align: center;"> <!-- Title of section -->
                                <br>
                                <i class="fas fa-file-contract" style="font-size: 30px; color: orange;"></i>
                                <h3 style="margin-left: 10px; font-family: 'Ubuntu', sans-serif; display: inline; font-weight: bold;">Other communitys</h3>
                            </div>
                            <div class="col-sm-12" name="cards" style="text-align: center;"> <!-- Group section -->
                            <?php
                            require "database.php";
                            $user = $_SESSION['username'];
                            $sql_other_comm = "SELECT * from comm_members WHERE username = '$user' LIMIT 3";
                            $result_other_comm = mysqli_query($connection, $sql_other_comm) or die(mysqli_error($connection));

                            if(mysqli_num_rows($result_other_comm)>0) {
                                $s = 0;
                                while ($record = mysqli_fetch_array($result_other_comm, MYSQLI_ASSOC)) {
                                    $s = $s++;
                                    $id_comma = $record['id_comm'];
                                    $sql_find_comm = "SELECT * FROM community WHERE id_comm = '$id_comma';";
                                    $result_find_comm = mysqli_query($connection, $sql_find_comm) or die(mysqli_error($connection));

                                    if (mysqli_num_rows($result_find_comm) > 0) {
                                        while ($record2 = mysqli_fetch_array($result_find_comm, MYSQLI_ASSOC))
                                        {
                                            ?>
                                            <div class="col-sm-12" onclick="openComm(<?php echo $record2['id_comm']; ?>)"
                                                 name="cardshover" id="card-hover"
                                                 style="margin-top: 10px; background-color: whitesmoke; padding: 10px; border-radius: 5px;">
                                                <!-- CARD OF ONE COMMUNITY -->
                                                <div class="col-sm-2" style="text-align: center">
                                                    <i class="<?php echo $record2['comm_logo']; ?>"
                                                       style="font-size: 35px;"></i>
                                                </div>
                                                <div class="col-sm-10" name="cardsinfo" style="cursor: default;">
                                                    <span style="font-size: 20px; display: block;"><?php echo $record2['c_name']; ?></span>
                                                    <small>Community Orientation/Tag</small>
                                                    <span id="comm-id"
                                                          style="display:none;"><?php echo $record2['id_comm']; ?></span>
                                                    <span id="check" style="display: none;"><?php echo $s; ?></span>
                                                    <p id="check2" style="display: none;"><?php echo $s; ?></p>

                                                </div>
                                            </div> <!--END OF CARD COMMUNITY -->

                                            <?php
                                        }
                                    }
                                }
                            }
                            else
                            {
                                echo "Join the community";
                            }
                                ?>

                                <div class="col-sm-12" style="margin: 5px;"> <!-- Open Button -->
                                    <p id="click_for_more"><i class="fas fa-arrow-left"></i> Click for all</p>
                                </div>

                            </div>
                        </div> <!-- END OF SIMILAR COMMUNITYS -->

                        <div class="col-sm-12" style="background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.55); border-radius: 5px; margin-top: 20px;"> <!-- ADVERTISEMENTS -->
                            <div class="col-sm-12" style="text-align: center;"> <!-- Title of section -->
                                <br>
                                <i class="fas fa-file-contract" style="font-size: 30px; color: red;"></i>
                                <h3 style="margin-left: 10px; font-family: 'Ubuntu', sans-serif; display: inline; font-weight: bold;">Informations</h3>
                            </div>
                            <div class="col-sm-12" style="text-align: center;"> <!-- Group section -->
                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Community name</span>
                                        <small>Community Orientation/Tag</small>
                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Community name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; margin-bottom: 20px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Community name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12"> <!-- Open Button -->
                                    <p id="click_for_more_ad"><i class="fas fa-arrow-left"></i> Click for more</p>
                                </div>
                            </div>
                        </div> <!-- END OF SECTION FOR COMMUNITYS AND ADVERTISEMENTS -->

                        <div class="col-sm-12" style="margin-bottom: 30px; background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.55); border-radius: 5px; margin-top: 20px;"> <!-- ADVERTISEMENTS -->
                            <div class="col-sm-12" style="text-align: center;"> <!-- Title of section -->
                                <br>
                                <i class="fas fa-file-contract" style="font-size: 30px; color: green;"></i>
                                <h3 style="margin-left: 10px; font-family: 'Ubuntu', sans-serif; display: inline; font-weight: bold;">Advertisements</h3>
                            </div>
                            <div class="col-sm-12" style="text-align: center;"> <!-- Group section -->
                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Community name</span>
                                        <small>Community Orientation/Tag</small>
                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Community name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; margin-bottom: 20px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Community name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12"> <!-- Open Button -->
                                    <p id="click_for_more_ad"><i class="fas fa-arrow-left"></i> Click for more</p>
                                </div>
                        </div>
                    </div> <!-- END OF SECTION FOR COMMUNITYS AND ADVERTISEMENTS -->

                    <br>
                </div>
            </div> <!-- END OF CONTENT AREA -->

        <!-- END OF CONTENT AREA -------------------------------------------------------------------------------------->
		
		<!-- footer-area start -->
		<footer id="footer" class="footer-area text-center">
			<div class="footer-logo">
				<a href="#"><img src="img/logo/drinalogo.png" alt="Footer Logo" /></a>
			</div>
		</footer>
		<!-- footer-area end -->
		
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>		
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>

    <script src="js/community.js">
/*
        window.addEventListener('load', init);
        window.addEventListener('load', showCommunities);
        window.addEventListener('load', ajaxSearch);

        function $(id){
            return document.getElementById(id);
        }

        function init(){
            $('wall-btn').addEventListener('click', wallBtn);
            $('info-btn').addEventListener('click', infoBtn);
            $('sett-btn').addEventListener('click', settBtn);
            $('click_for_more').addEventListener('click', clickForMore);
            $('members-btn').addEventListener('click', membersBtn);
            $('hideYourComm').addEventListener('click', showHideComm);
            $('findComm').addEventListener('keyup', ajaxSearch);
            $('x').addEventListener('click', function(){
                $('alone').style.display = "none";
            });
            $('clickRoleName').addEventListener('click', function(){
                var addRoleName = $('addRoleName').style.display;
                if(addRoleName == "none") {
                    $('addRoleName').style.display = "block";
                    $('addRoleNameHint').style.display = "block";
                }
                else {
                    $('addRoleName').style.display = "none";
                    $('addRoleNameHint').style.display = "none";
                }
            });
            $('createChat').addEventListener('mouseover', function(){
                var prove = $('plus').className;

                if(prove == "far fa-plus-square animated fadeIn")
                    $('plus').className = "fas fa-plus-square animated fadeIn";
                else
                    $('plus').className = "far fa-plus-square animated fadeIn";

            });

            $('publish2').addEventListener('click', addMess);
            $('ch').addEventListener('click', chCommName);

            $('next').addEventListener('click', function(){
                $('step1').style.display = "block";
                $('step2').style.display = "none";
                $('step3').style.display = "none";
                $('step4').style.display = "none";
                $('next').style.display = "none";

            });

            $('next1').addEventListener('click', function(){
                $('step1').style.display = 'none';
                $('step2').style.display = "block";
                $('step3').style.display = "none";
                $('step4').style.display = "none";
                $('next').style.display = "none";
                check1();

            });
            $('next1b').addEventListener('click', function(){
                $('step1').style.display = "none";
                $('step2').style.display = "none";
                $('step3').style.display = "none";
                $('step4').style.display = "none";
                $('next').style.display = "block";

            });
            $('next2').addEventListener('click', function(){
                $('step1').style.display = 'none';
                $('step2').style.display = "none";
                $('step3').style.display = "block";
                $('step4').style.display = "none";
                check2();
            });
            $('next2b').addEventListener('click', function(){
                $('step1').style.display = "block";
                $('step2').style.display = "none";
                $('step3').style.display = "none";
                $('step4').style.display = "none";
                $('next').style.display = "none";

            });

            $('next3').addEventListener('click', function(){
                $('step1').style.display = 'none';
                $('step2').style.display = "none";
                $('step3').style.display = "none";
                $('step4').style.display = "block";
                check3();

                var xio = $('logo').value;
                $('newlogo').innerHTML = '<i class="'+xio+'" style="font-size: 30px;"></i>';
                var yio = $('inputStep1').value;
                $('newname').innerHTML = yio;
            });
            $('create').addEventListener('click', createComm);

        }
        $('next3b').addEventListener('click', function(){
            $('step1').style.display = 'none';
            $('step2').style.display = "block";
            $('step3').style.display = "none";
            $('step4').style.display = "none";
        });


 */

        /*  onClick function  */
/*
        function check1(){
            var tu = $('inputStep1').value;
            if(tu < 5 || tu > 255)
            {
                $('inputStep1').style.borderColor = "red";
                $('step1').style.display = "block";
                $('step2').style.display = "none";
                $('error1').innerHTML = "Please fill the input field";
            }
            else
            {
                $('step1').style.display = "none";
            }

        }

        function check2(){
            var ju = $('logo').value;
            if(ju == "choose"){
                $('logo').style.borderColor = "red";
                $('step2').style.display = "block";
                $('step3').style.display = "none";
                $('error2').innerHTML = "Please choose the logo";
            }
            else
            {
                $('step2').style.display = "none";
            }
        }

        function showHideComm(){
            var showComm = $('showAllComm').style.display;
            var hideYourComm = $('hideYourComm2');
            if(showComm == "block")
            {
                $('showAllComm').style.display = "none";
                hideYourComm.className = "fas fa-sort-down";
            }
            else
            {
                $('showAllComm').style.display = "block";
                hideYourComm.className = "fas fa-sort-up";

            }
        }
        function check3(){
            var ru = $('description2').value;

            if(ru < 5 || ru > 255)
            {
                $('description2').style.borderColor = "red";
                $('step3').style.display = "block";
                $('step4').style.display = "none";
                $('error3').innerHTML = "Please fill the input field";
            }
            else
            {
                $('step3').style.display = "none";
            }
        }
        function wallBtn(){
            $('wall-btn').style.backgroundColor = 'white';
            $('info-btn').style.backgroundColor = '#f7f7f7';
            $('members-btn').style.backgroundColor = '#f7f7f7';
            $('sett-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "block";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function infoBtn(){
            $('info-btn').style.backgroundColor = 'white';
            $('wall-btn').style.backgroundColor = '#f7f7f7';
            $('members-btn').style.backgroundColor = '#f7f7f7';
            $('sett-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "none";
            $('members').style.display = "none";
            $('information').style.display = "block";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function membersBtn(){
            $('members-btn').style.backgroundColor = 'white';
            $('info-btn').style.backgroundColor = '#f7f7f7';
            $('wall-btn').style.backgroundColor = '#f7f7f7';
            $('sett-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "block";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function settBtn(){
            $('sett-btn').style.backgroundColor = 'white';
            $('info-btn').style.backgroundColor = '#f7f7f7';
            $('members-btn').style.backgroundColor = '#f7f7f7';
            $('wall-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "block";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function clickForMore(){
            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "none";
            $('allComm').style.display = "block";
            $('cr').style.display = "none";


            showCommunities();
        }

        function chatRoomOpen(crName){
            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "block";
        }

        function setFocus(){
            document.getElementById('makeStatusComment').focus(this);
        }

        $('publish').addEventListener('click', addStatus);

        document.getElementById('button').addEventListener('click', function (){
            let x = document.getElementById('new-community');
            let y = x.style.display;
            if(y != "block")
                x.style.display = "block";
            else
                x.style.display = "none";
        });

        $('status-group').innerHTML = $('comm-name').value;
 //       document.getElementById('card-hover').addEventListener('click', openComm);

        function openComm(commID){
            var xmlhttp = new XMLHttpRequest();
            $('logo').className = "col-sm-12";
            $('c_name').className = "col-sm-12";
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('alone').style.display = "none";
                     var x = xmlhttp.responseText;
                    console.log(x);
                    var y = xmlhttp.responseText.split(",");
                    $('status-group').innerHTML = y[1];

                    if(xmlhttp.responseText != "Error with data !"){
                        $('logo').className = "col-sm-12 animated pulse";
                        $('c_name').className = "col-sm-12 animated pulse";

                        // About communities
                        $('comm-logo').className=y[0];
                        $('comm-name').innerHTML=y[1];
                        $('comm-id').innerHTML=y[2];
                        $('comm-logo').style.color = y[3];

                        // For information panel
                        $('info-title').innerHTML = y[1];
                        $('c_abs').innerHTML = y[4];
                        $('comm-abs').src= "img/profile/"+y[5];
                        $('info-comm-logo').className = y[0];
                        $('info-comm-logo').style.color = y[3];

                        //For members panel
                        $('members-title').innerHTML = y[1];
                        $('comm-members-show').innerHTML = y[6];


                        loadStatus();
                        loadCr(commID);
                    }

                }
            };

            xmlhttp.open("POST", "load_comm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("comm_id="+commID);

        }

        function addStatus(){
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                    loadStatus();
                }
            };
            var statusText = $('addStatus').value;
            var id_comm = $('comm-id').innerHTML;

            console.log(statusText+" "+id_comm);

            xmlhttp.open("POST", "add_comm_status", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send('statusText='+statusText+"&id_comm="+id_comm);
            $('addStatus').innerHTML = "";
        }

        function loadStatus(){
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('statusBlock').innerHTML = xmlhttp.responseText;
                }
            };

            var id_comm = $('comm-id').innerHTML;
            xmlhttp.open("POST", "load_comm_status.php",  true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_comm="+id_comm);
        }

        function showCommunities(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('showAllComm').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "show_communities.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
        }

        function commy(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('your').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "show_communities.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
        }

        function ajaxSearch(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('searchResults').innerHTML = xmlhttp.responseText;
                }
            };
            var getValue = $('findComm').value;

            xmlhttp.open("POST", "ajaxSearchComm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("value="+getValue+"&code="+1);
        }

        function ajaxShowJoinBtn(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

                }
            };

            xmlhttp.open("POST", "ajaxSearchComm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_comm="+id_comm+"&code2="+1);
        }

        function ajaxJoinComm(id_comm){

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);

                    if(xmlhttp.responseText == "You are now member of your new community !")
                        showCommunities();
                }
            };

            xmlhttp.open("POST", "ajaxSearchComm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_comm="+id_comm+"&code="+2);
        }

        function ajaxMemberAlone(id_member)
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

                    var u = xmlhttp.responseText;
                    var j = [];
                    j = u.split(';');

                    $('alone_mem_pic').src="img/profile/"+j[2];
                    $('user_mem').innerHTML = j[0];
                    $('status_mem').innerHTML = j[1];
                    $('member-name').innerHTML = j[3];
                    $('alone').style.display = "block";
                }
            };

            xmlhttp.open("POST", "showMemberAlone.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_member="+id_member);
        }

        function loadCr(commID){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    $('chats').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "load_chatrooms.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("comm_id="+commID);
        }

        function openCr(crID){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    console.log(xmlhttp.responseText);

                    chatRoomOpen();
                    $('messBox').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "openChatRoom.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("cr-id="+crID);
        }

        function addMess(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                }
            };
            var com = $('comm-id').value;
            var text_mess = $('messangerText').value;
            var crID = $('cr1').value;


            xmlhttp.open("POST", "load_chatrooms.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("crID="+crID+"&code="+2+"&comm-id="+com+"&text="+text_mess);
        }

        function createComm(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                    $('step1').style.display = "none";
                    $('step2').style.display = "none";
                    $('step3').style.display = "none";
                    $('step4').style.display = "none";
                    $('next').style.display = "none";
                    $('new-community').style.display = "none";

                    $('inputStep1').innerHTML = "";
                }
            };
            var input1 = $('inputStep1').value;
            var c_logo = $('logo').value;
            var opis = $('description2').value;


            xmlhttp.open("POST", "create_community.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("input1="+input1+"&c_logo="+c_logo+"&opis="+opis);
        }
*/
    </script>


    </body>
</html>
