<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Much A-Do-While</title>
    </head>
    <body>
        <p>
        <?php
        $loopCondition = false;
        do {
            echo "<p>The loop ran even though the loop condition is false.</p>";
        } while ($loopCondition);
            echo "<p>Now the loop is done running.</p>";
         ?>
        </p>
    </body>
</html>
