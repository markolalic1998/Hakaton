<?php include "database.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Topic</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN jQuery
    ============================================ -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Font Awsome
    ============================================ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Community</a></li>
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
								<li><a href="#">Community</a></li>
								<li><a href="blog-column-3.php">Topics</a></li>
								<li><a href="#">Profil</a></li>
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
		<?php

        $post=0;
        if(isset($_GET['post'])) {
            $post = $_GET['post'];
            $_SESSION['id_of_topic'] = $post;
        }

        $sql = "SELECT * FROM topics WHERE id_topics = '$post';";

        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result) > 0) {
            while ($record = mysqli_fetch_array($result)) {


                $_SESSION['title'] = $record['title'];
                $_SESSION['creator'] = $record['creator'];
                $_SESSION['cover'] = $record['cover'];
                $_SESSION['full_content'] = $record['full_content'];
                $_SESSION['tag'] = $record['tag'];

            }
        }

        ?>
		<!-- single-blog-area start -->
		<div id="single-blog" class="single-blog-area">
			<div class="single-blog-heading">
				<div class="single-blog-img" style="background-image: url('img/blog/<?php echo $_SESSION['cover']; ?>');"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="single-blog-details">
							<h1 class="post-title"><?php echo $_SESSION['title']; ?></h1>
							<p class="post-date">Posted by <?php echo $_SESSION['creator']; ?></p>
                            <?php if($_SESSION['abs']) {?>
                                <div class="col-sm-12" style="text-align: center;">
                                    <form action="delete_topic.php" method="post">
                                            <input type="hidden" value="<?php echo $post; ?>" name="del_topic_id">
                                            <button type="submit" class="btn submit-btn" id="del_topic">DELETE TOPIC</button>
                                    </form>
                                </div>
                            <?php } ?>
                            <div class="post-long-desc">
								<p>
                                    <?php echo $_SESSION['full_content']; ?>
                                </p>
							</div>
								<div class="post-tags pull-right">
									<p>
										<span class="lbl">Tag&nbsp;&nbsp;-</span>
										<span>
											<?php echo $_SESSION['tag']; ?>
										</span>
									</p>
								</div>
							</div>
                        <br><br>
							<div class="comments-area">
                                <h6 style="margin-bottom: 20px;">
                                    <span id="showLikes" style="font-size: 30px;"></span>
                                    <?php
                                    $username = $_SESSION['username'];
                                    $sql_like_button = "SELECT id_like as id_like FROM likes WHERE id_topics = '$post' AND username = '$username';";
                                    $result_like_button = mysqli_query($connection, $sql_like_button) or die(mysqli_error($connection));
                                    if(mysqli_num_rows($result_like_button)>0) {
                                        ?>
                                        <i class="fas fa-thumbs-up" id="like" style="font-size: 30px;"></i>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <i class="far fa-thumbs-up" id="like" style="font-size: 30px;"></i>
                                    <?php
                                    }
                                    ?>
                                    <span style="font-size: 30px;">Like</span>
                                    <span id="like_mess" style="display: none;"></span>
                                </h6>
								<h6 class="title">
                                    <?php

                                    $sql_num_comm = "SELECT count(id_comment) as num_rows from topic_comments WHERE id_topics = '$post';";
                                    $result_num_comm = mysqli_query($connection, $sql_num_comm) or die(mysqli_error($connection));
                                    $values = mysqli_fetch_array($result_num_comm);
                                    $num = $values['num_rows'];
                                    echo $num." comments";
                                    ?>
                                </h6>
                                <ul class="comments-list">
                                    <li class="single-comment" id="response_comment"></li>
								</ul>
							</div><!-- /.comments-area -->
							<div class="comment-form-area">
								<p>leave a comment</p>
                                    <input type="hidden" value="<?php echo $post; ?>" name="id_topic" id="id_topic">
                                    <input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="user" id="user">
									<textarea placeholder="message" name="message" id="message"></textarea>
									<button type="submit" id="submit" class="submit-btn" name="submit">submit</button>
                                    <br>
                                    <span id="comment_message"></span>
                                    <br>
							</div><!-- /.comment-form-area -->
						</div><!-- /.single-blog-details -->
					</div>
				</div>
			</div>
		</div>
		<!-- single-blog-area end -->

		
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

<script type="text/javascript">
    setInterval(loadData2, 1000);
    setInterval(loadLikes, 1000);

    var y = $('like_mess').value;
    if(y == "Unliked")
        $('like').className = "far fa-thumbs-up";
    else
        $('like').className = "fas fa-thumbs-up";

    var $ = function (id) {
        return document.getElementById(id);
    };

    window.addEventListener('load', init);

    function init() {
        $("submit").addEventListener('click', loadData);
        $("like").addEventListener('click', addLike);
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
                $("comment_message").innerHTML = xmlhttp.responseText;
            }
        };
        var mess = $('message').value;
        var id_topic = $('id_topic').value;
        var user = $('user').value;

        xmlhttp.open("POST", "add_comment.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id_topic=" + id_topic + "&user=" + user +"&message="+mess);
        $('message').value = "";
    }

    function loadData2(){
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
                $("response_comment").innerHTML = xmlhttp.responseText;
            }
        };
        var id_topic = $('id_topic').value;

        xmlhttp.open("POST", "topic_comment.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id_topic=" + id_topic);
    }

    function addLike(){
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
                $("like_mess").innerHTML = xmlhttp.responseText;

                if($("like_mess").value == true)
                    $('like').className = "far fa-thumbs-up";
                else
                    $('like').className = "fas fa-thumbs-up";


            }
        };
        var id_topic = $('id_topic').value;

        xmlhttp.open("POST", "add_like.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id_topic=" + id_topic);
    }

    function loadLikes(){
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
                $("showLikes").innerHTML = xmlhttp.responseText;
            }
        };
        var id_topic = $('id_topic').value;

        xmlhttp.open("POST", "show_likes.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("show_like_topic_id=" + id_topic);
    }

    function openReplay(){
        $('reply').style.display="block";
    }
</script>

    </body>
</html>
