<?php
require_once __DIR__ . '/objects_array/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php foreach ($avengers_films as $movie): ?>
    <li>
      <strong> <?= $movie->title ?> </strong>
      <ul>
        <li>
          <?=$movie->genre->type   ?>
        </li>
        <li>
          <?= $movie->duration  ?>
        </li>
        <li>
          <?= $movie->language ?>
        </li>
      </ul>

    </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>