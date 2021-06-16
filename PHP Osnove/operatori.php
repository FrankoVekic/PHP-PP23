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

// Zadatak 1 
$x = 2; $y = 3;
$y= --$x; // $y=1, $x=1
$x = ++$y - $x++; // 1= 2-1(dodaje se 1 poslje) = $x=1, $y=2

//Zadatak 2
$a = 10; $b = 5;
$b = $a++ + --$b; // 10 + 4 = 14
$a = ++$a + --$b; // $a = 10(+1) = 12 + 13 = $a = 25, $b= 13

//Zadatak 3 
$a=16; $b=22;

$a= --$b - $a++; // $a = 21 - 16, $a=5, $b=21
$b= $b++ - ++$a; // $b = 21 - 6, $a=6, $b=15
$c = 2;
$c = ++$b + $a / $c; // 16 + 6 / 2 = 16+3, $a=6, $b=16, $c=19

//Zadatak 4

$a= 21; $b=10; $c=11; $d=2;
$a= $b++ / $d++ + --$c; // $a= 10/ 2 + 10, $a=15, $b=11, $c=10, $d=3
$b = --$a + ++$d - $c++; // $b= 14 + 4 - 10, $b=8, $a=14, $c=11, $d=4
$c = 2* $b / ++$a - $d--; //$c= 2*8 / 15 - 4, $c = 16 /15 -4 = 1.06-4, $c= 2.93, $a=15, $b=8, $d=3

//Zadatak 5
$a = 25; $b = 10; $c= 11; $d=5; $e= 8;
$c= $a++ / $d++ + 5 - --$b - $e++; //$c= 5 + 5 - 9 - 8= 1-8 = -7, $c= -7, $a=26, $b=9, $d=6, $e=9
$a = --$b + $c++ + ++$e - $d--; // 8+(-7)+10-6 = $a=5, $b=8, $c=-6, $d=5, $e=10
$e = $d++ - --$a + $b++ + --$c; // 5-4+8+(-7)= $e=2, $a=4, $b=9, $c=-7, $d=6


//modulo
//ostatak nakon cjelobrojnog djeljenja

$t =5;

$ostatakNakonCjelobrojnogDjeljenja = 5%2; //1

//5 / 2 cjelobrojno = 2
//2 * 2 = 4 
// 5-4 = 1 --- to je modulo (broj jedan)

$broj = isset($_GET['broj']) ? $_GET['broj'] : 2;
echo 'primljeni broj ', $broj, ' je ';
if($broj % 2 === 0) {
    echo ' paran';
}
else{
    echo ' ne paran';
}