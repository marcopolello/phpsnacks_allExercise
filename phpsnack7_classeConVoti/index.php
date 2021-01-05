<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Classe</title>
    <style media="screen">
      body{
      background-color: blue;
      }
      h1{
        background-color: green;
        max-width: 300px;
        border: 1px solid black;
      }
      h3{
        background-color: yellow;
        max-width: 300px;
        border: 1px solid black;
      }
    </style>
    <?php
      /*Creare un array contenente qualche alunno di un'ipotetica classe.
      Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
      Stampare nome, cognome e la media dei voti di ogni alunno. */
    ?>

    <?php
     $classe = [
       'alunno1' => [
         'name' => "Marco",
         'surname' => "Polello",
         'voti' => [10, 8, 9, 7]
       ],
       'alunno2' => [
         'name' => "Davide",
         'surname' => "Feronato",
         'voti' => [8, 4, 8, 10]
       ],
       'alunno3' => [
         'name' => "John",
         'surname' => "Cognolato",
         'voti' => [6, 7, 7, 6]
       ],
       'alunno4' => [
         'name' => "Riccardo",
         'surname' => "De Gasperi",
         'voti' => [5, 4, 6, 8]
       ],
       'alunno5' => [
         'name' => "Lisa",
         'surname' => "Fattoretto",
         'voti' => [9, 10, 8, 10]
       ]
     ];
     ?>
  </head>
  <body>

    <div class="classe">

      <?php foreach ($classe as $alunno) {
        ?>
        <h1> <?php echo $alunno['name'] . " " . $alunno['surname']; ?> </h1>
        <h3> voti dell'alunno:
          <?php
          end($alunno['voti']);
          $lastelementKey = key($alunno['voti']);
          foreach ($alunno['voti'] as $k => $voto) {
            echo $voto;
          if ($k == $lastelementKey) {
            echo ".";
          } else{
            echo ",";
          }
          } ?>
        </h3>
        <?php
      } ?>

    </div>

  </body>
</html>
