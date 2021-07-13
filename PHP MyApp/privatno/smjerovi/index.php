<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($appLink);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../../predlozak/head.php'; ?>
    <style>
        tr > th:nth-child(2), 
        tr > th:nth-child(3),
        tr > td:nth-child(2), 
        tr > td:nth-child(3),
        tfoot > tr > td:nth-child(1){
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <?php require_once '../../predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
            <?php //logiranje($_SESSION['smjerovi']); ?>
            <a href="dodavanje.php" class="button expanded">Dodaj novi</a>
            <table>
                <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Trajanje</th>
                        <th>Cijena</th>
                        <th>Akcija</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $suma=0;
                foreach($_SESSION['smjerovi'] as $smjer): 
                $suma+=$smjer->cijena;
                ?>
                    <tr>
                        <td><?php echo $smjer->naziv ?></td>
                        <td><?php echo $smjer->trajanje ?></td>
                        <td><?php echo number_format($smjer->cijena,2,',','.') ?></td>
                        <td>
                            <a href="promjena.php?sifra=<?php echo $smjer->sifra ?>">Promjena</a>
                            <a onclick="return confirm('Sigurno obrisati <?php echo $smjer->naziv ?>?');" 
                            href="brisanje.php?sifra=<?php echo $smjer->sifra ?>">Brisanje</a>
                        </td>
                    </tr>
                <?php 
                $prosjek=$suma/count($_SESSION['smjerovi']);
                endforeach;?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">Prosjek</td>
                        <td><?php echo number_format($prosjek,2,',','.') ?></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <?php require_once '../../predlozak/podnozje.php'; ?>
    </div>
    <?php require_once '../../predlozak/javascript.php'; ?>
</body>
</html>