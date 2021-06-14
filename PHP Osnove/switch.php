<?php 

$broj = isset($_GET["broj"]) ? (int)$_GET["broj"] : 0;

switch ($broj) {
    case 1:
        echo 'Nedovoljan';
        break;
    case 2:
         echo 'Dovoljan';
        break;
    case 3:
        echo 'Dobar';
        break;
    default:
        echo 'Ostalo';
        break;
}