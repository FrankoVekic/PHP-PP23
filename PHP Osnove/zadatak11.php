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
          <label for="broj1">Željeni broj</label>
          <input type="number" name="broj1" id="broj1">
          <input type="submit" value="submit">
</form>

<?php 

 if(isset($_GET['broj1'])){
     $broj=$_GET['broj1'];
     $rezultat=1;
     for($i=1;$i<=$broj;$i++){

        echo 'Factorial value: ', $rezultat *= $i, '<br>';

     }
 }

 echo '<hr>';

echo 'Write a program that prompts the user to input an 
integer and then outputs the number with the digits reversed. 
For example, if the input is 12345, the output should be 54321.';
echo'<br>';
?>

<form action="" method="get">
          <label for="broj2">Željeni broj</label>
          <input type="number" name="broj2" id="broj2">
          <input type="submit" value="submit">
</form>

<?php 

function reverseNum($num)
{
    $num;
    $ostatak=0;
    $reverse=0;
    
    while($num>=1){
        $ostatak = $num % 10;
        $reverse = $reverse * 10 + $ostatak;
        $num = $num / 10;
    }
    return $reverse;
}

if(isset($_GET['broj2'])){
    $broj=$_GET['broj2'];
   
    echo reverseNum($broj);
    
}

echo '<hr>';

echo 'Write a program that reads a set of integers, and then prints the sum of the even and odd integers.';

?>

<form action="" method="get">
          <label for="broj3">Željeni broj</label>
          <input type="number" name="broj3" id="broj3">
          <input type="submit" value="submit">
</form>

<?php 
    if(isset($_GET['broj3'])){

    
    $do=$_GET['broj3'];
    $rez=['parni'=>0,'neparni'=>0];

    for($i=1;$i<=$do;$i++){
        if($i%2===0){
            $rez['parni'] = $rez['parni'] + $i;
        }
        else{
            $rez['neparni'] = $rez['neparni'] + $i;
        }
        
    }
    print_r($rez);

}
echo '<hr>';
echo 'Write a program that prompts the user to input a positive integer.
 It should then output a message indicating whether the number is a prime number.';

?>
<form action="" method="get">
          <label for="broj4">Željeni broj</label>
          <input type="number" name="broj4" id="broj4">
          <input type="submit" value="submit">
</form>

<?php 

function primeNumber($num)
{
    for($i=2;$i<$num;$i++){
        if($num % $i === 0){
            return false;
        }
        else{
            return true;
        }

    }
}

if(isset($_GET['broj4'])){
    $broj= $_GET['broj4'];
   
    if(primeNumber($broj)){
        echo $broj, ' is a prime number.';
    }
    else {
        echo $broj, ' is not a prime number';
    }
}

echo '<hr>';
echo 'Write a program to calculate HCF of Two given number.';

?>
<form action="" method="get">
          <label for="broj5">Prvi broj</label>
          <input type="number" name="broj5" id="broj5">
          <label for="broj6">Drugi broj</label>
          <input type="number" name="broj6" id="broj6">
          <input type="submit" value="submit">
</form>

<?php 

function calcHcf($a,$b){
    $hfc=0;

    for($i=1;$i<=$a || $i<=$b;$i++){
        if($a%$i==0 && $b%$i==0){
            $hcf=$i;
        }
    }
    return $hcf;
}

if(isset($_GET['broj5']) && isset($_GET['broj6'])){
    $broj1= $_GET['broj5'];
    $broj2= $_GET['broj6'];

    echo calcHcf($broj1,$broj2);

}

echo '<hr>';

echo'Write a program to print out all Armstrong numbers between 1 and 500. 
If sum of cubes of each digit of the number is equal to the number itself, 
then the number is called an Armstrong number.
For example, 153 = ( 1 * 1 * 1 ) + ( 5 * 5 * 5 ) + ( 3 * 3 * 3 )';

    for($broj=1;$broj<=500;$broj++){

        $check = $broj;
        $a=$check % 10;
        $check = $check / 10;
        $b=$check % 10;
        $check = $check / 10;
        $c=$check % 10;

        if($a*$a*$a + $b*$b*$b + $c*$c*$c==$broj){
            echo '<br>';
            echo $broj . '<br>';
        }
    }

    echo '<hr>';

    echo 'Write a program to calculate the sum of 
    following series where n is input by user. 
    1 + 1/2 + 1/3 + 1/4 + 1/5 +…………1/n ';


    function numOfNs($n) 
    {
        $sum=0;
        for($i=1;$i<=$n;$i++){
            $sum+=1.0/$i;
        }
        return $sum;
    }
echo '<br>';
echo numOfNs(10);

echo '<hr>';

echo'Create a PHP script which displays the capital 
and country name from the above array $ceu. Sort the
 list by the capital of the country';

 $country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> 
 "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", 
 "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
  "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
  "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

  foreach($country as $country => $city){
    echo 'Glavni grad '. $country . ' je ' . $city . '<br>';
  }

echo '<hr>';

echo'Write a PHP script to find the maximum and minimum marks from the following set of arrays.';

$array1 = array(75,310,310,330,833,375,456,111,256);
$array2 = array(332,380,356,40,361);
$array3 = array(630,340,700,635,434,255,298);

$max_array = max(max($array1),max($array2),max($array3));
$min_array = min(min($array1),min($array2),min($array3));
echo '<br>';
echo 'Min number from the selected arrays is: ' . $min_array . ".";
echo '<br>';
echo 'Max number from the selected arrays is: ' . $max_array . ".";
echo '<br>';
