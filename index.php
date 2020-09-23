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
$a = [1, 22, 3, 4, 5];
$u = -1;
for ($i = $a[0]; $i < (count($a) + 1); $i++) {
    $u++;
    echo($a[$u]);
}
//var_dump($_POST);
?>

</body>
</html>


<?php
ob_end_flush();
