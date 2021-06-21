<?php 

/* 4x10 

**********
**********
**********
**********

*/


for($i=1;$i<=4;$i++){
    echo '*';

    for($j=1;$j<=9;$j++){
        echo '*';
        
    }
    echo'<br>';
}

echo '<hr>';
/*
1
222
33333
4444444
555555555


*/

for($i=1;$i<=4;$i++){
    echo $i . '<br>';
    for($j=0;$j<$i;$j++){
        echo $i+1;
        echo $i+1;
    }
}

echo '<hr>';

/* 

*
**
***
****
*****

*/

for($i=1;$i<=5;$i++){
    for($j=1; $j<=$i;$j++){
        echo '*';
    }
    echo '<br>';
}

echo '<hr>';

/*

        *
       ***
      *****
     *******
    *********

*/

for ($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo '&nbsp ';
    }
    for($k=6;$k>=$j;$k--){
            echo '*';

    }
    for($k=6;$k>$j;$k--){
        echo '*';

}
    echo '<br>';
}
echo '<hr>';

/* 
        1
       222
      33333
     4444444
    555555555     
*/

/*
for ($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo '&nbsp ';
    }
    for($k=6;$k>=$j;$k--){
            echo $j;

    }
    for($k=6;$k>$j;$k--){
        echo $k;

}
    echo '<br>';
}
nastavljam sutra---
*/
