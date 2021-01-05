<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack6</title>
    <style>

      body {
        width: 100vw;
        height: 100vh;
        background: purple;
        color: white;
        /* display: flex; */
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }
      .grey {
        background-color: grey;
        width: 300px;
      }
      .green {
        background-color: green;
        width: 300px;
      }

    </style>
  </head>

  <?php
    /* stampa l'array mettendo gli insegnanti in un rettangolo grigio e i PM
    in un rettangolo verde */
  ?>
  <?php
    $db = [
      'teachers' => [
          [
              'name' => 'Michele',
              'lastname' => 'Papagni'
          ],
          [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
          ]
      ],
      'pm' => [
          [
              'name' => 'Roberto',
              'lastname' => 'Marazzini'
          ],
          [
              'name' => 'Federico',
              'lastname' => 'Pellegrini'
          ]
      ]
    ];
  ?>
  <body>

    <?php

      foreach ($db as $key => $subjects) {
        if ($key == 'teachers') {
          ?>
            <div class="grey">

              <?php
              foreach ($subjects as $subject) {
                echo "<h1>" . $subject['name'] . " " . $subject['lastname'] . "</h1>";
              }
              ?>

            </div>
          <?php
        } else {
          ?>
            <div class="green">

              <?php
              foreach ($subjects as $subject) {
                echo "<h1>" . $subject['name'] . " " . $subject['lastname'] . "</h1>";
              }
              ?>

            </div>
          <?php
        }
      }

    ?>



  </body>
</html>
