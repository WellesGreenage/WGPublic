<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Hello World!</title>
    <meta charset="utf-8">
    <link rel="schortcut icon" href="/images/favicon.png" type="image/png"/>
</head>

<body>
<?php
    echo 'Hello, world! I like java!</br></br></br></br>';
?>
<?php
echo '<form method="post">';
echo '<input type="text" name="width" placeholder="Enter width"></br>';
echo '<input type="text" name="height" placeholder="Enter height"></br>';
echo '<button>Output</button></br></br>';
echo '</form>';
if (isset($_POST)) {
    echo '<table>';
    $r = 1;
    for ($i = 1; $i <= $_POST['width']; $i++) {
        echo "<tr>";
        for ($k = 1; $k <= $_POST['height']; $k++) {
            echo "<td>$r</td>";
            $r++;
        }
        echo "</tr>";
    }
    echo '</table>';
}
if (empty($_POST['width']) or empty($_POST['height'])) {
    exit ("Enter 2 number");
}
    echo '</br>';
echo 'You entered the width:';
echo $_POST['width'];
    echo '</br>';
echo 'You entered the height:';
echo $_POST['height'];
?>
</body>
</html>
