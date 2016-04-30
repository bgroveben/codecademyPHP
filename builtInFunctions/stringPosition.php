<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>String Position</title>
    </head>
    <body>
        <p>
        <?php
        print strpos("Benjamin", "e");
        print strpos("Benjamin", "jamin");
        print strpos("BbubbaBobob", "b");
         ?>
        </p>
        <p>
        <?php
        if (strpos("Benjamin", "z") === false) {
                print "Ain't no 'z'.";
        }
         ?>
        </p>
    </body>
</html>
