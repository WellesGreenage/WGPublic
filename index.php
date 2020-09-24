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
echo '
<form method="post">
<input type="text" name="form" placeholder="Enter the string">
<button>PUSH</button>
</form>';
if (empty($_POST['form'])) {
    exit('Enter the string!');
} else {
    echo strrev($_POST['form']);
}
?>
</body>
</html>


<?php
ob_end_flush();
