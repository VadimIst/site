<?php
session_start();

// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$title = $_POST['Title'];
$autor = $_POST['autor'];
$intro = $_POST['Intro'];
$text = $_POST['Text'];
$data = $_POST['Data'];
$foto = $_POST['foto'];

//$sql = "SELECT * FROM post WHERE id = $id";

$result = mysqli_query ($conn,"INSERT INTO post (Title,Intro,Text,Published_date,Foto,autor) VALUES ('$title','$intro','$text','$data','$foto','$autor')");

if ($result == true){
echo "Информация занесена в базу данных";
}else{
echo "Информация не занесена в базу данных";
}
?>