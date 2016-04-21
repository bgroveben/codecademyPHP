<!DOCTYPE html>
<html>
    <head>
        <title>Switch Statement</title>
    </head>
    <body>
        <p>Switch Statement the first:
        <br />
        <?php
        switch (1) {
            case 0:
                echo 'The value is 0';
                break;
            case 1:
                echo 'The value is 1';
                break;
            case 2:
                echo 'The value is 2';
                break;
            default:
                echo 'The value is not 0, 1, or 2';
        }
         ?>
        </p>
        <p>Switch Statement the second:
        <br />
        <?php
        $myNum = 2;
        switch($myNum) {
            case 1:
                echo "1";
                break;
            case 2:
                echo "2";
                break;
            case 3:
                echo "3";
                break;
            default:
                echo "None of the above";
        }
         ?>
        </p>
        <p>Switch Statement the third:
        <br />
        <?php
        $fruit = "Jabuticaba";
        switch ($fruit) {
            case 'Apple':
                echo "Yummy.";
                break;
            case 'Orange':
                echo "Tangy.";
                break;
            case 'Jabuticaba':
                echo "What's a jabuticaba?";
                break;
            default:
                echo "No fruit for you.";
        }
         ?>
        </p>
    </body>
</html>
