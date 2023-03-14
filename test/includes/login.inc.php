<?php

if(isset($_POST["submit"]))
{

    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiate SignupContr class
    include "../class/dbh.classes.php";
    include "../class/login.classes.php";
    include "../class/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user signup
    $login->loginUser();

    // Going to back to front page
    header("location: ../index.php?error=none");
}

?>