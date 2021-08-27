<?
$pagename = $_POST['pagename'];


require_once 'connect.php';
$db = $connect;

$query = "DELETE FROM `content` WHERE `content`.`name` = '$pagename'";
$result = mysqli_query($db, $query);
mysqli_close($db);



if ($result)
{
echo 'Новость успешно удалена'.'<br>';
//echo '<a href="adminpanel.php"></a>';
echo '<a href="adminpanel.php">Админ Панель</a>';
}
?>

<a href="adminpanel.php"></a>