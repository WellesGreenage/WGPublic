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

//var_dump($_POST);
?>

</body>
</html>


<?php
ob_end_flush();
