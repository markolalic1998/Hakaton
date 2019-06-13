<?php  session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bridge</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilLOG.css">
	<link rel="stylesheet" type="text/css" href="css/mainLOG.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>

 <!-- ovde dodati php za proveru session da li je logovan cim udje -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
                <form class="login100-form validate-form" method="post" action="userLogin.php">
					<span class="login100-form-title p-b-43">
                        <h1>Drina</h1><span id="hideYourComm"><i id="hideYourComm2" class="fas fa-sort-down" style="font-size: 20px; cursor: default;"></i></span>
					</span>
                    <div class="login100-form-title p-b-43 animated fadeIn" style="display: none;" id="showMore">
                        <div class="col-sm-12" style="text-align: center">
                            <p style="color: white; text-align: center; font-family: 'Ubuntu', sans-serif;">We are a forum,therefore if you want to have access you have to log in.</p>
                            <p style="color: white; text-align: center; font-family: 'Ubuntu', sans-serif;">If you are visiting the forum for the first time you have to register first.You can do that by following the link below</p>
                            <p style="color: white; text-align: center; font-family: 'Ubuntu', sans-serif;">You can do that by following the link below</p>
                        </div>
                    </div>
                    <p id="login-mess"></p>
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" id="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Sign in
						</button>
					</div>
					<div class="text-center w-full p-t-23">
						<a href="registration.php" class="txt1">Create a new account <i class="fas fa-arrow-right"></i></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
 	<script src="vendor/select2/select2.min.js"></script>
 <!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainLOG.js"></script>

 <script type="text/javascript">
/*
     $(function() {

         var welcomeSection = $('.welcome-section'),
             enterButton = welcomeSection.find('.enter-button');

         setTimeout(function() {
             welcomeSection.removeClass('content-hidden');
         }, 500);

         enterButton.on('click', function(e) {
             e.preventDefault();
             welcomeSection.addClass('content-hidden').fadeOut();
         });


     })();
     */

     function login(){
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById('login-mess').innerText = xmlhttp.responseText;
             }
         };

         xmlhttp.open("POST", "userLogin.php", true);
         xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     }

     document.getElementById('hideYourComm').addEventListener('click', function (){
         var x =  document.getElementById('showMore').style.display;
         if(x == "none")
             document.getElementById('showMore').style.display = "block";
         else
             document.getElementById('showMore').style.display = "none";
     })

 </script>

</body>
</html>