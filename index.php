<?php
require_once __DIR__ . '/objects_array/db.php';
require_once __DIR__ . '/models/production.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Document</title>
</head>

<body>
  <ul>
    <?php foreach ($avengers_films as $movie): ?>
    <li>
      <strong>Titolo:</strong> <?= $movie->title ?>
      <ul>
        <li>
          <strong>Genere:</strong> <?=$movie->genre->type   ?>
        </li>
        <li>
          <strong>Durata:</strong> <?= $movie->duration  ?>
        </li>
        <li>
          <strong>Lingua:</strong> <?= $movie->language ?>
        </li>
      </ul>
    </li>
    <?php endforeach; ?>
  </ul>

  <hr>

  <ul>
    <?php foreach ($marvel_series as $serie): ?>
    <li>
      <strong>Titolo: </strong><?= $serie->title ?>
      <ul>
        <li>
          <strong>Anno di messa in onda del primo episodio:</strong> <?=$serie->aired_from_year   ?>
        </li>
        <li>
          <strong>Anno di messa in onda dell'ultimo episodio:</strong> <?= $serie->aired_to_year  ?>
        </li>
        <li>
          <strong>Numero di episodi:</strong> <?= $serie->number_of_episodes ?>
        </li>
        <li>
          <strong>Numero di stagioni:</strong> <?= $serie->number_of_stagioni ?>
        </li>
      </ul>

    </li>
    <?php endforeach; ?>
  </ul>

  <hr>

  <ul>
    <?php foreach ($avengers_films as $movie): ?>
    <li>
      <?= $movie->getDetails() ?>
    </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>