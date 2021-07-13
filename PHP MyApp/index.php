<?php require_once 'konfiguracija.php'; 
if(isset($_SESSION['autoriziran'])){
    header('location:' . $putanjaAplikacije . 'privatno/nadzornaploca.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'predlozak/head.php'; ?>
</head>
<body>
    <div class="grid-container">
        <?php require_once 'predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
            <form action="<?php echo $putanjaAplikacije; ?>autorizacija.php" method="post">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <label for="lozinka">Lozinka</label>
                <input type="password" name="lozinka" id="lozinka">
                <input type="submit" value="Logiraj se">
            </form>
        </div>
        <?php require_once 'predlozak/podnozje.php'; ?>
    </div>
    <?php require_once 'predlozak/javascript.php'; ?>
</body>
</html>