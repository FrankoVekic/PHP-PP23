<?php

require_once 'konfiguracija.php';

//logiranje($_POST);
//logiranje($korisnici);

$postoji=false;
foreach($korisnici as $email=>$lozinka){
    if($email===$_POST['email'] && $lozinka===$_POST['lozinka']){
        $postoji=true;
        break;
    }
}

if($postoji){
    $_SESSION['autoriziran']=$_POST['email'];

    $niz=[];
    $s=new stdClass();
    $s->sifra=1;
    $s->naziv='PHP';
    $s->trajanje=130;
    $s->cijena=4999.99;

    $niz[]=$s;

    $s=new stdClass();
    $s->sifra=2;
    $s->naziv='JAVA';
    $s->trajanje=180;
    $s->cijena=5999.99;

    $niz[]=$s;

    $_SESSION['smjerovi']=$niz;


    header('location:' . $appLink . 'privatno/nadzornaploca.php');
}else{
    header('location:' . $appLink . 'index.php');
}