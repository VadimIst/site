<?php
	// $mysqli = false;
	// function connectBD () {
	// 	global $mysqli;
	// 	$connect = mysqli_connect('localhost', 'root', '', 'site');
	// 	$mysqli->query("SET NAMES 'utf-8'");
	// }

	// function closeBD (){
	// 	global $mysqli;
	// 	$mysqli->close();
	// }
		
	
    // if (!$connect) {
    //     die('Error connect to DataBase');
    // }

	// $connect = mysqli_connect('localhost', 'students', 'students2', 'site');
	// if (!$connect) {
	// 	die('Error connect to DB');
	// }

// defined('INDEX') OR die('Прямой доступ к странице запрещён!');

// 	$mysqli = false;
// class MyDB
// {

// var $dblogin = "root"; // ВАШ ЛОГИН К БАЗЕ ДАННЫХ
// var $dbpass = ""; // ВАШ ПАРОЛЬ К БАЗЕ ДАННЫХ
// var $db = "site"; // НАЗВАНИЕ БАЗЫ ДЛЯ САЙТА
// var $dbhost="localhost";

// var $link;
// var $query;
// var $err;
// var $result;
// var $data;
// var $fetch;

// function connect() {
// 	global $mysqli;
// 	$this->link = mysqli_connect($this->dbhost, $this->dblogin, $this->dbpass);
// //	mysqli_select_db($this->db);
// //	$mysqli->query("SET NAMES 'utf-8'");
// }

// function close() {
// 	mysqli_close($this->link);
// }

// function run($query) {
// 	$this->query = $query;
// 	$this->result = mysqli_query($this->query, $this->link);
// 	$this->err = mysqli_error();
// }

// function row() {
// 	$this->data = mysqli_fetch_assoc($this->result);
// }

// function fetch() {
// 	while ($this->data = mysqli_fetch_assoc($this->result)) {
// 		$this->fetch = $this->data;
// 		return $this->fetch;
// 	}
// }

// function stop() {
// 	unset($this->data);
// 	unset($this->result);
// 	unset($this->fetch);
// 	unset($this->err);
// 	unset($this->query);
// }
// }

?>



<!--  $link = new mysqli('localhost', 'root', '', 'site'); -->