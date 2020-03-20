<html>
<head>
</head>



<?php

$host = 'localhost'; // адрес сервера 
$database = 'movies_db'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'зфыыцщкв'; // пароль

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="INSERT INTO new_movies (Title, Description, ImageUrl, Year) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".$_POST['imageUrl']."', ".$_POST['year'].");";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

//$rows = mysqli_num_rows($result); // количество полученных строк


?>
<h1>Success!</h1>
<form method="GET" action="index.php">
<input type="submit" name="nw_update" value="Go Back"/>
    </form>
</html>