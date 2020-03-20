<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Witcher</title>
</head>
<body>
<?php 
$_POST['name']; 
$_POST['surname'];
$_POST['username'];
$_POST['email'];
$_POST['gender'];?>
<div class="root-div">
<h2>Введите ваши данные:</h2>

<form action="feedback.php" enctype="multipart/form-data"   method="post">
    Имя (обязательно):  <br /><input id="name" onchange="validateFields()" type="text" name="name" /><br /><br />

    Фамилия:  <br /><input type="text" name="surname" /><br /><br />

    Никнейм:  <br /><input type="text" name="username" /><br /><br />

    Email: <br /><input type="text" name="email" /><br /><br />

    Ваш пол:<br />
    <select name="gender">
    <option value="Мужчина">Мужской</option>
    <option value="Женщина">Женский</option>
</select><br /><br />

<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
<input name="avatar" class="select-image" type="file" />
<br />
<br />
    <input type="submit" class="submit-input" name="submit" value="Подтвердить" id="submitbutton" />
</form>
</div>
</body>
<script type="text/javascript">
document.getElementById("submitbutton").disabled = true;

function validateFields() {
  var element = document.getElementById("submitbutton");
  var textblock = document.getElementById("name");
  if(textblock.value === "" || textblock.value == undefined)
  {
    element.disabled=true;
  }else
  {
      element.disabled=false;
  }
}
</script>
<style>
body{
    font-family:calibri;
}
.submit-input:disabled{
    background: #AEAEAE;
}
.submit-input{
    float:right;
    background: #4848BE;
    border:none;
    height:32px;
    color:white;
    cursor: pointer;
}
.select-image{
    font-size:12px;
    height:28px;
}
.root-div{
	margin: auto;
	padding: 20px 20px 40px 20px;
  width: 500px;
  background-color: #EAEAEA;
}
select{
    height:28px;
     width: 240px;
}
option{
    height:28px;
     width: 240px;
}

input{
    height:28px;
    width: 240px;
    font-size:18px;
}
</style>
</html>