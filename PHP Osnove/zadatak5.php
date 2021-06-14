// U izbornik postaviti poziv stranice zadatak5.php?broj=2&ime=4&t=9
// stranica ispisuje najveći primljeni broj


<?php 

$broj =(int) $_GET["broj"];
$ime =(int) $_GET["ime"];
$t =(int) $_GET["t"];

echo "<br>";

if($broj > $ime && $broj > $t){
    echo $broj;
}
else if($ime > $broj && $ime > $t) {
    echo $ime;
}
else if ($t > $ime && $t > $broj){
    echo $t;
}
else if ($broj === $ime && $broj > $t) {
    echo 'Broj i ime su '. $ime . ' i veči od varijable t';
}
    else if ($t === $ime && $t > $broj){
    echo 't i ime su' . $t . 'jednaki i veči od varijable broj';
}
else if ($t === $broj && $t > $ime) {
    echo 't i broj su ' .$t .' i veči od varijable ime';
}
else if ($t === $broj && $t === $ime && $ime === $broj){
    echo 'Svi brojevi su ' . $t;
}
else {
    echo 'Nešto ne valja';
}