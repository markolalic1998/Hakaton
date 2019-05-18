<?php include "database.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">


    <!-- font awesome
    ============================================ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

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
<body class="home-2">
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
                                <li><a href="#">Community</a></li>
                                <li><a href="blog-column-3.php">Topics</a></li>
                                <li class="active"><a href="#">Profile</a></li>
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
                                <li><a href="#">Community</a></li>
                                <li><a href="blog-column-3.php">Topics</a></li>
                                <li class="active"><a href="#">Profile</a></li>
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

<!-- search-area start -->
<div class="search-area">
    <div class="container">
        <div class="row">

                <div class="search-form">
                    <span class="search-close"></span>
                    <form action="#" method="post">
                        <input type="text" placeholder="Search here..."/>
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div> <div class="col-md-12">
    </div>
</div>
<!-- search-area end -->

<!-- heading-area start -->
<div id="blog-heading" class="heading-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Profile</h2>
            </div>
        </div>
    </div>
</div>
<!-- heading-area end -->
<div class="col-lg-12" style="background-color: #1b1e21">
    <div class="col-lg-7">
        <span id="user"></span>
    </div>
    <div class="col-lg-3" id="form" style="margin-top: 3px;">
        <div class="input-group mb-3">
            <input type="text" id="username" class="form-control form-group mb-3" placeholder="Username" style="display: inline; height: 30px;">
            <span class="input-group-btn">
                <button type="button" class="btn btn-success" id="id" style="height: 30px;"><i class="fas fa-search"></i></button>
            </span>
        </div>
    </div>
    <div class="col-sm-2" style="margin-top: 2px;">
        <i class="far fa-user-circle" id="my" style="font-size: 30px; margin-left: 10px;"></i>
        <i class="fas fa-inbox" style="font-size: 25px; margin-left: 10px;"></i>
        <?php

        $username_notf = $_SESSION['username'];
        $sql_user_notf = "SELECT id_user as id FROM users WHERE username='$username_notf';";
        $result_user_notf = mysqli_query($connection, $sql_user_notf) or die(mysqli_error($connection));
        $values = mysqli_fetch_array($result_user_notf);
        $num_notf = $values['id'];


        $sql_notf = "SELECT count(id_notf) as notf FROM notf WHERE id_user='$num_notf'";
        $result_notf = mysqli_query($connection, $sql_notf) or die(mysqli_error($connection));

        if(mysqli_num_rows($result_notf)>0)
        {
            $values_notf = mysqli_fetch_array($result_notf);
            $num_of_notf = $values_notf['notf'];
            if($num_of_notf > 0)
            {
        ?>

        <span class="dot"
              style="background-color: red; margin-bottom: 3px; text-align: center; height:23px; width: 23px; border-radius: 50%; display: inline-block; font-size: 18px; font-weight: bold; color:white; "><?php echo $num_of_notf; ?></span>

        <?php
            }
            else
                {
                    ?>
                    <span></span>
                    <?php
                }
        }
        ?>

    </div>
</div>


<!--

$_SESSION['search_username'] = $_SESSION['username'];
$_SESSION['search_first'] = $_SESSION['first'];
$_SESSION['search_last'] = $_SESSION['last'];
$_SESSION['search_picture'] = $_SESSION['picture'];
$_SESSION['search_birth'] = $_SESSION['birth'];
$_SESSION['search_reg'] = $_SESSION['reg'];
$_SESSION['search_abs'] = $_SESSION['abs'];
$abs1 = $_SESSION['search_abs'];


-->

<div class="blog-content-area container">
    <div class="row">
        <div class="col-md-2"> <!-- only for more space -->
        </div>
        <div class="col-md-8">
            <br>
            <div class="row" id="info">
                <div class="col-md-5">
                    <img src="img/profile/<?php echo $_SESSION['picture']; ?>" width="300px" height="300px" alt="profil picture" class="img-circle img-responsive">
                </div>
                <div class="col-md-7" >
                    <h1><?php echo $_SESSION['first']." ".$_SESSION['last']; ?></h1>
                    <p class="title">
                        <?php
                        if($abs){
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
                        <p><b>Communitys:</b> <?php ?></p>
                        <p><b>Birthday:</b> <?php echo $_SESSION['birth']; ?></p>
                        <p><b>Registred</b> <?php echo $_SESSION['reg']; ?></p>
                        <br>
                        <button id="settings" class="btn btn-primary">Setting</button>
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
            </div>
            <hr><br>


        </div>
    </div>
</div>


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

<script>

    var $ = function (id) {
        return document.getElementById(id);
    };

    window.addEventListener('load', init);

    function init() {
        $("id").addEventListener('click', loadData);
        $('my').addEventListener('click', loadMyProfile);
        $('settings').addEventListener('click', loadSettings);
    }

    function loadData() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $("info").innerHTML = xmlhttp.responseText;
            }
        };
        var name = $('username').value;

        xmlhttp.open("POST", "ajaxProfile.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // *
        xmlhttp.send("name=" + name);
        $('username').value = "";
    }


    function loadMyProfile() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $("info").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("POST", "ajaxProfile.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // *
        xmlhttp.send("my=" + true);
    }

    function loadSettings(){
        let x = $('sett');
        let y = x.style.display;
        if(y != "block")
            x.style.display = "block";
        else
            x.style.display = "none";
    }

</script>




</body>
</html>