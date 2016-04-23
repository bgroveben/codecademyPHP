<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <title>Coin Flips with While Loops</title>
    </head>
    <body>
        <p>We are going to flip a coin until we get three heads in a row.</p>
        <p>
        <?php
        $headCount = 0;
        $flipCount = 0;
        while ($headCount < 3) {
            $flip = rand(0,1);
            $flipCount++;
            if ($flip) {
                $headCount++;
                echo "<div class=\"coin\">H</div>";
            } else {
                $headCount = 0;
                echo "<div class=\"coin\">T</div>";
            }
        }
        echo "<p>It took {$flipCount} flips!</p>";
         ?>
        </p>
    </body>
</html>
