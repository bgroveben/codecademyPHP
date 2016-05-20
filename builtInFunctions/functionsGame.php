<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title></title>
    </head>
    <body>
        <p>
        <?php
        // Create an array and push on the names
        // of your closest family and friends
        $friends = array();
        array_push($friends, "Amy");
        array_push($friends, "Bill");
        array_push($friends, "Carla");
        array_push($friends, "Dave");
        array_push($friends, "Erica");
        array_push($friends, "Fred");
    	// Sort the list
    	sort($friends);
        // Randomly select a winner!
        $result = count($friends);
        $winner = rand(0, ($result - 1));
        // Print the winner's name in ALL CAPS
        print strtoupper($friends[$winner]);
        ?>
        </p>
    </body>
</html>
