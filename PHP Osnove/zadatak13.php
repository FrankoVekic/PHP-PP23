<?php 

//kreirajte funkciju koja vraća 
//tablicu množenja formatiranju HTML elementima table,tr i td.
//funkcija prima dva parametra: broj redova i broj stupaca

function tablica($red,$stupac)
{
    $html=
    '<table border="1">';
    for($i=1;$i<=$red;$i++){
        $html.= '<tr>';
        for($j=1;$j<=$stupac;$j++){
            $html.= '<td>'. $i*$j. '</td>'; 
        }
        $html.= '</tr>';
    }
    $html.= '</table>';
    return $html;
}

echo tablica(4,2);