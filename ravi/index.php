<?php
//require_once "functions/functions.php";
//require_once "functions/connect.php";
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
  <title>Bootstrap</title>
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
        <?php 
        foreach ($result as $row) : ?>
        <div class=col>
            <h1><?= $row['Title']?></h1>
            <img src= "<?= $row['Foto']?>" alt="foto" align="left" hspace=10 width=250 height=250>
            <div><?= $row['Intro']?></div>
            <b>Автор: <?= $row['autor']?> Дата написания: <?= $row['Published_date']?></b>
            <div><button class="button"><a class="button" href="news.php?id=<?= $row['id'] ?>">Читать далее...</a></button></div>
        </div>
        <div class=w-100></div>
        <div class=col-3></div>
        <?php endforeach; ?>
        </div>
    </div>
 </body>
</html>

<!-- <?php
if (isset($_SESSION['login'])){
    echo "yes";
}
else {
    session_destroy();
    echo "no";
}
?>  -->

<?php
$conn->close();
?>