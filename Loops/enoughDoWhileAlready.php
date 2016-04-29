<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Yet Another Do/While Loop Exercise</title>
    </head>
    <body>
        <p>
        <?php
        $iteration = 0;
        do {
            $iteration++;
            echo "<p>This is part of a do/while loop.</p>";
        } while ($iteration < 10);
            echo "<p>The do/while loops must come to an end.</p>";
         ?>
        </p>
    </body>
</html>
