<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phpsnack2</title>
    <?php
      $posts = [

          '10/01/2019' => [
              [
                  'title' => 'Post 1',
                  'author' => 'Michele Papagni',
                  'text' => 'Testo post 1'
              ],
              [
                  'title' => 'Post 2',
                  'author' => 'Michele Papagni',
                  'text' => 'Testo post 2'
              ],
          ],
          '10/02/2019' => [
              [
                  'title' => 'Post 3',
                  'author' => 'Michele Papagni',
                  'text' => 'Testo post 3'
              ]
          ],
          '15/05/2019' => [
              [
                  'title' => 'Post 4',
                  'author' => 'Michele Papagni',
                  'text' => 'Testo post 4'
              ],
              [
                  'title' => 'Post 5',
                  'author' => 'Michele Papagni',
                  'text' => 'Testo post 5'
              ],
              [
                  'title' => 'Post 6',
                  'author' => 'Michele Papagni',
                  'text' => 'Testo post 6'
              ]
          ],
      ];
    ?>
  </head>
  <body>

    <div>

      <?php

        foreach ($posts as $key => $post) {
          ?>
          <h1>
            <!-- la key è la data -->
            <?php echo $key;?>
          </h1>  <br>
          <?php
          foreach ($post as $data) {
            ?>
              <h2>  <?php echo $data['title'];?> </h2>
              <span>  <?php echo $data['text'];?> </span> <br>
              <small> <?php echo $data['author'];?> </small> <br>
            <?php
          }
        }



      ?>

    </div>


  </body>
</html>
