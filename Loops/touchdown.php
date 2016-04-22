<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Touchdown!</title>
    </head>
    <body>
        <p>
        <?php
            $yardlines = array("The 50... ", "the 40... ", "the 30... ", "the 20... ", "the 10... ");
            foreach ($yardlines as $yardline) {
                echo $yardline;
            }
            echo "Touchdown!";
         ?>
        </p>
    </body>
</html>
