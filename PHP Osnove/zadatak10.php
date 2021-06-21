<?php 


//s while petljom ispisati sve brojeve od 100 do 1 jedno pokraj drugog
//odvojeno zarezom

$broj=100;

while ($broj>=1){
    echo $broj;
    if($broj-->1){
        echo ',';
        
    }

}