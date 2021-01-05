<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phpsnack3</title>
    <?php
      function splitter($str) {
        $splitted = explode('.', $str);
        return $splitted;
      }
      $phrase = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aliquid tempore dignissimos non animi explicabo suscipit, eaque cupiditate quam error minus possimus ipsam rem veniam pariatur quas, dolorum inventore placeat.";
      $splitted = splitter($phrase);
    ?>
  </head>
  <body>

    <?php

      var_dump($splitted);

      foreach ($splitted as $p) {
        // funct empty mi da valore bool, in questo caso diversa da true xke empty($p) mi darebbe true essendo l'ultima stringa vuota dopo l'ultimo punto nel lorem, csi non stampo una stringa vuota.
        if (!empty($p)) {
          echo "<p>" . $p . "</p>";
        }
      }

    ?>

  </body>
</html>
