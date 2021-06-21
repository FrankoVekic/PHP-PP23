
<form action="" method="get">
          <label for="broj">Željeni broj</label>
          <input type="number" name="broj" id="broj">
          <input type="submit" value="submit">
</form>
<?php 
$pocetni=1;
if(isset($_GET['broj'])){
    if($_GET['broj']%2==0){
        for($i=2;$i<=$_GET['broj'];$i+=2){
                echo $i . '<br>';
              }   
            }
            else if ($_GET['broj']%2==1){
                for($i=1;$i<=$_GET['broj'];$i+=2){
                    echo $i . '<br>';
            }
    }
    else {
        echo 'Error';
    }
}
   
//stranica putem get metode prima broj
//Ako je primljeni broj paran na stranici se ispisuje svi parni brojevi od 
//1 do tog broja.
//Ako je primljeni broj neparan na stranici se ispisuju svi neparni brojevi
//od 1 do tog broja


