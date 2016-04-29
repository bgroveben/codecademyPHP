<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>String Functions</title>
    </head>
    <body>
        <p>
            <?php
            // Get a partial string from within your own name
            // and print it to the screen!
            print substr("Nebuchadnezzar", 4, 4);
            ?>
        </p>
        <p>
            <?php
            // Make your name upper case and print it to the screen:
            print strtoupper("nebuchadnezzar");
            ?>
            </p>
        <p>
            <?php
            // Make your name lower case and print it to the screen:
            print strtolower("NEBUCHADNEZZAR");
            ?>
        </p>
    </body>
</html>
