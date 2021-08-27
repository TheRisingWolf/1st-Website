<?
$pagename = $_POST['pagename'];
$name = $_POST['nameart'];
$text = $_POST['text'];
$date = $_POST['date'];



require_once 'connect.php';
$db = $connect;

$query = "INSERT INTO `content` (`name`, `text`, `date`, `pagename`) VALUES ('$name', '$text', '$date', '$pagename')";
$result = mysqli_query($db, $query);
mysqli_close($db);



if ($result)
{
echo 'История успешно добавлена'.'<br>';

echo '<a href="adminpanel.php">Админ Панель</a>';
}
?>