<?php
// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM post";
include_once("../header.php");
?>


<html>
 <head>
  <meta charset="utf-8">
  <title>Производство</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
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
          <ul class="list-group">
            <li class="list-group-item"> <a href="#">2021 Март</a></li>
            <li class="list-group-item"> <a href="#">2021 Февраль</a></li>
            <li class="list-group-item"> <a href="#">2021 Январь</a></li>
            <li class="list-group-item"> <a href="#">2020 Декабрь</a></li>
            <li class="list-group-item"> <a href="#">2020 Ноябрь</a></li>
            <li class="list-group-item"> <a href="#">2020 Октябрь</a></li>
            <li class="list-group-item"> <a href="#">2020 Сентябрь</a></li>
          </ul> 
      </div>
  <?php
    if($result = $conn->query($sql)){
      foreach($result as $row){   
        if ($row['id']=='1'){        
          echo "<div class=col>";
          echo "<h1>" . $row["Title"] . "</h1>";
          echo "<img src=" . $row["Foto"] . " alt=foto align=left hspace=10 width=250 height=250>";
          echo "<p align=justify>" . $row["Text"] . "</p>";
          echo "<p style=float:left><b>Date: " . $row["Published_date"] . " autor: Andrey</b></p>";
          echo "<a style=float:right href=../index.php role=button class='btn btn-info' target=_blank>Ввернуться на главную</a>";           
        }
      }
    }
  ?>

 
 </body>
</html>

<?php
$conn->close();
?>