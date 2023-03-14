<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <div>
            <h3>CESAR PINO'S CLASSROOM</h3>
            <ul class="menu-main">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="#">#</a></li>
                <li><a href="member.php">STUDENTS</a></li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php
                if(isset($_SESSION["userid"]))
                {
            ?>
                <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
            <?php
                }
                else
                {
            ?>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>
            <?php  
                }
            ?>
        </ul>
    </nav>
</header>

<section class="index-intro">
    <div class="index-intro-bg">
        <div class="wrapper">
            <div class="index-intro-c1">
                <div class="video"></div>
                <p><strong>Studio Adress:</strong><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2493.931164703225!2d-87.78896497346487!3d41.98308892702435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fc95a3a8f2011%3A0xe6dc93d08c1b116d!2s5616%20N%20Nagle%20Ave%2C%20Chicago%2C%20IL%2060646!5e0!3m2!1sen!2sus!4v1674428258772!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
            <div class="index-intro-c2">
                <h2><br>Welcome Musicians!<br></h2>
                <a href="about.php">PINO'S ABOUT</a>
            </div>
        </div>
    </div>
</section>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>SIGN UP</h4>
            <p>Are you a student or interested in lessons?<br>Sign up here!</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>My sign up friend is right next to me!</p>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</section>

<div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Production</h3>
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UC8gPxnb0BokxA5_TVMPSYsg" target="_blank">Youtube</a></li>
                            <li><a href="https://open.spotify.com/artist/6doTRWyeiy8lQm9po8L5dz?si=PpNrjcDaQ5WiIdvDSIfJEg" target="_blank">Spotify</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#https://www.c3zr.com/" target="_blank">Personal Website</a></li>
                            <li><a href="https://www.linkedin.com/in/cesar-pino-b252a8163/" target="_blank">Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Information</h3>
                        <ul>
                        <li><a href="mailto:cdpino22@gmail.com" target="_blank"><strong>Email:</strong> <br>cdpino22@gmail.com</a></li>
                        <li><a href="https://goo.gl/maps/kAtGbok2HorFjr7m7" target="_blank"><strong>Studio Address:</strong> <br> 4441 N Lowell Ave, Chicago, IL 60630</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="https://www.instagram.com/c3zr_music/" target="_blank"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Beta: 0.0.1</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>