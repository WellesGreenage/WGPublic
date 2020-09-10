<!DOCTYPE html>
<html lang="ru">

    <head>
        <title>Hello World!</title>
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
        echo "<H1>My First project</H1>";
        echo "<br>";
        echo "<br>";
        echo "Output of a 10x11 table with numbers:";
        ?>
        <table>
        <?php
        $r = 1;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($k = 1; $k <= 11; $k++) {
                echo "<td>$r</td>";
                $r++;
            }
            echo "</tr>";
        }

        ?>
        </table>
        <?php
        echo $r;
        echo "<br>";echo "<br>";
        echo '<form method="POST">';
        echo "Enter your name: ";
        echo '<input name = "name" />';echo "<br>";

        echo "Enter your surname: ";
        echo '<input name = "sname" />';echo "<br>";

        echo "Enter yor Father Name: ";
        echo '<input name = "fname" />';echo "<br>";

        echo '<button>Output</button>';
        echo '</form>';
        var_dump($_POST);
        ?>


    </body>

</html>
