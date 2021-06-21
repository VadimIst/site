    <?php
    session_start();


    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
//    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['new_password'])) { $new_password=$_POST['new_password']; if ($new_password =='') { unset($new_password);} }
    //заносим введенный пользователем новый пароль в переменную $new_password, если он пустой, то уничтожаем переменную

    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
//    $password = stripslashes($password);
//    $password = htmlspecialchars($password);
    $new_password = stripslashes($new_password);
    $new_password = htmlspecialchars($new_password);
 //удаляем лишние пробелы
    $login = trim($login);
//    $password = trim($password);
    $new_password = trim($new_password);

//хешируем пароль
//    $password = password_hash($password, PASSWORD_DEFAULT);
    $new_pass = password_hash($new_password, PASSWORD_DEFAULT);

 // ПОДКЛЮЧЕНИЕ К БД
$conn = mysqli_connect("localhost", "root", "", "site");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}

 // проверка на существование пользователя 
    $result = mysqli_query($conn,"SELECT id FROM user WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    // если есть
    $result2 = mysqli_query($conn, "UPDATE user SET password = ('$new_pass') WHERE id = " . $myrow['id'] . " ");
    }
else {
   echo "nea";
}
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно сменили пароль! Можете перейти на сайт. <a href='../index.php''>Главная страница</a>";
    }
 else {
    echo "Ошибка! Пароль не сменен.";
    }
    ?>