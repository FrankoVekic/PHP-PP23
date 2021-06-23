<?php 

//Naparaviti funkciju koja prima paramatar te računa zbroj svih parnih 
//i ne parnih brojeva od 1 do odabranog broja

function brojParniNeparni($od,$do)
{
    $rez=['parni'=>0,'neparni'=>0];
    for($i=$od;$i<=$do;$i++){
        if($i%2===0){
            $rez['parni'] = $rez['parni'] + $i;
        }
        else{
            $rez['neparni'] = $rez['neparni'] + $i;
        } 
    }
    return $rez;
}
print_r(brojParniNeparni(1,7));