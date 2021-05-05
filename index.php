<?php
  include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Vue dischi</title>
  </head>
  <body>
    <!-- intestazione -->
    <header>
      <img src="img/download.png" alt="Spotify logo">
    </header>
    <!-- fine intestazione -->
    <!-- corpo -->
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
    <!-- fine corpo -->
  </body>
</html>