<?php require_once "konfiguracija.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once 'predlozak/head.php';
    ?>
</head>
<body>
    
        <div class="grid-containter">
            <?php require_once 'predlozak/izbornik.php' ?>
            <div class="callout pocetna">
            <form action="<?php echo $appLink?>autorizacija.php" method="post">
    
    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="lozinka">Lozinka</label>
    <input type="password" name="lozinka" id="lozinka">

    <input type="submit" value="Logiraj se">
            </div>
        </div>
        
<?php require_once 'predlozak/footer.php'; 
      require_once 'predlozak/javascript.php';
?>
</body>
</html>