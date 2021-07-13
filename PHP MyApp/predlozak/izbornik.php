<ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
  <li><a href="<?php echo $appLink; ?>index.php"><?php echo $appName; ?></a></li>
  <?php if(isset($_SESSION['autoriziran'])): ?>
    <li>
      <a href="#">Programi</a>
      <ul class="vertical menu">
        <li><a href="<?php echo $appLink; ?>privatno/smjerovi">Smjerovi</a></li>
        <li><a href="#">Operateri</a></li>
      </ul>
    </li>
    <li>
      <a href="<?php echo $appLink; ?>odjava.php">Odjava</a>
    </li>
  <?php endif;?>
</ul>