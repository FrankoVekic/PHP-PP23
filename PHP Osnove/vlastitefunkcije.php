<?php 

//da bi funkciju koristio prvo ju moraš kreirati

//1. vrsta 
// ne prima parametre, ne vraća vrijednost 
function posao(){
echo 'hello';
echo '<hr>';
}

//poziv funkcije 

posao();

//phpinfo();

//2.vrsta
//prima parametre, ne vraća vrijednost

function logiranje($varijabla){
if(gettype($varijabla)!=='array'){


echo gettype($varijabla);
}
echo '<pre>';
print_r($varijabla);
echo '</pre>';
}


$niz = ['ime'=>'Pero','Podaci'=>[1,2,3,2]];

logiranje($niz);
logiranje('Edunova');
logiranje(12.9);

//3. vrsta
//ne prima parametre, vraća vrijednost

function slucajnaLista(){
    $broj = rand(10,20);
    $html = '<ol>';
    while($broj-->0){
        $html.='<li>' . rand(1,5) . '</li>';
    }
    $html.='/<ol>';
    return $html;
}

echo slucajnaLista();


//4. vrsta
//prima parametre i vraća vrijednost

function primBroj($broj)
{
    for($i=2;$i<$broj;$i++){
        if($broj % $i===0){
            return false;
        }
        return true;
    }
}

$b=29;
if(primBroj($b)){
    echo $b, 'PRIM';

}
else{
    echo $b, 'NIJE PRIM';
}

//ispisati sve prim brojeve izmedu dva primljena broja

echo '<hr>';

function primBrojevi($pb,$db)
{
    for($i=$pb;$i<=$db;$i++){
        if(primBroj($i)){
            echo $i, '<br>';

        }
    }
}

primBrojevi(45,92);

echo '<hr>';

//svaka funkcija može imati opcionalne parametre

function log2($varijabla,$element='pre')
{
    echo '<', $element, '>';
    print_r($varijabla);
    echo '</', $element, '>';
}

log2($niz);
log2($niz,'p');

//ovo ne radi 

$godina=2021;

function godina(){
   // echo $godina;
}

godina();

echo '<hr>';

function brojParniNeparni($od,$do)
{
    $rez=['parni'=>0,'neparni'=>0];
    for($i=$od;$i<=$do;$i++){
        if($i%2===0){
            $rez['parni'] = $rez['parni'] + $i;
        }
        else{
            $rez['neparni'] = $rez['neparni'] + $i;
        } 
    }
    return $rez;
}
print_r(brojParniNeparni(1,7));
echo '<hr>';

//rekurzija 

//Zadatak zbrajanja prvih 100 brojeva rekurzijom

function sumToNum($n=1)
{
    echo $n, '<br>';

    if($n<100){
        return sumToNum($n+1);

    }
}

sumToNum();

echo '<hr>';

function recursiveDec ($n=100)
{
    echo $n, '<br>';

    if($n>0){
        return recursiveDec($n-1);
    }
}

recursiveDec();

echo '<hr>';