<?php 


echo count($_GET);

echo '<hr>';

$ime='Edunova';

echo substr($ime, 1,5);

echo '<hr>';


$podaci='2,3,4,5,3,4,3,4';

$niz = explode(',',$podaci);

echo '<pre>';
print_r($niz);
echo '</pre>';


$podaci=implode(' ',$niz);
echo $podaci;