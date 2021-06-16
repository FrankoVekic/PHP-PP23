<?php 


//ovo nije dobra praksa
$t=1;
$t1=2;
$t2=3673;


$niz=[1,2,2,2,2,2,3,3,3,2];

echo gettype($niz);

echo $niz[1];
echo "<pre>";

print_r($niz);

echo "</pre>";

$niz[]=7;

echo "<pre>";

print_r($niz);

echo "</pre>";

//niz nizova

$nizNizova= [
[0,0,0],
[0,0,0],
[0,0,0]
];

$nizNizova[1][1]=1;

echo "<pre>";

print_r($nizNizova);

echo "</pre>";

$niz=[1,true,3.6,[2,3],'Edunova',new stdClass()];

echo $niz[4];

$niz=['Osijek','Zagreb','Donji Miholjac'];

echo "<pre>";

print_r($niz);

echo "</pre>";

foreach($niz as $grad){
    echo $grad, '<br>';
}