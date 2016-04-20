<html>
  <head>
    <title>If-Else statements</title>
  </head>
  <body>
    <p>
      <?php
        $items = 3;
        if($items > 5) {
            echo "You get a 10% discount!";
        } else {
            echo "You get a 5% discount!";
        }
      ?>
    </p>
    <p>
      <?php
        $value = "false";
        if($value == "true") {
            echo "The condition is true";
        } else {
            echo "The condition is false";
        }
      ?>
    </p>
  </body>
</html>
