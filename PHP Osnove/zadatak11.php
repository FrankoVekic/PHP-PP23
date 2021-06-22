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

for($i=1,$a=1;$i<=5;$i++,$a++){
    for($j=$i;$j<=5;$j++){
        echo '&nbsp ';
    }
    for($j=1;$j<$i;$j++){
        echo $a;
    }
    for($j=1;$j<=$i;$j++){
        echo $a;
    }
 echo '<br>';
}
echo '<hr>';
/*
        1
       212
      32123
     4321234
    543212345
*/

for($i=1,$a=1;$i<=5;$i++,$a++){
    for($j=$i;$j<=5;$j++){
        echo '&nbsp ';
    }
    for($j=1;$j<$i;$j++){
        echo $a;
    }
    for($j=1;$j<=$i;$j++){
        echo $j;
    }
 echo '<br>';
}
echo '<hr>';

echo 'Write a program to print numbers from 1 to 10.';

echo'<br>';

for($i=1;$i<=10;$i++){
    echo $i . '<br>';

}

echo '<hr>';

echo 'Write a program to calculate the sum of first 10 natural number.';
echo'<br>';

$sum=0;
for($i=1;$i<=10;$i++){
    echo $sum+=$i,'<br>';
}
echo '<hr>';

echo 'Write a program that prompts the user to 
input a positive integer. It should then print the 
multiplication table of that number. ';
echo'<br>';

?>


<form action="" method="get">
          <label for="broj">Željeni broj</label>
          <input type="number" name="broj" id="broj">
          <input type="submit" value="submit">
</form>

<?php 

echo '<table border="1">';

if(isset($_GET['broj'])){
    $broj=$_GET['broj'];
    
    for($i=1;$i<=$broj;$i++){
        echo '<tr>';
        for($j=1;$j<=$broj;$j++){
            echo '<td>', $i*$j, '</td>'; 
        }
        echo '</tr>';
    }

}
echo '</table>';
echo '<hr>';

echo 'Write a program to find the factorial 
value of any number entered through the keyboard.';
echo'<br>';
?>

<form action="" method="get">
          <label for="broj">Željeni broj</label>
          <input type="number" name="broj" id="broj">
          <input type="submit" value="submit">
</form>

<?php 

 if(isset($_GET['broj'])){
     $broj=$_GET['broj'];
     $rezultat=1;
     for($i=1;$i<=$broj;$i++){

        echo 'Factorial value: ', $rezultat *= $i, '<br>';

     }
 }