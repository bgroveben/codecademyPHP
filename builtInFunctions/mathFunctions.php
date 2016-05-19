<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>Math Functions</title>
    </head>
    <body>
        <p>
        <?php
        // Round a floating point number (pi in this case) to an integer and print it to the screen
        $round = round(M_PI);
        print $round;
         ?>
        </p>
        <p>
        <?php
        // Now round pi to 3 decimal places and print it to the screen
        $round_decimal = round(M_PI, 3);
        print $round_decimal;
         ?>
        </p>
        <p>
        <?php
        // Use rand() to print a random number to the screen
        print rand();
        ?>
        </p>
        <p>
        <?php
        // Use your knowledge of strlen(), substr(), and rand() to
        // print a random character from your name to the screen.
        $name = "Johannes";
        $length = strlen($name);
        $random = rand(0, ($length - 1));
        print substr($name, $random, 1);
        ?>
        </p>
    </body>
</html>