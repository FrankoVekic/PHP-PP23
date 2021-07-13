<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($appLink);
$smjer=null;
for($i=0;$i<count($_SESSION['smjerovi']);$i++){
    $s = $_SESSION['smjerovi'][$i];
    if($s->sifra==$_GET['sifra']){
        $smjer=$s;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../../predlozak/head.php'; ?>
</head>
<body>
    <div class="grid-container">
        <?php require_once '../../predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
        <a href="index.php" class="alert button expanded">Odustani</a>
        <form action="promjeni.php" method="post">
                <label for="naziv">Naziv</label>
                <input type="text" name="naziv" id="naziv" 
                value="<?php echo $smjer->naziv ?>">
                <label for="trajanje">Trajanje</label>
                <input type="number" min="1" step="1" max="300" name="trajanje" id="trajanje"
                value="<?php echo $smjer->trajanje ?>">
                <label for="cijena">Cijena</label>
                <input type="number" min="1" step=".01" max="100000" name="cijena" id="cijena"
                value="<?php echo $smjer->cijena ?>">
                <input type="hidden" name="sifra" 
                value="<?php echo $smjer->sifra ?>">
                <input type="submit" value="Promjeni smjer">
            </form>
        </div>
        <?php require_once '../../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../../predlozak/javascript.php'; ?>
</body>
</html>