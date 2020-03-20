<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Lab 4</title>
</head>
<body>

<h2>Таблица с вашими данными:</h2>

<br /><br />Полученные данные:
<?php

//Функция, выводящая таблицы и все нужные данные
function echo_results($array, $url, $client, $ip)
{
echo '<table border="1">';
for ($i = 0; $i < count($array); $i++) {
if(!empty($array[$i]))
{
echo '<tr><td>'.$array[$i].'</td></tr>';
}
}
echo '</table><br /><br />';
echo '<table border="1">';
echo '<tr><td>Url метода</td><td>'.$url.'<br /></td></tr>';
echo '<tr><td>Данные браузера</td><td>'.$client.'<br /></td></tr>';
echo '<tr><td>IP адрес</td><td>'.$ip.'<br /></td></tr>';
echo '</table>';
}


$array = $_REQUEST['array_of_strings'];
$url = $_SERVER['REQUEST_URI'];
$client = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR']; // не работает на локальном сервере


//Использование этой функции
echo_results($array, $url, $client, $ip);
?>


<style>
td{
    height:40px;
    width:120px;
    border: solid 1px;
    font-size:24px;
}

tr{
    border: solid 1px;
}
</style>
</body>
<html>