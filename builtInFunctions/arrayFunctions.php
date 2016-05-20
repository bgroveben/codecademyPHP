<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title></title>
    </head>
    <body>
        <p>
        <?php
        // Create an array and push 5 elements on to it, then
        // print the number of elements in your array to the screen
        $programming_languages = array();
        array_push($programming_languages, "php");
        array_push($programming_languages, "javascript");
        array_push($programming_languages, "java");
        array_push($programming_languages, "python");
        array_push($programming_languages, "ruby");
        array_push($programming_languages, "scala");
        print count($programming_languages);
        ?>
        </p>
        <p>
    	<?php
    	// Create an array with several elements in it,
    	// then sort it and print the joined elements to the screen
        $the_array = array(3, 1, 4, 1, 5, 9);
        sort($the_array);
        print join(",", $the_array);
    	?>
    	</p>
    	<p>
    	<?php
    	// Reverse sort your array and print the joined elements to the screen
        rsort($the_array);
        print join(",", $the_array);
    	?>
    	</p>
    </body>
</html>
