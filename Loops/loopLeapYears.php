<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Loop Leap Years</title>
    </head>
    <body>
        <?php
            for ($leap = 2004; $leap < 2050; $leap += 4) {
                echo "<p>$leap</p>";
            }
         ?>
    </body>
</html>
