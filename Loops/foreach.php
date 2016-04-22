<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Loops + Arrays = ForEach</title>
    </head>
    <body>
        <h1>Languages you can learn on Codecademy</h1>
        <div class="wrapper">
            <ul>
            <?php
                $languages = array("JavaScript", "HTML/CSS", "PHP", "Python", "Ruby");
                foreach ($languages as $language) {
                    echo "<li>$language</li>";
                }
                unset($language);
             ?>
             </ul>
         </div>
    </body>
</html>
