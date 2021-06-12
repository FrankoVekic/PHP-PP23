<?php 

if (isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if(loginEmpty($username,$password ) !== false){
        header("location: ../login.php?error=inputempty");
        exit();
    }

    loginUser($connection, $username,$password);

}
else {
    header("location: ../login.php");
    exit();
}