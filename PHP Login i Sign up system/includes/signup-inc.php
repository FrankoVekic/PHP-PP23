<?php 

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

if(signupEmpty($name,$email,$username,$password,$passwordrepeat) !== false){
    header("location: ../signup.php?error=inputempty");
    exit();
}
if(invalidUsername($username) !== false){
    header("location: ../signup.php?error=invalidusername");
    exit();
}
if(passwordMatch($password,$passwordrepeat) !== false){
    header("location: ../signup.php?error=passwordsnotmatching");
    exit();
}
if(usedUidOrEml($connection,$username,$email) !== false){
    header("location: ../signup.php?error=usernameinuse");
    exit();
}
createUser($connection,$name,$email,$username,$password);

}
else {
    header("location: ../signup.php");
}