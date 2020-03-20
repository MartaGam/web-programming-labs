<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Witcher</title>
</head>
<body>
<?php
if(empty($_REQUEST['name']))
{
	header("Location:error.php");
}
?>
<div class="root-div">
<img src="Images/<?php echo $_FILES["avatar"]["name"] ?>" width="120px" height="120px" class="avatar-image">
<br />
<center>
<h3>Здравствуйте, <?php echo $_REQUEST['name'];?> <?php echo $_REQUEST['surname'];?><br />(<?php echo $_REQUEST['username'];?>)</h3>
<p>
<br />
<br />
Спасибо за регистрацию на этом совершенно неподозрительном портале!
</p>
</center>
<p>
Ваш пол: <?php echo $_REQUEST['gender'];?><br />
E-mail: <?php echo $_REQUEST['email'];?><br />
</p>
<a href="index.php">Спасибо, все понятно</a>
</div>


<style>
a{
color: #4848BE;
	text-decoration: none;
	float:right;
}
a:visited{
color: #4848BE;
}
body{
	font-family: calibri;
}
.avatar-image{
	border-radius: 50%;
	margin: 0 0 0 190px;
	border: solid 2px #8B8B8B;
}
.root-div{
	margin: auto;
	padding: 20px 20px 40px 20px;
  width: 500px;
  background-color: #EAEAEA;
}
</style>
</body>
<html>