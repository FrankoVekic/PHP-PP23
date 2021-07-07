<?php require_once "../konfiguracija.php";
//štićenje
if(!isset($_SESSION['autoriziran'])){
    header('location:' . $appLink . 'index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once '../predlozak/head.php';
    ?>
</head>
<body>
    
        <div class="grid-containter">
            <?php require_once '../predlozak/izbornik.php' ?>
            <div class="callout pocetna">
            ovdje dođe lijepi graf
            </div>
        </div>
        
<?php require_once '../predlozak/footer.php'; 
      require_once '../predlozak/javascript.php';
?>
</body>
</html>