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




<form action="NewHistoty.php" method="post">
<p>История (HISTORY)</p>
<p>pagename:</p>
<input name="pagename">
<p>Название статьи:</p>
<input name="nameart">
<p>Текст статьи:</p>
<textarea name="text"></textarea>
<p>Дата публикации:</p>
<input name="date" type="date">
<input type="submit" value="Добавить Историю">
</form>
<br>
<br>

<form action="DeliteHistory.php" method="post">
<p>Новости (news)</p>
<p>pagename:</p>
<input name="pagename">
<input type="submit" value="Удалить Историю">


<br>
<?
echo '<a href="adminpanel.php">Админ Панель</a>';
?>

</body>
</html>