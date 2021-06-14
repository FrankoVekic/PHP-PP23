//U izbornik postaviti poziv stranice zadatak4.php?naslov=2&tekst=Osijek
//stranica ispisuje primljeni tekst u velicini naslova (h1-h6)
// u koliko je naslov manji od 1 ili veci od 6 stranica javlja poruku:
//Neispravan parametar

<br>
<br>

<?php 
$naslov =(int) $_GET["naslov"];
$tekst = $_GET["tekst"];

if ($naslov < 1 || $naslov > 6){
    echo "Neispravan parametar";
}
else {
   echo "<h$naslov>$tekst</h$naslov>";
}