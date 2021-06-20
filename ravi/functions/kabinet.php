<?php
	if (!empty($_POST["change-button"])) {
		$table = 'orders';
		$column = 'password-hash';
		$client_password1 = $_POST["client-password1"];
		$client_password1 = check_symbol($client_password1, "Пароль", "1", "/^[0-9A-Z]{6,}\z/i");
		$salt = substr(sha1(mt_rand()),6,22);
		$value = crypt($client_password1, '$2y$10$'.$salt.'$');
		$column_1 = 'client-login';
		$value_1 = $_SESSION['login'];
		$column_2 = 'client-login';
		$value_2 = $_SESSION['login'];
		//echo $table,"*",$column,"*",$value,"*",$column_1,"*",$value_1,"*",$column_2,"*",$value_2,"*---------";
		$success = rihgtOneColumnTwoСondition($table, $column, $value, $column_1, $value_1, $column_2, $value_2);
		if (!$success) $alert = 'Ошибка при отправке формы';
			else
				$alert = 'Вы успешно изменили пароль!';
		include "alert.php";
	}
?>
<div class="article">
	<h1>Личный кабинет</h1>
	<div class="chapter">
		<h2>Данные аккаунта</h2> 
		<hr>
<?php
	if ($session_check == 1){ //При разрешающем флаге авторизации
		$table = 'orders';
		$column = 'client-login';
		$value = $_SESSION['login'];
		if ($data_bd = getLine($table, $column, $value)) {
			$client_name = $data_bd["client-name"];
			$client_email = $data_bd["client-email"];
		}
?>
			<div class="input9">
				<div>Имя:</div>
				<div><?php echo $client_name; ?></div>
			</div>
			<div class="input9">
				<div>Логин:</div>
				<div><?php echo $_SESSION['login']; ?></div>
			</div>	
			<div class="input9">
				<div>e-mail:</div>
				<div><?php echo $client_email; ?></div>
			</div>
			<div class="input12">
				<div>Пароль:</div>
				<div>&bull;&bull;&bull;&bull;&bull;&bull;&bull;</div>
			</div>
			<form name="change" action="#" method="post" onsubmit="return checkprofile()">
				<div class="password1">
					<div>
						<input type="password" name="client-password1" value="<?php echo $password; ?>" placeholder="Новый пароль" title="Пароль должен содержать цифры и/или буквы латинского алфавита, не менее 6-ти символов" pattern="[0-9A-Za-z]{6,}"required> 
					</div>
				</div>	
				<div class="password2">
					<div>
						<input type="password" name="client-password2" value="" placeholder="Повторите пароль"> 
					</div>
				</div>	
				<div class="rtg-wrapper">
					<div class="recovery-button">
						<input type="submit" name="change-button" value="Сохранить">
					</div>
				</div>
			</form>
		</div>
<?php
	}
	else{
?>
		<p>Личный кабинет доступен только для авторизованных пользователей. Для входа в него необходимо авторизоваться на сайте со своим логином и паролем в соответствующей форме.</p> 
<?php
	}
?>
</div>
