<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title></title>
    </head>
    <body>
        <?php
            $languages = array("Java", "JavaScript", "PHP", "Python", "Ruby");
            unset($languages[0]);
            foreach($languages as $language) {
                print "<p>$language</p>";
                echo "<p>$language</p>";
            }
         ?>
    </body>
</html>
