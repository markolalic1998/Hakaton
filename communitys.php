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
                        <h2>Communitys</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- heading-area end -->

        <!-- CONTENT AREA --------------------------------------------------------------------------------------------->
            <div class="container-fluid"> <!-- START OF CONTENT AREA -->
                <div class="row">
                    <!-- CREATE COMMUNITY SECTION -->
                    <div class="col-lg-12" style="background-color: #1b1e21">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2" style="text-align: center;">
                            <button id="button" type="button" style="padding: 1px 5px; font-family: 'Ubuntu', sans-serif; background-color: transparent; border:2px solid limegreen; border-radius: 10px; color:limegreen; margin: 3px; font-weight: bold;">Create a community</button>
                        </div>
                    </div>
                    <div class="col-lg-12" id="new-community" style="text-align: center; display: none;"> <!-- On click create community button open formular-->
                        <div class="error-image wow bounceInUp">
                            <h1><i class="fa fa-globe fa-spin"></i>NEW COMMUNITY</h1>
                        </div>
                    </div>
                    <!-- END OF CREATE COMMUNITY SECTION -->

                    <!-- INSIDE SINGLE COMMUNITY -->
                    <div class="col-sm-3" style="text-align: center;">
                        <div class="col-sm-12"> <!-- Communiy info title -->
                            <br>
                            <h3 style="margin-top: 10px; font-family: 'Ubuntu', sans-serif;">Community Info</h3>
                        </div>
                        <div class="col-sm-12" style="text-align: center"> <!-- Community LOGO -->
                            <br>
                            <i class="fa fa-dribbble" style="font-size: 100px;"></i>
                        </div>
                        <div class="col-sm-12" style="text-align: center"> <!-- Community NAME -->
                            <br>
                            <h4 style="font-family: 'Ubuntu', sans-serif; font-weight: bold;">Community Name</h4>
                        </div>
                        <div class="col-sm-12" style="text-align: left;"> <!-- Community OPTIONS AND SECTIONS/ROOMS -->
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">

                            <hr><br>
                            <h6> - Wall</h6>
                            <h6> - Informations</h6>
                            <h6> - Members</h6>
                            <h6> - Settings</h6>
                            <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        -----------------------------------------------------------------------------------------------------------------------
                    </div>
                    <div class="col-sm-3"> <!-- SECTION FOR OTHER GROPU PROMOTION AND ADVERTISEMENTS -->
                        <br>
                        <div class="col-sm-12" style="background-color: white; white; box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.55); border-radius: 5px;"> <!-- SIMILAR GROUPS -->
                            <div class="col-sm-12" style="text-align: center;"> <!-- Title of section -->
                                <br>
                                <i class="fas fa-file-contract" style="font-size: 30px; color: orange;"></i>
                                <h3 style="margin-left: 10px; font-family: 'Ubuntu', sans-serif; display: inline; font-weight: bold;">Similar communitys</h3>
                            </div>
                            <div class="col-sm-12" style="text-align: center;"> <!-- Group section -->
                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Comunity name</span>
                                        <small>Community Orientation/Tag</small>
                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Comunity name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; margin-bottom: 20px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Comunity name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12"> <!-- Open Button -->
                                    <p><i class="fas fa-arrow-left"></i> Click for more</p>
                                </div>

                            </div>
                        </div> <!-- END OF SIMILAR COMMUNITYS -->


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
                                        <span style="font-size: 20px; display: block;">Comunity name</span>
                                        <small>Community Orientation/Tag</small>
                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Comunity name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12" id="card-hover" style="margin-top: 10px; margin-bottom: 20px; background-color: whitesmoke; padding: 10px;"> <!-- CARD OF ONE COMMUNITY -->
                                    <div class="col-sm-2" style="text-align: center">
                                        <i class="fab fa-pied-piper-pp" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <span style="font-size: 20px; display: block;">Comunity name</span>
                                        <small>Community Orientation/Tag</small>

                                    </div>
                                </div> <!--END OF CARD COMMUNITY -->

                                <div class="col-sm-12"> <!-- Open Button -->
                                    <p><i class="fas fa-arrow-left"></i> Click for more</p>
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

    <script>

        document.getElementById('button').addEventListener('click', function (){
            let x = document.getElementById('new-community');
            let y = x.style.display;
            if(y != "block")
                x.style.display = "block";
            else
                x.style.display = "none";
        });

    </script>

    </body>
</html>
