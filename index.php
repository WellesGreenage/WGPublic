<?php
error_reporting(E_ALL);
set_error_handler('myHandler');
function myHandler($code, $msg, $file, $line)
{
    ob_end_clean();
    echo '<br>';
    echo implode('<br>', [$code, $msg, "$file:$line"]);
    die();
}
ob_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Hello World!</title>
    <meta charset="utf-8">
    <link rel="schortcut icon" href="/images/favicon.png" type="image/png"/>
</head>

<body>
<?php
echo '</br>';

$b = []; #Генератор массива
$t = 0;
for ($y = 0; $y < 6; $y++) {
    $t = $t +2;
    $b[] = $t;
}
$w = (count($b) - 1); #Вывод массива в обратном порядке
for ($q = (count($b) + 1); $q > $b[0]; $q--) {
    $w--;
    echo ($b[$w]);
    echo '</br>';
}

?>

</body>
</html>


<?php
ob_end_flush();
