<?
session_start();
//уничтожение сессии
unset($_SESSION['user']);
header('Location: main.php');
?>