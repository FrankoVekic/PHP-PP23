<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once 'funkcije.php';

if(isset($_POST['submit'])){
    $red = $_POST['red'];
    $stupac = $_POST['stupac'];
    $broj=1;
    $minRed = 0;
    $maxRed= $red -1;
    $minStup = 0;
    $maxStup = $stupac -1;
    $tablica=[];

    while ($broj <= $red*$stupac){
        for($n=$maxStup; $n >= $minStup; $n--){
            $tablica[$maxRed][$n] = $broj++;
        }
        $maxRed--;
        
        if($broj > $red*$stupac) 
        break;

        for($m=$maxRed;$m>=$minRed; $m--){
            $tablica[$m][$minStup] = $broj++;

        }
        $minStup++;
        if($broj > $red*$stupac) 
        break;

        for($n=$minStup; $n<=$maxStup;$n++){
            $tablica[$minRed][$n] = $broj ++;

        }
        $minRed++;
        if($broj > $red*$stupac) 
        break;
        
        for($m=$minRed; $m<= $maxRed; $m++){
            $tablica[$m][$maxStup]=$broj++;
        }
        $maxStup --;
    }
}

?>

<table class="tablica">
<?php 
if(isset($_POST['submit'])){
        for($m=0;$m<$red;)
        {
          echo '<tr>';
            for ($n=0; $n < $stupac;) 
            { 
              echo '<td>'. $tablica[$m][$n] .'</td>';
              $n++;
            }
            echo '</tr>';
            $m++;
        }  
    }
?>
</table>
<?php 
