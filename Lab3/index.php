<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Witcher</title>
</head>
<body>

<h2>Задание 1: Найти текст, заключенный в &lt;p&gt;...&lt;/p&gt; и вывести его.</h2>
<?php
$homepage = file_get_contents('content.php');
//$homepage_html = str_replace('>', '&gt;', str_replace('<','&lt;', $homepage));

$start_p = strpos($homepage, '<p>') + 3;
$end_p = strpos($homepage, '</p>');

$text_inside_p = substr($homepage, $start_p + 2, $end_p - $start_p - 2);

echo $text_inside_p;
?>

<br/><br/><br/>

<h2>Задание 2. Подсчитаем количество слов <b>content</b> вне зависимости от регистра</h2>
В общем, было найдено
<?php $temp_homepage = str_replace('content', '', strtolower($text_inside_p), $count);
echo $count;?> слова 'content';

<br/><br/><br/>

<h2>Задание 3. Выведем содержимое внутри тега  &lt;p&gt;...&lt;/p&gt; без тегов.</h2>

<?php $text_without_tags = strip_tags($text_inside_p);
echo $text_without_tags;
?>
</body>
</html>