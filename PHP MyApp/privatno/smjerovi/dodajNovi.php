<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($appLink);

$smjer = (object)$_POST;
$smjer->sifra = count($_SESSION['smjerovi'])+1;
$_SESSION['smjerovi'][]=$smjer;

header('location:index.php');