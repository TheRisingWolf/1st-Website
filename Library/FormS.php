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




<form action="NewS.php" method="post">
<p>Абонемент (S)</p>
<p>pagename:</p>
<input name="pagename">
<p>Название абонемента:</p>
<input name="nameart">
<p>Текст условий абонемента:</p>
<textarea name="text"></textarea>
<p>Дата публикации:</p>
<input name="date" type="date">
<input type="submit" value="Добавить абонемент">
</form>
<br>
<br>

<form action="DeliteS.php" method="post">
<p>Абонемент (S)</p>
<p>pagename:</p>
<input name="pagename">
<input type="submit" value="Удалить Абонемент">


<br>
<?
echo '<a href="adminpanel.php">Админ Панель</a>';
?>

</body>
</html>