<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
          body {
              width: 100vw;
              height: 100vh;
              background: purple;
              color: white;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
          }
          .red {
              background-color: red;
          }
          .green {
              background-color: green;
          }
      </style>
      <?php
          $name = $_GET['name'];
          $mail = $_GET['mail'];
          $age = $_GET['age'];
          // check se i valori inseriti sono validi
          $isValidMail = strpos($mail, '.') !== false
                          && strpos($mail, '@') !== false;
          $isValidName = strlen($name) > 3;
          $isValidAge = is_numeric($age);
      ?>
  </head>
  <body>
      <h1>
          <?php
              if ($isValidMail
                  && $isValidName
                  && $isValidAge) {
                  echo 'Accesso Riuscito';
              } else {
                  echo 'Accesso Negato';
              }
          ?>
      </h1>
  </body>
</html>
