<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bridge - Homepage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">

        <!-- Font Awsome http
        ============================================ -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
                                            <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
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
									<li class="active"><a href="#">Home</a></li>
									<li><a href="communitys.php">Community</a></li>
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
										<li><a href="#">Home</a></li>
										<li><a href="communitys.php">Community</a></li>
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
						<h2>Morava</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- heading-area end -->
		
		<!-- main-content-area start -->
		<div id="main-content" class="main-content-area">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="popular-posts-area">
							<h2 class="section-title" style="font-weight: bold">popular posts</h2>
							<div class="row">
                                <?php
                                require "database.php";
                                $sql_popular = "SELECT * , count(tc.id_topics) as likke FROM topics t, likes tc WHERE t.id_topics = tc.id_topics GROUP BY 1,2 ORDER BY count(tc.id_topics) DESC LIMIT 4;";
                                $result_popular = mysqli_query($connection, $sql_popular) or die(mysqli_error($connection));
                                if(mysqli_num_rows($result_popular)>0) {
                                    while ($record3 = mysqli_fetch_array($result_popular, MYSQLI_ASSOC)) {

                                        ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="single-popular-post">
                                                <div class="post-img">
                                                    <a href="#"><img src="img/blog/<?php echo $record3['cover']; ?>" alt="Popular Post"/></a>
                                                    <a href="#" class="post-tag"><?php echo $record3['tag']; ?></a>
                                                    <div class="post-info">
                                                        <p>
                                                            <span class="post-date"><a href="#"><?php echo $record3['created']; ?></a></span>
                                                            <span class="post-date"><a href="#">3 comments</a></span>
                                                            <span class="post-date"><a href="#"><?php echo $record3['creator']; ?></a></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <h6 class="post-title"><a href="#"><?php echo $record3['title']; ?></a></h6>
                                                    <p class="post-short-desc"><?php echo $record3['content']; ?></p>
                                                    <a href="single-blog.php?post=<?php echo $record3['id_topics'];?>" class="continue-link">Continue Reading...</a>
                                                </div>
                                            </div><!-- /.single-popular-post -->
                                        </div>
                                        <?php


                                    }
                                }
                                ?>
                            </div>
                        </div><!-- /.popular-posts-area -->

                        <!-- latest-reviews-area start -->
                        <div id="latest-reviews" class="latest-reviews-area" style="display: none;">
                            <h2 class="section-title">latest topic</h2>
                            <div class="row">

                                <?php
                                $sql_last_added = "SELECT * FROM topics ORDER BY created DESC LIMIT 1";
                                $result_last_add = mysqli_query($connection, $sql_last_added);

                                if(mysqli_num_rows($result_last_add)>0) {
                                    while ($record4 = mysqli_fetch_array($result_last_add, MYSQLI_ASSOC)) {
                                        ?>
                                        <div class="col-md-12">
                                            <div class="single-review">
                                                <div class="post-img">
                                                    <a href="#"><img src="img/blog/<?php echo $record4['cover']; ?>" alt="Review Image"/></a>
                                                    <a href="#" class="post-tag"><?php echo $record4['tag']; ?></a>
                                                    <div class="post-info">
                                                        <p>
                                                            <span class="post-date"><a href="#"><?php echo $record4['created']; ?></a></span>
                                                            <span class="post-comments"><a href="#">3 comments</a></span>
                                                            <span class="post-comments"><a href="#"><?php echo $record4['creator']; ?></a></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <h6 class="post-title"><a href="#"><?php echo $record4['title']; ?></a></h6>
                                                    <p class="post-short-desc"><?php echo $record4['content']; ?></p>
                                                    <a href="single-blog.php?post=<?php echo $record4['id_topics']; ?>" class="continue-link">Continue Reading...</a>
                                                </div>
                                            </div><!-- /.single-review -->
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!-- latest-reviews-area end -->

                        <!-- featured-posts-area start  STAVIO SAM DA SE NE VIDE -->
                        <div id="featured-post" class="featured-posts-area" style="display: none;">
                            <h2 class="section-title">featured posts</h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="single-featured-post">
                                        <div class="post-img">
                                            <a href="#"><img src="img/featured-posts/1.jpg" alt="Featured Post" /></a>
                                            <a href="#" class="post-tag">photography</a>
                                            <div class="post-info">
                                                <p>
                                                    <span class="post-date"><a href="#">July 10, 2015</a></span>
                                                    <span class="post-comments"><a href="#">3 comments</a></span>
                                                    <span class="post-social-links">
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Likes"><i class="fa fa-heart"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title"><a href="#">Tale in the Lover</a></h6>
                                            <p class="post-short-desc">Lorem ipsum dolor sit amet, consegectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco
                                                laboris nisi...</p>
                                            <a href="#" class="continue-link">Continue Reading...</a>
                                        </div>
                                    </div><!-- /.single-featured-post -->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="single-featured-post">
                                        <div class="post-img">
                                            <a href="#"><img src="img/featured-posts/2.jpg" alt="Featured Post" /></a>
                                            <a href="#" class="post-tag">photography</a>
                                            <div class="post-info">
                                                <p>
                                                    <span class="post-date"><a href="#">July 10, 2015</a></span>
                                                    <span class="post-comments"><a href="#">3 comments</a></span>
                                                    <span class="post-social-links">
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Likes"><i class="fa fa-heart"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title"><a href="#">The Cracked Secret</a></h6>
                                            <p class="post-short-desc">Lorem ipsum dolor sit amet, consegectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco
                                                laboris nisi...</p>
                                            <a href="#" class="continue-link">Continue Reading...</a>
                                        </div>
                                    </div><!-- /.single-featured-post -->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="single-featured-post">
                                        <div class="post-img">
                                            <a href="#"><img src="img/featured-posts/3.jpg" alt="Featured Post" /></a>
                                            <a href="#" class="post-tag">photography</a>
                                            <div class="post-info">
                                                <p>
                                                    <span class="post-date"><a href="#">July 10, 2015</a></span>
                                                    <span class="post-comments"><a href="#">3 comments</a></span>
                                                    <span class="post-social-links">
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Likes"><i class="fa fa-heart"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title"><a href="#">Future in the Consort</a></h6>
                                            <p class="post-short-desc">Lorem ipsum dolor sit amet, consegectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco
                                                laboris nisi...</p>
                                            <a href="#" class="continue-link">Continue Reading...</a>
                                        </div>
                                    </div><!-- /.single-featured-post -->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="single-featured-post">
                                        <div class="post-img">
                                            <a href="#"><img src="img/featured-posts/4.jpg" alt="Featured Post" /></a>
                                            <a href="#" class="post-tag">photography</a>
                                            <div class="post-info">
                                                <p>
                                                    <span class="post-date"><a href="#">July 10, 2015</a></span>
                                                    <span class="post-comments"><a href="#">3 comments</a></span>
                                                    <span class="post-social-links">
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Likes"><i class="fa fa-heart"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
													</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title"><a href="#">The Man of the Heat</a></h6>
                                            <p class="post-short-desc">Lorem ipsum dolor sit amet, consegectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco
                                                laboris nisi...</p>
                                            <a href="#" class="continue-link">Continue Reading...</a>
                                        </div>
                                    </div><!-- /.single-featured-post -->
                                </div>
                            </div>
                        </div>
                        <!-- featured-posts-area end -->
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
                        <div class="sidebar-area fix">
                            <div class="single-sidebar-widget">
                                <h6 class="widget-title">
                                    <?php
                                    echo $_SESSION['first'];
                                    echo " ";
                                    echo $_SESSION['last']
                                    ?>
                                </h6>
                                <div class="sidebar-content about-me">
                                    <div class="my-photo">
                                        <img class="img-circle img-thumbnail " src="img/profile/<?php echo $_SESSION['picture']; ?>" alt="My Image" width="110px" height="110px">
                                    </div>
                                    <hr>
                                    <p><b>Name:</b> <?php echo $_SESSION['first']." ".$_SESSION['last']; ?></p>
                                    <p><b>Username:</b> <?php echo $_SESSION['username']; ?></p>
                                    <p><b>Status:</b> <?php if($abs){echo "<a href='admin-panel.php'>ABS</a>";} else{echo "Member";} ?></p>
                                    <p><b>Birthday:</b> <?php echo $_SESSION['birth']; ?></p>
                                    <p><b>Registred</b> <?php echo $_SESSION['reg']; ?></p>
                                    <hr><br>
                                    <form action="logout.php" method="post">
                                        <button class="btn btn-success" name="logout" type="submit">Sign out</button>
                                    </form>
                                </div><!-- /.sidebar-content -->
                            </div><!-- /.single-sidebar-widget -->

                            <div class="single-sidebar-widget" style="display: none;">
                                <h6 class="widget-title">Communitys</h6>
                                <div class="sidebar-content">
                                    <div class="social-links-area">
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                                <p>Facebook</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                                <p>Twitter</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                                <p>Google Plus</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                                <p>Pinterest</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-rss"></i>
                                                <p>RSS</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-dribbble"></i>
                                                <p>Dribbble</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                                <p>Instagram</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                                <p>Bloginlove</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                        <div class="single-icon">
                                            <a href="#">
                                                <i class="fa fa-envelope-o"></i>
                                                <p>Email</p>
                                            </a>
                                        </div><!-- /.single-icon -->
                                    </div><!-- /.social-links-area -->
                                </div><!-- /.sidebar-content -->
                            </div><!-- /.single-sidebar-widget -->
                            <div class="single-sidebar-widget">
                                <h6 class="widget-title">Topics</h6>
                                <h6 class="widget-title">
                                    <i class="far fa-thumbs-up" id="show_likes" title="topics with the most likes" style="color: red; cursor: default; font-size: 25px;"></i>
                                    <span>   -   </span>
                                    <i class="far fa-comments" id="show_comments" title="topics with the most comments" style="cursor: default; font-size: 25px;"></i>
                                </h6>
                                <div class="sidebar-content">
                                    <div class="categories-list">
                                        <div class="row">
                                            <div class="col-lg-12" style="display: none;" id="comments">
                                                <ul>
                                                    <?php
                                                    require "database.php";

                                                    $sql_num_comm = "SELECT t.id_topics as tid, title, count(tc.id_topics) as comm FROM topics t, topic_comments tc WHERE t.id_topics = tc.id_topics GROUP BY 1,2 ORDER BY count(tc.id_topics) DESC LIMIT 10;";

                                                    $result_num_comm = mysqli_query($connection, $sql_num_comm) or die(mysqli_error($connection));
                                                    if(mysqli_num_rows($result_num_comm)>0){
                                                        while($record = mysqli_fetch_array($result_num_comm, MYSQLI_ASSOC))
                                                        {
                                                            $num_comm = $record['comm'];
                                                            ?>
                                                            <li>
                                                                <a href="single-blog.php?post=<?php echo $record['tid']; ?>"><span
                                                                            class="category"><?php echo $record['title'] ?></span><span
                                                                            class="number"><?php echo $num_comm; ?></span></a>
                                                            </li>
                                                            <?php

                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="col-lg-12" id="likes">
                                                <ul><!-- OVO JE ZA LAJKOVE, MRZELO ME JE DA PISEM 2 PUTA SVE, SAMO SAM DODAO 2 ISPRED SVEGA -->
                                                    <?php
                                                    require "database.php";
                                                    $sql_num_like = "SELECT t.id_topics as tid2, title, count(tc.id_topics) as likke FROM topics t, likes tc WHERE t.id_topics = tc.id_topics GROUP BY 1,2 ORDER BY count(tc.id_topics) DESC LIMIT 10;";

                                                    $result_num_like = mysqli_query($connection, $sql_num_like) or die(mysqli_error($connection));
                                                    if(mysqli_num_rows($result_num_like)>0){
                                                        while($record2 = mysqli_fetch_array($result_num_like, MYSQLI_ASSOC))
                                                        {
                                                            $num_like = $record2['likke'];
                                                            ?>
                                                            <li><a href="single-blog.php?post=<?php echo $record2['tid2']; ?>"><span class="category"><?php echo $record2['title'] ?></span><span class="number"><?php echo $num_like; ?></span></a></li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.sidebar-content -->
                            </div><!-- /.single-sidebar-widget -->
                        </div><!-- /.sidebar-area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-area end -->

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
                $("show_likes").addEventListener('click', showLikes);
                $("show_comments").addEventListener('click', showComm);
            }

            function showLikes(){
                $("comments").style.display = "none";
                $("likes").style.display = "block";
                $("show_likes").style.color = "red";
                $("show_comments").style.color = "black";

            }
            function showComm(){
                $("comments").style.display = "block";
                $("likes").style.display = "none";
                $("show_comments").style.color = "red";
                $("show_likes").style.color = "black";

            }
        </script>
    </body>
</html>

