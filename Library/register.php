<?session_start();

if (isset($_SESSION['user'])){
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
										<li><a href="main.php">AUTHORIZATION</a></li>
										<li><a href="register.php" class="active">REGISTRATION</a></li>
									</ul>
								</nav>
							</div>

							<!-- форма регистрации -->

							<div class="form_reg">
								<form  action="signup.php" method="post" enctype="multipart/form-data">
									<label>ФИО</label>
									<input type="text" name="full_name" placeholder="Введите свое полное имя">
									<label>Логин</label>
									<input type="text" name="login" placeholder="Введите свой логин">
									<label>Почта</label>
									<input type="email" name = "email" placeholder="Введите свой адрес почты">
									<label>Аватар профиля</label>
									<input type="file" name="avatar">
									<label>Пароль</label>
									<input type="password" name="password" placeholder="Введите свой пароль">
									<label>Подтверждение пароля</label>
									<input type="password" name="password_confirm" placeholder="Подтвердите свой пароль">

									<button>Зарегистрироваться</button>
									<p>
										У Вас уже есть акаунт? - <a href="main.php">Авторизуйтесь</a>
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
									</p>
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