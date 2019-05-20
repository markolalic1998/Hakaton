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
            <form class="login100-form validate-form" method="post" action="registration2.php">
					<span class="login100-form-title p-b-43">
						<div class="welcome-section1 content-hidden1">
                            <div class="content-wrap1">
						        <ul class="fly-in-text1">
                                    <li>Registration</li>
                                </ul>
                            </div>
                        </div>
                    </span>
                <div class="wrap-input100 rs1 validate-input" data-validate = "First name is required">
                    <input class="input100" type="text" name="first">
                    <span class="label-input100">First name</span>
                </div>


                <div class="wrap-input100 rs2 validate-input" data-validate="Last name is required">
                    <input class="input100" type="text" name="last">
                    <span class="label-input100">Last name</span>
                </div>

                <div class="wrap-input200 rs2 validate-input" data-validate="Email is required">
                    <input class="input100" type="email" name="email">
                    <span class="label-input100">Email</span>
                </div>

                <div class="wrap-input200 rs2 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username" maxlength="20" minlength="8">
                    <span class="label-input100">Username</span>
                </div>

                <div class="wrap-input200 rs2 validate-input" data-validate="Birthdate is required">
                    <input class="input100" type="date" name="birth" max="<?php echo $date=date('Y')-18?>-12-31" min="<?php echo $date2=date('Y')-100?>-12-31">
                </div>

                <div class="wrap-input200 rs2 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" id="pass" name="password" minlength="8">
                    <span class="label-input100">Password</span>
                    <div id="meter"></div>
                </div>

                <div class="wrap-input200 rs2 validate-input" data-validate="Confirm password is required">
                    <input class="input100" type="password" name="confirm" minlength="8">
                    <span class="label-input100">Confirm password</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="submit">
                        Sign in
                    </button>
                </div>
                <div class="text-center w-full p-t-23">
                    <a href="login.php" class="txt1">
                        <i class="fas fa-arrow-left"></i> Back on the login page
                    </a>
                </div>
            </form>
        </div>
        <div class="wrapper">
            <?php
            $nav = 0;

            if(isset($_GET['nav']))
                $nav = $_GET['nav'];

            switch ($nav){

                case 0:
                default: echo "";
                    break;
                case 1: echo "<span>[!] Username already exists !</span>";
                    break;
                case 2: echo "<span>[!] The passwords doesn't match !</span>";
                    break;
                case 3: echo "<span>[!] Check username and password !</span>";
                    break;

            }

            ?>
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

<!--===============================Password strenght============================================-->
<script type="text/javascript">
    $(document).ready(function(){
        $("#pass").keyup(function(){
            check_pass();
        });
    });

    function check_pass()
    {
        var val=document.getElementById("pass").value;
        var meter=document.getElementById("meter");
        var no=0;
        if(val!="")
        {
            // If the password length is less than or equal to 8
            if(val.length<=8)no=1;

            // If the password length is greater than 8 and contain any lowercase alphabet or any number or any special character
            if(val.length>8 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

            // If the password length is greater than 8 and contain alphabet,number,special character respectively
            if(val.length>8 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

            // If the password length is greater than 8 and must contain alphabets,numbers and special characters
            if(val.length>8 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

            if(no==1)
            {
                $("#meter").animate({width:'140px'});
                meter.style.backgroundColor="#990d35";
                JOptionPane.showMessageDialog("Too short")

            }

            if(no==2)
            {
                $("#meter").animate({width:'280px'});
                meter.style.backgroundColor="#ed9b40";
            }

            if(no==3)
            {
                $("#meter").animate({width:'420px'});
                meter.style.backgroundColor="#385a76";
            }

            if(no==4)
            {
                $("#meter").animate({width:'560px'});
                meter.style.backgroundColor="#00FF40";

            }
        }

        else
        {
            meter.style.backgroundColor="white";
            document.getElementById("pass_type").innerHTML="";
        }
    }
</script>
<!--===============================Password strenght============================================-->
<!--===============================Animation title============================================-->
<script type="text/javascript">

    $(function() {

        var welcomeSection1 = $('.welcome-section1'),
            enterButton1 = welcomeSection1.find('.enter-button1');

        setTimeout(function() {
            welcomeSection1.removeClass('content-hidden1');
        }, 500);

        enterButton1.on('click', function(e) {
            e.preventDefault();
            welcomeSection1.addClass('content-hidden1').fadeOut();
        });


    })();



</script>
<!--===============================Animation title============================================-->


</body>
</html>
