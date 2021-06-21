<?php
  /* Принимаем данные из формы */
  $autor = $_POST["autor"];
  $page_id = $_POST["page_id"];
  $text = $_POST["text"];
  $autor = htmlspecialchars($autor);// Преобразуем спецсимволы в HTML-сущности
  $text = htmlspecialchars($text);// Преобразуем спецсимволы в HTML-сущности

// ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

  $conn->query("INSERT INTO `comment` (`autor`, `page_id`, `text`) VALUES ('$autor', '$page_id', '$text')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>