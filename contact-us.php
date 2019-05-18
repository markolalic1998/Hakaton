<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Contact Us</title>
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
<body class="blog-col-1">
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

                                    <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
                                    <li><input type="submit" class="logoutbt" value="Sign out" name="logout"></li>
                                </form>

                                <?php

                            } else {
                                header("Location: login.php");
                            }
                            ?>
						</div>
						<div class="header-search">
							<form action="#" method="post">
								<button type="button" class="search-toggler"><i class="fa fa-search"></i></button>
							</form>
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
								<li class="dropdown"><a href="#">Community</a>
									<div class="mega-menu pages">
											<span class="mega-menu-list">
												<a href="blog-column-3.php">Blog Column 3</a>
												<a href="blog-column-2.html">Blog Column 2</a>
												<a href="blog-fullwidth.html">Blog Fullwidth</a>
											</span>
										<span class="mega-menu-list">
												<a href="single-blog.php">Single Blog 1</a>
												<a href="single-blog-2.html">Single Blog 2</a>
												<a href="single-blog-3.html">Single Blog 3</a>
												<a href="single-blog-4.html">Single Blog 4</a>
											</span>
										<span class="mega-menu-list">
												<a href="404.html">404 Page</a>
												<a href="contact-us.php">Contact Us</a>
											</span>
									</div>
								</li>
								<li><a href="blog-column-3.php">Topics</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li class="active"><a href="#"> Contact Us</a></li>
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
								<li><a href="#">Community</a>
									<ul>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="blog-column-3.php">Blog Column 3</a></li>
												<li><a href="blog-column-2.html">Blog Column 2</a></li>
												<li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
											</ul>
										</li>
										<li><a href="#">single blog</a>
											<ul>
												<li><a href="single-blog.php">Single Blog 1</a></li>
												<li><a href="single-blog-2.html">Single Blog 2</a></li>
												<li><a href="single-blog-3.html">Single Blog 3</a></li>
												<li><a href="single-blog-4.html">Single Blog 4</a></li>
											</ul>
										</li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="contact-us.php">contact us</a></li>
									</ul>
								</li>
								<li><a href="blog-column-3.php">Topics</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li class="active"><a href="#">contact us</a></li>
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
				<h2>Contact us</h2>
			</div>
		</div>
	</div>
</div>
<!-- heading-area end -->

<!-- contact-content-area start -->
<div id="contact-content" class="contact-content-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-img">
					<img src="img/contact/contact.jpg" alt="" />
				</div>
				<p class="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
					do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamses,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
					aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
					deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
					voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
					inventore veritatis et quasi.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-0 col-sm-12">
				<div class="contact-form-area">
					<form action="#" method="post">
						<div class="input-fields fix">
							<div class="single-field">
								<input type="text" placeholder="Name" class="name" />
							</div>
							<div class="single-field">
								<input type="text" placeholder="Email" class="email" />
							</div>
						</div>
						<div class="message-field">
							<textarea placeholder="Message" ></textarea>
						</div>
						<div class="submit-btn clear">
							<button type="submit">send message</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
				<div class="contact-address">
					<p>Adress:  123 Beverly Hill, New York, USA</p>
					<p>Phone:  0623 456 789</p>
					<p>Email:  Companyname@gmail.com</p>
					<p class="post-social-links">
						<span class="lbl">Share on&nbsp;&nbsp;-</span>
						<span>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact-content-area end -->

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
