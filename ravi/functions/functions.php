<?php
	require_once "connect.php";

	function getNews ($limit) {
		global $mysqli;
		$connect = mysqli_connect('localhost', 'root', '', 'site');
		$result = $mysqli->query("SELECT * FROM `post` ORDER BY `id` DESC LIMIT $limit");
		closeBD();
		return resultToArray ($result);
	}

	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>