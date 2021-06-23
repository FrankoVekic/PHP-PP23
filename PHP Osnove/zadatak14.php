<?php 

//kreirajte funkciju koja prima indeksni niz brojeva
//funkcija vraća aritmetičku sredinu svih primljenih brojeva 

function aritmetickaSredina($niz)
{
    if(gettype($niz)!='array'){
        return 0;

    }
    $suma=0;
    foreach($niz as $b){
        $suma+=$b;
    }
    return $suma/count($niz);
}

echo aritmetickaSredina([2,3,4,5,6,2]);