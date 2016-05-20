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
    </body>
</html>
