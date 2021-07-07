<?php
require_once 'konfiguracija.php';

$exists = false;
foreach($users as $email=>$lozinka){
    if($email===$_POST['email'] && $lozinka ===$_POST['lozinka']){
        $exists=true;
        break;
    }
}

if($exists){
    $_SESSION['autoriziran']=$_POST['email'];
    header('location:' . $appLink . 'privatno/nadzornaploca.php');
}
else {
    header('location:' . $appLink .'index.php');
}