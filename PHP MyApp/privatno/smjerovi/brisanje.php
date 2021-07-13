<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($appLink);

for($i=0;$i<count($_SESSION['smjerovi']);$i++){
    $smjer = $_SESSION['smjerovi'][$i];
    if($smjer->sifra==$_GET['sifra']){
        unset($_SESSION['smjerovi'][$i]);
        break;
    }
}

header('location: index.php');