<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>While Loop Countdown</title>
    </head>
    <body>
        <p>
        <?php
        $count = 10;
        while ($count > 0) {
            echo "<p>$count</p>";
            $count--;
        }
        echo "<p>Blast Off!</p>"
         ?>
        </p>
    </body>
</html>
