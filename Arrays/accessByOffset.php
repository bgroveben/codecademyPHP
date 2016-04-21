<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Array Access by Offset</title>
    </head>
    <body>
        <?php
            $tens = array(10, 20, 30, 40, 50);
            echo $tens{2};
            echo "<br />";
            echo $tens[2]  // No semicolon here, but don't forget it on the previous two lines 
         ?>
    </body>
</html>
