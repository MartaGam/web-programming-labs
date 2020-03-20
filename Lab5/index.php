<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Lab5</title>
</head>
<body>

<?php
//Classes description
class Movie
{
	public $Title;
	public $Description;
	public $Genres = array();
	public $ImageUrl;

	function Movie($title, $description, $genres, $imageUrl)
	{
		$this->Title = $title;
		$this->Description = $description;
		$this->Genres = $genres;
		$this->ImageUrl = $imageUrl;
	}

	function destroy()
	{
	
	}

	function GetGenres($separator)
	{
		$result = '';
		for ($i = 0; $i < Count($this->Genres); $i++)
		{
			$result = $result.$separator.$this->Genres[$i];
		}

		return substr($result, strlen($separator));
	}

	function AddGenre($genre)
	{
		array_push($genres, genre);
	}
}

class MoviesManager
{
	public $Movies = array();

	function AddMovie($movie)
	{
		array_push($this->Movies, $movie);
	}

	function SearchMovies($query)
	{
		$resultArray = array();

		for ($i = 0; $i < Count($this->Movies); $i++)
		{
			$isMatch = strpos($this->Movies[$i]->Title, $query);

			if($isMatch === false)
			{
				for ($j = 0; $j< Count($this->Movies[$i]->Genres); $j++)
				{
					if(strpos($this->Movies[$i]->Genres[$j], $query)===false)
					{
						continue;
					}else{
						$isMatch = true;
						break;
					}
				}
			}

			if($isMatch === false)
			{
				continue;
			}

			array_push($resultArray, $this->Movies[$i]);
		}

		return $resultArray;
	}
}

?>


<?php
$moviesManager = new MoviesManager();

$movie1 = new Movie(
	'Edge of Tomorrow',
	'This movie is about Tom Cruise saving the World from aliens. So it is a great movie need to be seen!',
	array('Action', 'Adventure'),
	'https://i.pinimg.com/originals/d9/85/5d/d9855da48014c166ba73213423eab185.jpg');

$movie2 = new Movie(
	'Greatest Showman',
	'Hue Jackman trying to sing like a God with some strange people around him',
	array('Music', 'History'),
	'https://images-na.ssl-images-amazon.com/images/I/91k5iUBRGUL._AC_SL1500_.jpg');

$movie3 = new Movie(
	'John Wick. Chapter 3: Parabellum',
	'Some bad people kill a dog of child of Belarus: Jardani Yovanovich. Hes name is John Wick. And he will find them',
	array('Action', 'Adult'),
	'https://image.tmdb.org/t/p//w780//ejODG5DtqCVJm85XVt2BOxMrHxF.jpg');

$movie4 = new Movie(
	'Jocker',
	'He is usualman who trying to be seen. But it not works and Jocker gets Oscar on 2020 year',
	array('Dramma', 'Comics'),
	'https://www.vintagemovieposters.co.uk/wp-content/uploads/2019/09/IMG_2911-482x728.jpeg');

$movie5 = new Movie(
	'Spider-Man: Far from home',
	'Hom Holland trying to defeat Jake Jillenholl as Misterio. Cool movie just see it.',
	array('Action', 'Adventure', 'Marvel', 'Comedy'),
	'https://www.joblo.com/assets/images/joblo/posters/2019/08/1vso0vrm42j31.jpg');

$movie6 = new Movie(
	'Fullmetall Alchemist',
	'Edward Elrick trying to find filosofer stone to return body of his brother and something like this',
	array('Anime', 'Adventure', 'Sience'),
	'https://i.ebayimg.com/images/g/h0UAAOSw2xRYmGX7/s-l300.png');

$moviesManager->AddMovie($movie1);
$moviesManager->AddMovie($movie2);
$moviesManager->AddMovie($movie3);
$moviesManager->AddMovie($movie4);
$moviesManager->AddMovie($movie5);
$moviesManager->AddMovie($movie6);
?>

<?php

//Search by Title or Genre
$searchQuery = 'John';
$filteredMovies = $moviesManager->SearchMovies($searchQuery);
?>


<?php
for ($i = 0; $i < Count($filteredMovies); $i++)
{
echo '<div class="item-div">
<img class="poster-image" src="'.$filteredMovies[$i]->ImageUrl.'" width="60px" height="100px"/>
<div class="movie-info">
<div class="title-div">'.$filteredMovies[$i]->Title.'</div>
<div class="genres-div">'.$filteredMovies[$i]->GetGenres(', ').'</div>
<div class="description-div">'.$filteredMovies[$i]->Description.'</div>
</div>
</div>';
}


?>
<style>
.item-div{
	position: relative;
	width:100%;
	height:120px;
}
.poster-image{
	float:left;
}
.movie-info{
margin:0 0 0 12px;
	float:left;
}
.title-div{
	font-size:24px;
}
.genres-div{
	color: #8A8A8A;
	font-size:14px;
}
.description-div{
	font-size:14px;
	max-width:200px;
}
</style>
<body>
</html>