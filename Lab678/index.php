<h1>List of elements:</h1>

<?php
$host = 'localhost'; // адрес сервера 
$database = 'movies_db'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'зфыыцщкв'; // пароль

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="SELECT * FROM new_movies";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_num_rows($result); // количество полученных строк
?>

<?php

    for ($i = 0 ; $i < $rows ; ++$i)
    {
    	$row = mysqli_fetch_row($result);
    	echo '<div class="movie-item">
<img src="'.$row[2].'" class="poster-image"/>
<div class="content-div">
<div class="title-div">'.$row[1].' (Id = '.$row[0].')</div><br />
<div class="year-div">'.$row[4].'</div>
<div class="description-div">'.$row[3].'</div>
</div>
    	</div><br />
    	';
        /*$row = mysqli_fetch_row($result);
            for ($j = 0 ; $j < 4 ; ++$j) echo "$row[$j]<br />";*/
    }

mysqli_close($link);

?>



<h1>Add element</h1>
<form method="POST" action="add.php">
Title: <br />
<input type="text" name="title" class="input-field"/><br />
Description: <br />
<input type="text" name="description" class="input-field"/><br />
Image Url: <br />
<input type="text" name="imageUrl" class="input-field"/><br />
Year: <br />
<input type="text" name="year" class="input-field"/><br /><br />
<input type="submit" name="nw_update" value="Add" class="input-submit-add"/>
</form>

<h1>Delete element</h1>
<form method="POST" action="delete.php">
Id: <br />
<input type="text" name="id" class="input-field"/><br /><br />
<input type="submit" name="nw_update" value="Remove" class="input-submit-delete"/>
</form>

<h1>Update element</h1>
<form method="POST" action="update.php">
Id: <br />
<input type="text" name="id" class="input-field"/><br /><br />
Title: <br />
<input type="text" name="title" class="input-field"/><br /><br />
Description: <br />
<input type="text" name="description" class="input-field"/><br /><br />
Image url: <br />
<input type="text" name="imageUrl" class="input-field"/><br /><br />
Year: <br />
<input type="text" name="year" class="input-field"/><br /><br />
<input type="submit" name="nw_update" value="Update" class="input-submit-update"/>
</form>


<style>
	.input-submit-add{
		width:120px;
		color:white;
		background: #36AA36;
		height:40px;
		border: none;
		border-radius: 4px;
	}
	.input-submit-delete{
		width:120px;
		color:white;
		background: #AA3636;
		height:40px;
		border: none;
		border-radius: 4px;
	}
	.input-submit-update{
		width:120px;
		color:white;
		background: #36AAAA;
		height:40px;
		border: none;
		border-radius: 4px;
	}
	.input-field{
		height:40px;
		width:240px;
		font-size:24px;
		border-radius: 4px;
		border: solid 1px #363636;
	}
	.title-div{
		font-size:24px;
	}
	.content-div{
		float:left;
		margin:0 0 0 20px;
		max-width: 240px;
	}
	.movie-item{
		width:100%;
		float:left;
		height: 180px;
		padding: 20px;
	}
	.poster-image{
		width:100px;
		height:160px;
		float:left;
	}
	.year-div{
		color: #666666;
	}
	.description-div{
		font-size:16px;
	}
	</style>