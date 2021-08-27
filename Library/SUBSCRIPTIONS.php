<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
						<li><a href="SUBSCRIPTIONS.php" class="active">SUBSCRIPTIONS</a></li>
						<li><a href="NEW ARRIVALS.php">NEW ARRIVALS</a></li>
						<li><a href="entrance.html">ENTER</a></li>
					</ul>

					<img src="content/image3.jpg" alt="" width="100%">


					<div class="show">



					<?
					//отображение контента из бд



					require_once 'connect.php';

					$query = mysqli_query($connect, "SELECT * FROM content WHERE `content`.`pagename` = 'S'");

					while($articleee = mysqli_fetch_assoc($query))
					{
						echo '<h1>'.$articleee['name'].'</h1>'.'<br>' ;

						echo '<p>'.$articleee['text'].'</p>'.'<br>' ;

						echo '<em>'.$articleee['date'].'</em>'.'<br>'.'<br>'.'<br>' ;

					}
					?>








					<br>
					<br>
					</div>

				</nav>
			</div>
		</main>
		<footer>
                <p>Copyright &copy; 2021, designed by <a href="#">Волков Андрей Владимирович</a></p>
        </footer>
	</div>
</body>