<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>My First PHP While Loop!</title>
    </head>
    <body>
        <p>
        <?php
        $loopCond = true;
        while ($loopCond == true) {
            echo "<p>The loop is running.</p>";
            $loopCond = false; // Don't forget this, lest an INFINITE LOOP occur! (Yeah, I yelled at you.)
        }
        echo "<p>And now it's done.</p>"
         ?>
        </p>
    </body>
</html>
