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
        echo "<br>";
        for ($i = 1; $i <= 5; $i++) {
            echo $i;
        }
        echo "<br>";
        ?>
        <?php
        for ($i = 1; $i <= 11; $i++) {
            echo "<td>1</td>";
        }
        ?>
        <table>
        <?php
        $r = 110;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($k = 1; $k <= 11; $k++) {
                echo "<td>$r</td>";
                $r--;
            }
            echo "</tr>";
        }

        ?>
        </table>
        <?php
        echo $r;
        ?>

        <table>
            <tr>
                <td>...</td>
            </tr>
        </table>
    </body>

</html>
