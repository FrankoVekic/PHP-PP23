<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

echo $_GET["t"];


//kreiranje asocijativnog niza

$niz=[
    'kljuc' => 'vrijednost',
    'mjesto' => 'Osijek',
    'kupac' => 'Franko'
    /*
    1 => true,
    5.9 => [1,1],
    false => 1
    */
];

echo "<pre>";
print_r($niz);
echo "</pre>";

echo $niz['mjesto'];

$niz = [
    'mjesto' => [
        'sifra' =>1,
        'naziv' =>'Osijek',
    ],
        'ime'=>'Pero'
];

echo "<pre>";
print_r($niz);
echo "</pre>";

echo $niz['ime'], ' dolazi iz grada ', $niz['mjesto']['naziv'];

echo "<br>";

foreach($niz as $kljuc => $vrijednost){
    if(gettype($vrijednost)==='array'){
        continue;
    }
    echo $kljuc, ' je ', $vrijednost;
}

//php može imati kombinatorne nizove 
$niz = ['pero','kljuc'=>2];

echo "<pre>";
print_r($niz);
echo "</pre>";

//česta kombinacija 
$podaci = [
    [
        'sifra'=>1,
        'naziv'=>'PHP programer'
    ],
    [
        'sifra'=>2,
        'naziv'=>'Java programer'
    ]
];

echo "<pre>";
print_r($podaci);
echo "</pre>";

foreach($podaci as $red){
    foreach($red as $vrijednost){
        echo $vrijednost,'<br>';
    }    
}
echo '<br>';
foreach($podaci as $red){
    foreach($red as $vrijednost){
    echo $vrijednost, '<br />';
    }
    echo $red['sifra'], ' - ', $red['naziv'], '<br />';
    }
