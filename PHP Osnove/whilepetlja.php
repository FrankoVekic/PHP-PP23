<?php

// while radi s boolean tipom podatka

//beskonačna petlja
while(true){
    echo 'Osijek<br />';
    break;
}

echo '<hr />';

$i=0;

while($i<10){
    echo ++$i, '<br />';
}
echo '<hr />';
// posjeduje continue i break

//prekidanje vanjske petlje
//lošiji primjer
$nastavi=true;
while($nastavi){
    while(true){
        echo 'Osijek<br />';
        $nastavi=false;
        break;
    }
}

echo '<hr />';

while(true){
    while(true){
        echo 'Osijek<br />';
        break 2;
    }
}