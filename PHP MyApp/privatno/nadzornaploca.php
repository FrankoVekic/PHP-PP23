<?php require_once '../konfiguracija.php'; 
//štićenje
sticenjeStranice($appLink);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../predlozak/head.php'; ?>
    <style>
    .highcharts-figure, .highcharts-data-table table {
    min-width: 360px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

    </style>
</head>
<body>

    <div class="grid-container">
        <?php require_once '../predlozak/izbornik.php'; ?>
        <div class="callout pocetna">
        <figure class="highcharts-figure">
    <div id="container"></div>

</figure>
        </div>
        <?php require_once '../predlozak/podnozje.php'; ?>
    </div>
    
    
    <?php require_once '../predlozak/javascript.php'; ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
Highcharts.chart('container', {

title: {
    text: 'Prmjer grafa'
},

subtitle: {
    text: 'Izvor: Session :)'
},

yAxis: {
    title: {
        text: 'Cijene'
    }
},

xAxis: {
    accessibility: {
        rangeDescription: 'Range: 2010 to 2017'
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: 2010
    }
},

series: [{
    name: 'Cijena',
    data: [<?php 
    foreach($_SESSION['smjerovi'] as $smjer){
        echo $smjer->cijena, ',';
    }
    
    ?>]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>
</body>
</html>