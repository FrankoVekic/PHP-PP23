
//U izbornik postaviti poziv stranice zadatak3.php?b1=2&b2=6
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php 
    include_once 'head.php';
    ?>
  </head>
<body>

    <div class="grid-container">
      <?php 
      require_once 'izbornik.php';
      ?>
      <div class="grid-x grid-padding-x">
        <div class="large-8 cell" >
          <H1>GET parametri</H1>
          <pre>
          KASNIJE
          </pre>
        </div>
        <div class="large-4 cell">
          <?php 
           
           $x = $_GET["b1"];
           $y = $_GET["b2"];

           if($x < $y){
               echo $y;
           }
           else if($x === $y) {
               echo 'Jednaki su';
           }
           else{
               echo $x;
           }

      
          ?>
        </div>
      </div>
    </div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
