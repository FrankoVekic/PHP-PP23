<ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
  <li><a href="<?php echo $putanjaAplikacije; ?>index.php"><?php echo $naslovAplikacije; ?></a></li>
  <?php if(isset($_SESSION['autoriziran'])): ?>
    <li>
      <a href="#">Programi</a>
      <ul class="vertical menu">
        <li><a href="<?php echo $putanjaAplikacije; ?>privatno/smjerovi">Smjerovi</a></li>
        <li><a href="#">Operateri</a></li>
      </ul>
    </li>
    <li>
      <a href="<?php echo $putanjaAplikacije; ?>odjava.php">Odjava</a>
    </li>
  <?php endif;?>
</ul>