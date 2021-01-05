<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NumeriRandom</title>
    <?php
      /* creare un array con 15 numeri random,
      tenendo conto che l'array non dovrà contenere
      lo stesso numero più volte */
    ?>
  </head>
  <body>

    <h1>
      <?php
      $array = [];
      $min = 1;
      $max = 100;
      for ($i=0; $i < 15; $i++) {
        $numeroRandom = rand($min, $max);
        if (!in_array($numeroRandom, $array)) {
          $array[] = $numeroRandom;
        } else {
          $i--;
        }
      }
      print_r($array);
      ?>
    </h1>

    <h1>
      <?php
      // var_dump($array);
      ?>
    </h1>


  </body>
</html>
