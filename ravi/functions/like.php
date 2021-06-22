<?php
// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

$clientIp = $_SESSION['id'];

$article_id = $_POST['str_id'];

$sql = "INSERT INTO likes (id, client_ip, article_id) VALUES (NULL, '$clientIp', '$article_id')";

$query = mysqli_query($conn, $sql);

function quantityLikes($postID) { // функция принимает ID поста
    global $link;
    $sql = "SELECT client_ip FROM likes WHERE article_id = '$postID' GROUP BY client_ip"; // выбираем IP из таблицы likes с уникальными значениями
    $query = mysqli_query($conn, $sql);
    $likes = mysqli_fetch_all($query, 1);
    return $likes;
}

function is_in_array($array, $key, $key_value) {
      $within_array = false;
      foreach($array as $k=>$v) {
        if(is_array($v)) {
            $within_array = is_in_array($v, $key, $key_value);
            if($within_array == true) {
                break;
            }
        } else {
                if($v == $key_value && $k == $key) {
                        $within_array = true;
                        break;
                }
        }
      }
      return $within_array;
}