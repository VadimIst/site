<!DOCTYPE html>
<html>
	<head>
		<title>Д/З</title>
		<meta charset="utf-8">
	</head>

	<body>
		<form action="player.php" method="post" name="form">
			<input type="text" name="name" placeholder="Введите название произведения">
			<input type="text" name="author" placeholder="Введите автора">
			<input type="submit" placeholder="Записать в таблицу">
		</form>
	</body>
</html>
<?php
session_start();
$name = $_POST['name'];
$author = $_POST['author'];
$db_table = "music";
$mysqli = new mysqli('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
printf("Соединение не установлено", mysqli_connect_error());
exit;
}
$result = $mysqli->query("INSERT INTO ".$db_table." (name,author) VALUES ('$name','$author')");
if ($result == true){
echo "Информация занесена в базу данных";
}else{
echo "Информация не занесена в базу данных";
}

if (isset($_POST['name']) && isset($_POST['author'])) {

//$mysqli = new mysqli('localhost', 'root', '', 'test');

(41 линия)$mysqli = $query("insert into music values($name,$author)";
$mysqli->query($sql);
echo "Выполнено";
}
?>