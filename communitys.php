<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cummunitys</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">


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

        <!-- search-area start -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <span class="search-close"></span>
                            <form action="#" method="post">
                                <input type="text" placeholder="Search here..."/>
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area end -->

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

      <p>communitys</p>
		
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
    </body>
</html>
