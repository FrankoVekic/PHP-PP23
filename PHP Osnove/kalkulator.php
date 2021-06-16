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
      // proučiti include, include_once i require
      require_once 'izbornik.php';
      ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell" >    

        <?php

            if(isset($_GET['prviBroj'])&& isset($_GET['drugiBroj'])){
                $rezultat=(int)$_GET['prviBroj'] + (int)$_GET['drugiBroj'];
            }    
            else{
                $rezultat='';
            }
            echo $rezultat;
        ?>

          <form action="" method="get">
          <label for="prviBroj">Prvi broj</label>
          <input type="text" name="prviBroj" id="prviBroj">
          <label for="prviBroj">Drugi broj</label>
          <input type="text" name="drugiBroj" id="drugiBroj">

          <input type="submit" value="Izračunaj">



        </div>
      </div>
    </div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
