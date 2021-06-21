<?php 
session_start();
// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$sql = "SELECT * FROM post";
include_once("header.php");
?>

<html>
  <head>
  	<meta charset="utf-8">
  	<title>Личный кабинет</title>
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
       <div class="col-3"> 
       				<?php
					echo "Выход из сессии "; 
					if(isset($_GET['exit']))
					{
					    session_destroy();
					    header('Location: index.php');
					    exit;
					}
				?>
			<a href="?exit">Exit</a>
		</div>
		<div class="col-3">   
        	<h2><?php echo "Привет, " . $_SESSION['login'] . "!"?></h2>
	    	<h2>Смена пароля</h2>
		    	<form action="functions/sm_pass.php" method="post">
		    	<input type="hidden" name="login" value="<?= $_SESSION['login']?>" /> 
		    	<p>
				    <label>Ваш пароль:<br></label>
				    <input name="password" type="password" size="15" maxlength="15">
		   	 	</p>
		   		<p>
			    	<label>Новый пароль:<br></label>
				    <input name="new_password" type="password" size="15" maxlength="15">
		    	</p>
		    	<p><input type="submit" name="submit" value="Сменить"></p>
				</form>
				</div>
			   <div class="col-6">    
				<form action="functions/predlog.php" method="post" name="form">
					<input type="hidden" name="autor" value="<?= $_SESSION['login']?>" />
					<input type="text" name="Title" placeholder="Введите название статьи" size="30"></br>
					<input type="text" name="Intro" placeholder="Введите интро к посту" size="30">
					<textarea type="text" name="Text" placeholder="Введите текст статьи"cols="88" rows="5"></textarea>
					<p>Введите дату выкладывания поста <input type="date" id="start" name="Data"></p>
					<input type="text" name="foto" placeholder="Введите ссылку на картину к статье" size="35"></br>
					<input type="submit" placeholder="Отправить">
				</form>
			   </div>
			</div>
		</div>
  </body>
</html>
