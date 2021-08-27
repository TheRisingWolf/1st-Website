<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (isset($_SESSION['user'])){
if (! $_SESSION['admin'])
header('Location: adminavt.php');
};
?>
<!DOCTYPE html>
<html>
<head>
<title>Страница</title>
<meta charset="utf-8">
</head>
<body>




<form action="NewNA.php" method="post">
<p>Новые поступления (NA)</p>
<p>pagename:</p>
<input name="pagename">
<p>Название Книги:</p>
<input name="nameart">
<p>Краткое описание книги:</p>
<textarea name="text"></textarea>
<p>Дата публикации:</p>
<input name="date" type="date">
<input type="submit" value="Добавить Книгу">
</form>
<br>
<br>

<form action="DeliteNA.php" method="post">
<p>Новые поступления (NA)</p>
<p>pagename:</p>
<input name="pagename">
<input type="submit" value="Удалить Книгу">


<br>
<?
echo '<a href="adminpanel.php">Админ Панель</a>';
?>

</body>
</html>