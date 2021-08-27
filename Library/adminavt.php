<?php
//session_start();
require_once 'connect.php';
// авторизация

$login = $_POST['login'];
$password = md5($_POST['password']);
$admin = $_POST['who'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'  AND `admin` = '$admin' ");

//echo mysqli_num_rows($check_user);
//отображает количество совпадений с базой данных далее продолжение если совпадения найдены

if (mysqli_num_rows($check_user) > 0)
{

	$admin	 = mysqli_fetch_assoc($check_user);

	$_SESSION['admin'] = [

		"login" => $admin['login']

		];
	header("Location: adminpanel.php");
}
else
header("Location: avtadministrator.html");
?>