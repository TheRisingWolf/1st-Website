<?session_start();

if(isset($_SESSION['user'])){
if ($_SESSION['user'])
{
	header('Location: profile.php');
}
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

	<div class="wrapper">
		<header class="header clearfix">
			<a href="#" class="logo">БИБЛИОТЕКА</a>
		</header>
		<div class=""></div>
		<main class="main">
			<div class="content">
				<nav>
					<ul>
						<li><a href="index.php">NEWS</a></li>
						<li><a href="HISTORY.php"  >HISTORY</a></li>
						<li><a href="SUBSCRIPTIONS.php">SUBSCRIPTIONS</a></li>
						<li><a href="NEW ARRIVALS.php">NEW ARRIVALS</a></li>
						<li><a href="entrance.html" class="active">ENTER</a></li>
					</ul>
				</nav>
				<div class="content">
					<nav>
						<ul>
							<li><a href="main.php" class="active">AUTHORIZATION</a></li>
							<li><a href="register.php">REGISTRATION</a></li>
						</ul>
					</nav>
				</div>


				<?
				//вход для админа
				echo '<a href="avtadministrator.html">Админ</a>';

				?>


				<!-- форма авторизации -->
				<div class="form_reg">
					<form  action="signin.php" method="post">
						<label>Логин</label>
						<input type="text" name="login" placeholder="Введите свой логин">
						<label>Пароль</label>
						<input type="password" name="password" placeholder="Введите свой пароль">
						<button type="submit">Войти</button>
						<p>
							У Вас нет аккаунта? - <a href="register.php" >Зарегистрируйтесь</a>
						</p>

										<?
										if(isset($_SESSION['message'])){
										if ($_SESSION['message'])
										{
											echo '<p class="mesage"> ' . $_SESSION['message'] . '</p>';
										}

										unset($_SESSION['message']);
									};
										?>

					</form>
				</div>
			</div>





		</main>
		<footer>
                <p>Copyright &copy; 2021, designed by <a href="#">Волков Андрей Владимирович</a></p>
        </footer>
	</div>


</body>
</html>