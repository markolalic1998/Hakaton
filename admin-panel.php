<?php include "database.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administrator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">

    <!-- FontAwesome
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
    <link rel="stylesheet" href="css/adminstyle.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- ajax
        ============================================ -->
    <script src=" http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js "></script>
</head>
<body>
<script>

function addTopics(){
    let x = document.getElementById('addtopic');
    let y = document.getElementById('absacc');
    let z = document.getElementById('users');

    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}

function users(){
    let x = document.getElementById('addtopic');
    let y = document.getElementById('absacc');
    let z = document.getElementById('users');

    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";
}

function abs(){
    let x = document.getElementById('addtopic');
    let y = document.getElementById('absacc');
    let z = document.getElementById('users');

    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";

}

</script>

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
                                <li><a href="#">Communitys</a></li>
                                <li><a href="#" onclick="addTopics()">Add Topics</a></li>
                                <li><a href="#" onclick="abs()">ABS</a></li>
                                <li><a href="#" onclick="users()">Users</a></li>
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
                                <li><a href="#">Communitys</a
                                </li>
                                <li><a href="#" onclick="addTopics()">Add Topics</a></li>
                                <li><a href="#" onclick="abs()">ABS</a></li>
                                <li><a href="#" onclick="users()">Users</a></li>
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
                <h2>ABS PANEL</h2>
            </div>
        </div>
    </div>
</div>
<!-- heading-area end -->


<!-- Ubacuje container divove koji ce biti display none i kad se na nesto pritisne onda ce se prebaciti u block - dole -->


<div id="addtopic" class="blog-content-area container" style="display: none">
    <h1 class="text-center">ADD TOPIC</h1><br>
    <div class="col-md-4"></div>
    <div class="row">
        <div class="col-md-4">
            <span id="response"></span>
            <hr><br>
    <form method="post" action="admin-panel.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="tag" class="col-sm-3 col-form-label">Tag</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="tag" id="tag" placeholder="Travel, Food, Sport etc." required>
            </div>
        </div>

        <div class="form-group row">
            <label for="desc" class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="desc" name="desc" placeholder="Description" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">Content</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="cover" class="col-sm-3 col-form-label">Cover</label>
            <div class="col-sm-9">
                <input type="file" class="form-control-file" name="cover" id="cover" required>
                <small>Images of higher resolution and quality</small>
            </div>
        </div>
        <br>
        <button name="send" class="btn btn-secondary btn-md btn-block" type="submit">Add Topics</button>
    </form>
            <hr><br>
    </div>
</div>
</div>


<div id="users" class="blog-content-area container" style="display: none">
    <h1 class="text-center">ABS USERS MANAGER</h1><br>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <hr><br>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Username</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * from users";
                $result2 = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                if(mysqli_num_rows($result2) > 0)
                {
                    while($record = mysqli_fetch_array($result2))
                    {
                        echo "<tr>";
                        echo "<td>".$record['id_user']."</td>";
                        echo "<td>".$record['first']."</td>";
                        echo "<td>".$record['last']."</td>";
                        echo "<td>@".$record['username']."</td>";
                        echo "<td><i class=\"fas fa-crown\" id='crown' title='Give ABS'></i>
                                  <i class=\"fas fa-exclamation-circle\" id='warn' title='Warn'></i>
                                  <i class=\"fas fa-minus-circle\" id='ban' title='Ban'></i>
                              </td>";
                        echo "<tr>";

                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<div id="absacc" class="blog-content-area container">
    <h1 class="text-center">ABS ACCOUNT</h1><br>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <hr><br>
            <div class="row">
                <div class="col-md-5">
                <img src="img/profile/<?php echo $_SESSION['picture']; ?>" width="300px" height="300px" alt="profil picture" class="img-circle img-responsive">
                </div>
                <div class="col-md-7">
                <h1><?php echo $_SESSION['first']." ".$_SESSION['last']; ?></h1>
                <p class="title">
                    ABS - Administrator Bridge System @<?php echo $_SESSION['username']; ?>
                </p>
                    <hr>
                    <p><b>Name:</b> <?php echo $_SESSION['first']." ".$_SESSION['last']; ?></p>
                    <p><b>Username:</b> <?php echo $_SESSION['username']; ?></p>
                    <p><b>Communitys:</b> <?php ?></p>
                    <p><b>Birthday:</b> <?php echo $_SESSION['birth']; ?></p>
                    <p><b>Registred</b> <?php echo $_SESSION['reg']; ?></p>
                    <p><b>Topics added: </b>
                        <?php

                        $username = $_SESSION['username'];
                        $sql_num_topics = "SELECT count(id_topics) as num_rows from topics WHERE creator='$username';";
                        $result_num_topics = mysqli_query($connection, $sql_num_topics) or die(mysqli_error($connection));
                        $values = mysqli_fetch_array($result_num_topics);
                        $num = $values['num_rows'];
                        echo $num;

                        ?></p>
                    <br>
                </div>
            </div>
            <hr><br>

            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Username</th>
                        <th scope="col">Status</th>
                        <th scope="col">Topics added</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql3 = "SELECT * from users WHERE abs = 1";
                    $result3 = mysqli_query($connection, $sql3) or die(mysqli_error($connection));

                    if(mysqli_num_rows($result3) > 0)
                    {
                        while($record2 = mysqli_fetch_array($result3))
                        {
                            echo "<tr>";
                            echo "<td>".$record2['id_user']."</td>";
                            echo "<td>".$record2['first']."</td>";
                            echo "<td>".$record2['last']."</td>";
                            echo "<td>@".$record2['username']."</td>";
                            echo "<td><i class=\"fas fa-crown\"></i> ABS</td>";

                            $username2 = $record2['username'] ;
                            $sql_num_topics2 = "SELECT count(id_topics) as num_rows from topics WHERE creator='$username2';";
                            $result_num_topics2 = mysqli_query($connection, $sql_num_topics2) or die(mysqli_error($connection));
                            $values2 = mysqli_fetch_array($result_num_topics2);
                            $num2 = $values2['num_rows'];
                            echo "<td>".$num2."</td>";
                            echo "<tr>";

                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- PHP za forme koje bira admin - dole -->
<!-- Add topics -------------------------------- -->
<?php

$title = "";
$tag = "";
$desc = "";
$content = "";

 // nastaviti ajax za dodavanje topica
if (isset($_POST['send'])) {

    if (isset($_POST['title']))
        $title = mysqli_real_escape_string($connection, $_POST['title']);

    if (isset($_POST['tag']))
        $tag = mysqli_real_escape_string($connection, $_POST['tag']);

    if (isset($_POST['desc']))
        $desc = mysqli_real_escape_string($connection, $_POST['desc']);

    if (isset($_POST['content']))
        $content = mysqli_real_escape_string($connection, $_POST['content']);

    $target = "img/blog/" . basename($_FILES['cover']['name']); //['name']
    $image = mysqli_real_escape_string($connection, $_FILES['cover']['name']);

    $creator = $_SESSION['username'];

    $created = date("Y-m-d");

    $sql = "INSERT INTO topics (title, content, creator, cover, tag, full_content, created) values ('$title', '$desc', '$creator', '$image', '$tag','$content', '$created')";

    if (move_uploaded_file($_FILES['cover']['tmp_name'], $target) AND $tag != "" AND $title != "" AND $desc != "" AND $content != "" AND $image != "") {
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    } else {
        $msg = "ajeee";
    }

}
    /*
    if(isset($_POST['cover']))
        $cover = $_POST['cover'];
    */


?>
<!-- ------------------------------------------- -->






<!-- PHP za forme koje bira admin - gore -->

<!-- Ubacuje container divove koji ce biti display none i kad se na nesto pritisne onda ce se prebaciti u block - gore -->




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

























