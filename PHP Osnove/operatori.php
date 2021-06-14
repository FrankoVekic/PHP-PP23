<?php 

$i = 1; $t=0;

$t = $t + $i;

//skraćeno od linije 5

$t += $i;

//ista pravila vrijede za - * /

// specifičnosti uvečanja za 1


$i = 0;

$i =$i+1; //1

$i+=1;

$i++;

//increment
echo $i++; //prvo koristi pa onda uveća varijablu

echo ++$t; //odma dodaje i ispisuje

$i =1; $j=0;

$i = $j++;
$j =--$i;