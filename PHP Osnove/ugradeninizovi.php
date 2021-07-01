<?php 

require_once 'funkcije.php';

echo '$_GET';
logiranje($_GET);


// $_POST frontend je u postprimjer.php

echo '$_POST';
logiranje($_POST);

echo '$_REQUEST';
logiranje($_REQUEST);

echo '$_SERVER';
logiranje($_SERVER);

$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
echo $phpVersion = substr($serverSoftware, strpos($serverSoftware, 'PHP') + 4); echo '<br>';
echo 'Trenutna PHP verzija: ' . phpversion();



echo '<br>';
echo '<br>';
//ili

//cookie su datoteke na klijentu

echo '$_COOKIE';
logiranje($_COOKIE);

setcookie("Edunova", "Postavio ja", time()+3600);

session_start();
echo '$_SESSION';
logiranje($_SESSION);

echo '$_FILES';
logiranje($_FILES);

$varijabla = 'Ovo ću vidjeti u $globals';

echo '$GLOBALS';
logiranje($GLOBALS);