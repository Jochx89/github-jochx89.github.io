<!-- Header -->
  <header id="header">
    <a href="index.html" class="logo"><strong><?php echo $name  ?></strong> <?php echo $title  ?></a>
    <ul class="icons">
<?php foreach ($networks as $network) : ?>
    <li>
      <a href="<?php echo $$network['href'];  ?>" class="icon fa- <?php  echo  $$network['icon']; ?>"><span class="label"><?php  echo  $$network['title']; ?></span>
      </a>
    </li>
<?php endforeach; ?>
    </ul>
  </header>
