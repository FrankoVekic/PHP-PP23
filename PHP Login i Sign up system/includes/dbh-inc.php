<?php 

$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="loginsystem";

$connection = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$connection){
    die("Conenction failed: " . mysqli_connect_error());

}

