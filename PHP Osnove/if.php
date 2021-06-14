
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
          <H1>IF</H1>
          <pre>
          KASNIJE
          </pre>
        </div>
        <div class="large-4 cell">
          <?php 
           
           $x = $_GET['broj'];

           echo gettype($x),'<br />';
           
           // if je binarno grananje, ima dvije grane
           // if radi s boolean tipom podatka
           
           // == koji provjerava samo po vrijednosti
           // === provjerava po tipu i po vrijednosti
           $uvjet = $x=='2';
           
           echo gettype($uvjet), ' &gt;'. $uvjet, '&lt;<br />';
           
           $uvjet = $x===2;
           
           echo gettype($uvjet), ' &gt;'. $uvjet, '&lt;<br />';

           
          

      
          ?>
        </div>
      </div>
    </div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
