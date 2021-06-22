<?php

// for(od kuda; do kuda; uvećanje/uzmanjenje)

for($i=0;$i<10;$i=$i+1){
    echo 'Osijek<br />';
}
echo '<hr />';
for($i=0;$i<10;$i+=1){
    echo $i+1 , '<br />';
}
echo '<hr />';
for($i=10;$i>0;$i--){
    echo "Osijek $i<br />";
}


echo '<hr />';
$suma=0;
for($i=1;$i<=100;$i++):
    $suma+=$i; //$suma=$suma+$i
//echo $i, ' - ', $suma,  '<br />';
endfor;
echo $suma, '<br />';

echo '<hr />';

//kao da je unio korisnik
$odKuda = 3; $doKuda=55;

for($i=$odKuda;$i<=$doKuda;$i++){
    if($i%2===0){
        echo $i, '<br />';
    }
}

// ovo nije dobra praksa
for($i=4;$i<=54;$i+=2){
    echo $i, '<br />';
}

//ugnježđivanje petlje
$redova=7;
$kolona=5;
echo '<table border="1">';
for($i=1;$i<=$redova;$i++){
    echo '<tr>';
    for($j=1;$j<=$kolona;$j++){
        echo '<td>', $i*$j, '</td>';
    }
    echo '</tr>';
}
echo '</table>';    
// mat tab

$redovi=[];
for($i=0;$i<$redova;$i++){
    $kolone=[];
    for($j=0;$j<$kolona;$j++){
        $kolone[]=0;
    }
    $redovi[]=$kolone;
}

echo '<pre>';
print_r($redovi);
echo '</pre>';

echo '<table border="1">';
for($i=0;$i<$redova;$i++){
    echo '<tr>';
    for($j=0;$j<$kolona;$j++){
        echo '<td>', $redovi[$i][$j], '</td>';
    }
    echo '</tr>';
}
echo '</table>';  

$broj=1;
    for($j=$kolona-1;$j>=0;$j--){
        $redovi[$redova-1][$j]=$broj++;
    }


    echo '<table border="1">';
for($i=0;$i<$redova;$i++){
    echo '<tr>';
    for($j=0;$j<$kolona;$j++){
        echo '<td>', $redovi[$i][$j], '</td>';
    }
    echo '</tr>';
}
echo '</table>';  




echo '<hr />';

// preskakanje - nastavak izvođenja petlje

for($i=0;$i<10;$i++){
    if($i===1 || $i===7){
        continue;
    }
    echo $i, '<br />';
}


// lošila alternativa
for($i=0;$i<10;$i++){
    if($i!==1 && $i!==7){
        echo $i, '<br />';  
    }
   
}




echo '<hr />';

for($i=0;$i<10;$i++){
    if($i===5){
        break;
    }
    echo $i, '<br />';
}
