<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Lab4</title>
</head>
<body>
<?php 
$_POST['array_of_strings'];
?>

<h2>Заполните любые понравившиеся поля:</h2>
<form action="result.php" method="post">
<?php

//Можно использовать любое число
$fields_count = 10;

for ($i = 0; $i < $fields_count; $i++) {
    echo 'Имя персонажа '.($i + 1).':<br /><input name="array_of_strings['.$i.']"  type="text" name="name" /><br /><br />';
}
?>


<br />
<br />
    <input type="submit" class="submit-input" name="submit" value="Подтвердить" />
</form>
<body>
</html>