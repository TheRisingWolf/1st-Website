<?
session_start();
require_once 'connect.php';
// авторизация

	$login = $_POST['login'];
	$password = md5($_POST['password']);

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
	//echo mysqli_num_rows($check_user);
//echo $check_user;
	if (mysqli_num_rows($check_user) > 0)
	{
		$user = mysqli_fetch_assoc($check_user);// преобразование в нормальный массив

		// профиль
		$_SESSION['user'] = [

		"id" => $user['id'],
		"full_name" => $user['full_name'],
		"avatar" => $user['avatar'],
		"email" => $user['email']

		];

		header('Location: profile.php');


	}

	else
	{
		$_SESSION['message'] = 'Не верный логин или пароль';
		header('Location: main.php');
	}
?>

<pre>
	<?
	print_r($check_user);
	print_r($user);
	?>
</pre>