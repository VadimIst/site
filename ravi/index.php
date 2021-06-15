<?php
//require_once "functions/functions.php";
//require_once "functions/connect.php";

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
            if ($row['id']=='3'){        
            echo "<div class=col>";
            echo "<h1>" . $row["Title"] . "</h1>";
            echo "<img src=" . $row["Foto"] . " alt=foto align=left hspace=10 width=250 height=250>";
            echo "<p align=justify>" . $row["Intro"] . "</p>";
            echo "<p style=float:left><b>Date: " . $row["Published_date"] . " autor: Andrey</b></p>";
            echo "<a style=float:right href=com/zima.php role=button class='btn btn-info' target=_blank>Читать дальше</a>";
            echo "<div class=w-100></div></div>";
        }
        }
        }
        ?>
            <div class="w-100"></div>
            <div class="col-3"></div>
            <div class="col"> 
            <h1>Только зима близко</h1>
            <img src="https://www.wallpapers.net/web/wallpapers/flatirons-hd-wallpaper/250x250.jpg" alt="foto" align="left" hspace="10"> 
            <p align="justify">Кстати, непосредственные участники технического прогресса и по сей день остаются уделом либералов, которые жаждут быть ограничены исключительно образом мышления. Значимость этих проблем настолько очевидна, что семантический разбор внешних противодействий не даёт нам иного выбора, кроме определения своевременного выполнения сверхзадачи. Предварительные выводы неутешительны: современная методология разработки требует от нас анализа прогресса профессионального сообщества.
            </p>
            <p style="float: left"><b>Date: 16.03.2020   autor: Andrey</b></p>
            <a style="float: right" href="com/zima.php" role="button" class="btn btn-info" target="_blank">Читать дальше</a>
           </div>

           <div class="w-100"></div>
           <div class="col-3"></div>
           <div class="col">
            <h1>Производство</h1>
            <img src="https://i0.wp.com/ae01.alicdn.com/kf/HTB1bxwXOVXXXXa3apXXq6xXFXXXx.jpg_250x250.jpg" alt="foto" align="left" hspace="10"> 
            <p align="justify">Товарищи! новая модель организационной деятельности представляет собой интересный эксперимент проверки направлений прогрессивного развития. Равным образом дальнейшее развитие различных форм деятельности требуют от нас анализа новых предложений. С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа форм развития.
            </p>
            <p style="float: left"><b>Date: 21.03.2020   autor: Mark</b></p>
            <a style="float: right" href="com/kom.php" role="button" class="btn btn-info" target="_blank">Читать дальше</a>
           </div>
        </div>
    </div>
 </body>
</html>
<?php
$conn->close();
?>