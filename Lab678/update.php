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
$query ="UPDATE new_movies SET Title = '".$_POST['title']."', Description = '".$_POST['description']."', ImageUrl = '".$_POST['imageUrl']."', Year = ".$_POST['year']." WHERE Id = ".$_POST['id'].";";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

//$rows = mysqli_num_rows($result); // количество полученных строк


?>
<h1>Success!</h1>
<form method="GET" action="index.php">
<input type="submit" name="nw_update" value="Back"/>
    </form>
</html>