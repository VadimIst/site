<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : null;

if (is_null($id)) {
	exit('Error');
}

$sql = "SELECT * FROM post WHERE id = $id";

if($result = $conn->query($sql)){
    foreach($result as $row){   
	$article = 	[
		'id'=> $row["id"],
		'title'=> $row["Title"],
		'Foto' => $row["Foto"],
		'Intro' => $row["Intro"],
		'body'=> $row["Text"],
		'autor' => $row["autor"],
		'Published_date' => $row["Published_date"]
	];
}
}

include_once("header.php");
$page_id = $article['id']; // Уникальный идентификатор страницы (статьи или поста)
?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $row['Title']?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="http://www.planetatour19.ru/static/one/images/recreations.png" alt="foto" style="width: 100%">
            </div>
        </div>
        <div class="row">
	        <?php
	            include_once("bok.php");
	        ?>
			<div class=col>
				<h1><?= $row['Title']?></h1>
				<img src= "<?= $row['Foto']?>" alt="foto" align="left" hspace=10 width=250 height=250>
				<p><?= $row['Text']?></p>
				<p>Автор: <?= $row['autor']?> Дата написания: <?= $row['Published_date']?></p>
				<button class="button"><a class="button" href="index.php">Ввернуться на главную</a></button></br></br>
			</div>
		</div>



	<div class="row">
			<div class=col-3>
			</div>
				<div class="col">
					<?php if ($_SESSION['login']==$row['autor']){?>
					<div align="right">
					<form action="functions/redpost.php" method="post" name="form">
					<input type="hidden" name="izm_autor" value="<?= $_SESSION['login']?>" />
					<input type="text" name="izm_Title" placeholder="Введите название статьи" size="30"></br>
					<input type="text" name="izm_Intro" placeholder="Введите интро к посту" size="30"></br>
					<textarea type="text" name="izm_Text" placeholder="Введите текст статьи"cols="88" rows="5"></textarea>
					<p>Введите дату выкладывания поста <input type="date" id="start" name="izm_Data"></p>
					<input type="text" name="izm_foto" placeholder="Введите ссылку на картину к статье" size="35"></br>
					<input type="submit" placeholder="Отправить">
					<input type="hidden" name="izm_id" value="<?= $row['id']?>" />
				</form>
			</div>
				<?php } ?>
			</div>
		</div>



<?php
$sql = "SELECT * FROM user";

if($result = $conn->query($sql)){
    foreach($result as $row){   
	$article = 	[
		'login'=> $_SESSION["login"],
	];
}
}
?>
		<div class="row">
			<div class=col-3>
			</div>
			<div class="col">
				<form name="comment" action="functions/comment.php" method="post">
				  <p>
				    <label>Имя:</label>
				    <div name="autor"></div>
				    <input type="text" name="autor" placeholder="<?= $_SESSION['login']?>"></input>				    
				  </p>
				  <p>
				    <label>Комментарий:</label>
				    <br />
				    <textarea name="text" cols="135" rows="5"></textarea>
				  </p>
				  <p>
				    <input type="hidden" name="page_id" value="<?= $page_id ?>" /> 
				    <input type="submit" value="Отправить" />
				  </p>
				</form>			
			<?php
			$result_set = $conn->query("SELECT * FROM `comment` WHERE `page_id`= '$page_id' "); //Вытаскиваем все комментарии для данной страницы
			//Вывод комментариев
			while ($row = $result_set->fetch_assoc()) { ?>
				<h1><?= $row['autor']?></h1>
				<p><?= $row['text']?></p>
			    <br> </br>
			<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>