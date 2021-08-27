<?session_start();

if (!$_SESSION['user'])
{
	header('Location: main.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>профиль</title>
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
							<li><a href="register.php">REGISTRATION</a></li>
							<li><a href="profile.php" class="active">PROFILE</a></li>
						</ul>
					</nav>
				</div>

				<!-- профиль -->
				<div class="form_reg">
					<form>
						<img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
						<h2><?= $_SESSION ['user']['full_name']?></h2>
						<a href=""><?= $_SESSION ['user']['email']?></a>
						<a href="logout.php" class="logout">Выход<a>
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