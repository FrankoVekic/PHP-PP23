<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($appLink);

$smjer = (object)$_POST;

for($i=0;$i<count($_SESSION['smjerovi']);$i++){
    $s = $_SESSION['smjerovi'][$i];
    if($s->sifra==$smjer->sifra){
        $_SESSION['smjerovi'][$i]=$smjer;
        break;
    }
}

header('location: index.php');