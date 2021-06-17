<?php 

$asoNiz= [
    'ime'=>'Franko',
    'prezime'=>'Vekić',
    'godina'=>23
];

//Zapisati Vekić Franko ima 23 godine.

echo $asoNiz['prezime'],"\r\n", $asoNiz['ime'],' ima ', $asoNiz['godina'],' godine.';

echo '<br>';
echo '<br>';

$niz['grad'] = 'Osijek';
$niz['drzava'] = 'Hrvatska';
$niz['kontinent'] = 'Europa';

echo $niz['kontinent'],'<br>';

print_r($niz);

echo "<pre>";
print_r($niz);
echo "</pre>";

echo '<br>';
echo '<br>';

$niz=[
    [
        'ime'=>'Franko',
        'prezime'=>'Vekić',
        'godina'=>23
    ],
    [
        'grad'=>'Osijek',
        'drzava'=>'Hrvatska',
        'kontinent'=>'Europa'
    ]
];

echo "<pre>";
print_r($niz);
echo "</pre>";

foreach($niz as $podaci){
    foreach($podaci as $vrijednosti){
        echo $vrijednosti,'<br>';
    }
}

$baza= [

    [
        'sifra' => 1,
        'ime' => 'Franko',
        'prezime' => 'Vekić'
    ],
    [
        'sifra'=> 2,
        'ime' => 'Ana',
        'prezime'=>'Anić'
    ]
];

echo "<pre>";
print_r($baza);
echo "</pre>";

//Ispisati Vekić Franko i Anić Ana su pod šiframa 1 i 2

echo $baza[0]['prezime'],"\r\n",$baza[0]['ime'], ' i ',$baza[1]['prezime'],"\r\n",$baza[1]['ime'],' su pod šiframa ',$baza[0]['sifra'],' i ',$baza[1]['sifra'],'.';

echo '<br>';
echo '<br>';

foreach($baza as $podaci){
    foreach($podaci as $vrijednosti){
        echo $vrijednosti,'<br>';
    }
}

echo '<br>';
echo '<br>';
$niz= [1,'Osijek',false,[2,'Zagreb']];

echo $niz[3][1];

echo "<pre>";
print_r($niz);
echo "</pre>";

