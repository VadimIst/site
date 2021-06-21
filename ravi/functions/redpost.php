<?php
session_start();

// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$title = $_POST['izm_Title'];
$autor = $_POST['izm_autor'];
$intro = $_POST['izm_Intro'];
$text = $_POST['izm_Text'];
$data = $_POST['izm_Data'];
$foto = $_POST['izm_foto'];
$id = $_POST['izm_id'];

//$sql = "SELECT * FROM post WHERE id = $id";

$result = mysqli_query ($conn,"UPDATE post SET Title = ('$title'), Intro = ('$intro'), Text = ('$text'),Published_date = ('$data'),Foto = ('$foto'),autor = ('$autor') WHERE id = " . $id . " ");

if ($result == true){
echo "Информация занесена в базу данных";
}else{
echo "Информация не занесена в базу данных";
}
?>