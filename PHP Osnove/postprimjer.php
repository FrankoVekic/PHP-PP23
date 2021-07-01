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
          <form action="ugradeninizovi.php" method="post" enctype="multipart/form-data">
          <label for="ime"></label>
            <input type="text" name="ime" id="ime"/>

            <label for="broj"></label>
            <input type="number" name="broj" id="broj"/>

            <label for="datoteka1"></label>
            <input type="file" name="datoteka1" id="datoteka1"/>

            <label for="datoteka2"></label>
            <input type="file" name="datoteka2" id="datoteka2"/>

            <input type="submit" value="Pogledaj u novoj kartici">
          </form>
            

        </div>
      </div>
    </div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
