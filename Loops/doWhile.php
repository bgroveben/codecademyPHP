<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Coin Flips with Do/While</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    <body>
        <p>The coin will be flipped as long as the result is heads.</p>
        <p>
        <?php
        $flipCount = 0;
        do {
            $flip = rand(0,1);
            $flipCount++;
            if($flip) {
                echo "<div class=\"coin\">H</div>";
            } else {
                echo "<div class=\"coin\">T</div>";
            }
        } while($flip);
        $verb = "were";
        $last = "flips";
        if ($flipCount == 1) {
            $verb = "was";
            $last = "flip";
        }
        echo "<p>There {$verb} {$flipCount} {$last}!</p>"
         ?>
        </p>
    </body>
</html>
