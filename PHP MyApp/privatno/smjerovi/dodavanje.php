<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);
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
        <form action="dodajNovi.php" method="post">
                <label for="naziv">Naziv</label>
                <input type="text" name="naziv" id="naziv">
                <label for="trajanje">Trajanje</label>
                <input type="number" min="1" step="1" max="300" name="trajanje" id="trajanje">
                <label for="cijena">Cijena</label>
                <input type="number" min="1" step="1" max="100000" name="cijena" id="cijena">
                <input type="submit" value="Dodaj novi smjer">
            </form>
        </div>
        <?php require_once '../../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../../predlozak/javascript.php'; ?>
</body>
</html>