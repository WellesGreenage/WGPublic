<!DOCTYPE html>
<html lang="ru">

    <head>
        <title>V2.4</title>
        <meta charset="utf-8">
        <link rel="schortcut icon" href="/images/favicon.png" type="image/png"/>
    </head>

    <body>
        <?php
            echo 'Hello, world! I like java! Today is: ';
        ?>
        <?php
        date_default_timezone_set('Asia/Novosibirsk');
        echo date("D, j F Y, G:i");
        echo "<H1>qwerty</H1>";
        $a = 1;
        echo $a;
        echo "<br>";
        for ($i = 1; $i <= 5; $i++) {
            echo $i;
        }
        ?>
        <table>
            <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
            </tr>
            <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
            </tr>
        </table>
    </body>

</html>
