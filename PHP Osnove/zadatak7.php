<?php 


//program ispisuje zbroj svih primljenih get parametara 
//bez obzira na naziv ključa ?t=3&k=6

$zbroj=0;

foreach($_GET as $vrijednost){
    $zbroj = $zbroj +(int) $vrijednost;
}

echo $zbroj;