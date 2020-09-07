<!DOCTYPE html>
<html>

    <head>
        <title>V2.3</title>
    </head>

    <body>
        <?php
            echo 'Hello, world! I like java! Today is: ';
        ?>
        <?php
            date_default_timezone_set('Russia/Barnaul');
            echo date("D F G");
        ?>
    </body>

</html>