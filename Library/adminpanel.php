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




<?
echo '<a href="FormNews.php">Новости</a>';
echo "<br>";

echo '<a href="FormHistory.php">История</a>';
echo "<br>";

echo '<a href="FormS.php">Абонементы</a>';
echo "<br>";

echo '<a href="FormNA.php">Новые поступления</a>';
echo "<br>";

?>

</body>
</html>