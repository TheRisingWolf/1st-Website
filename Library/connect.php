<?

 	error_reporting(E_ALL);
	ini_set("display_errors", "on");

	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$db_name = 'libryary';

	$connect = mysqli_connect($host, $user, $password, $db_name);

	 if (!$connect)
	{
 		die ('Error connect to DataBase');
 	}
?>