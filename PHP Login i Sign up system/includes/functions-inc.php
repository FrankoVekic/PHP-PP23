<?php 

function signupEmpty($name,$email,$username,$password,$passwordrepeat) {
$result;
if(empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordrepeat)) {
$result = true;
}

else {
    $result = false;
}
return $result;
}

function invalidUsername($username) {
    $result;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/" , $username)) {
    $result = true;
    }
    else {
        $result=false;
    
    }
    return $result;
    }

    function passwordMatch($password,$passwordrepeat) {
        $result;
        if($password !== $passwordrepeat){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }


    function usedUidOrEml($connection,$username,$email) {
        $sql = "SELECT * FROM USERS where username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
        }
        mysqli_stmt_bind_param($stmt, "ss",$username,$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);

    } 
    
    function createUser($connection,$name,$email,$username,$password) {
        $sql = "INSERT INTO users(firstName,email,userName,password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
        }

        $hasedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss",$name,$email,$username,$hasedPassword);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();
    }    
    
    function loginEmpty($username,$password) {
        $result;
        if(empty($username) || empty($password)) {
        $result = true;
        }
        
        else {
            $result = false;
        }
        return $result;
        }

    function loginUser($connection, $username,$password) {
        
        $usedUidOrEml = usedUidOrEml($connection,$username,$username);

        if($usedUidOrEml === false ){
            header("location: ../login.php?error=loginfailed");
            exit();
        }
        $passwordHased = $usedUidOrEml["password"]; 
        $checkPassword = password_verify($password, $passwordHased);

        if($checkPassword === false){
            header("location: ../login.php?error=loginfailed");
            exit();
        }
        else if ($checkPassword === true){
            session_start();
            $_SESSION["sifra"] = $usedUidOrEml["sifra"];
            $_SESSION["username"] = $usedUidOrEml["userName"];
            header("location: ../index.php");
            exit();

        }
    }