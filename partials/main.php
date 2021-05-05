<main>
  <div class="container">
    <!-- singolo box album -->
    <?php foreach ($albums as $value) { ?>
      <div class="box_disc">
        <img src="<?php echo $value["poster"] ?>" alt="album">
        <h3><?php echo $value["title"] ?></h3>
        <div class="author"><?php echo $value["author"] ?></div>
        <div class="year"><?php echo $value["year"] ?></div>
      </div>
    <?php } ?>
    <!-- fine singolo box album -->
  </div>
</main>