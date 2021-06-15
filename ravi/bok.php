<?php
// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$sql = "SELECT * FROM post";
?>

<html>
<body>
<div class="col-3">
   <ul class="list-group">
   	<?php 
   	if($result = $conn->query($sql)){
   	foreach ($result as $article): ?>
   		<li><a href="?date="><?= $article['Published_date'] ?> <?= $article['Title'] ?> </a></li>
   		<?php endforeach; }?>
   </ul>
   </div>
</body>
</html>