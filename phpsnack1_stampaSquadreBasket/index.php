<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phpSnack1</title>
    <!-- PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i
    quali rappresentano delle partite di basket di
    un’ipotetica tappa del calendario. Ogni array della
    partita avrà una squadra di casa e una squadra
    ospite, punti fatti dalla squadra di casa e punti fatti
    dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo
    schema:
    Olimpia Milano - Cantù | 55-60 -->

    <?php
    // struttura dati
    $matches=[
      "match1" => [
        "home" => "Olimpia Milano",
        "visiting" => "Cantù",
        "homeP" => "55",
        "visP" => "60"
      ],
      "match2" => [
        "home" => "Brindisi",
        "visiting" => "Virtus Bologna",
        "homeP" => "14",
        "visP" => "62"
      ],
      "match3" => [
        "home" => "Reggiana",
        "visiting" => "Trento",
        "homeP" => "75",
        "visP" => "60"
      ],
      "match4" => [
        "home" => "Brescia",
        "visiting" => "Dinamo Sassari",
        "homeP" => "15",
        "visP" => "15"
      ],
    ];
     ?>
  </head>
  <body>

    <div>

      <?php
      echo $matches["match1"]["home"] . " " . $matches["match1"]["visiting"] . " | " . $matches["match1"]["homeP"] . "-" . $matches["match1"]["visP"];
      ?>

      <?php
      foreach ($matches as $key => $match) {
        ?>
        <h1>
          <?php echo $match["home"] . " - " . $match["visiting"] . " | " . $match["homeP"] . "-" . $match["visP"];?>
        </h1>
        <?php
      }
      ?>

    </div>

  </body>
</html>
