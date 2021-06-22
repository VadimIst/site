<script>
// событие загрузки страницы, не включая скрипты и картинки
document.addEventListener("DOMContentLoaded", function() {
    var iconHead = document.querySelector('.icon_head');
    if(iconHead) {
        // считаем количество текущих лайков и увеличиваем на 1
        var countLikes = parseInt(document.getElementById('countLikes').textContent) +1;
        // по клику на иконку
        iconHead.addEventListener('click', function() {
            // увеличиваем цифру лайков на 1
            document.getElementById('countLikes').textContent = countLikes;
            // меняем иконку (в моём случае - закрашенное сердечко)
            this.setAttribute('src', 'путь_на_иконку_для_уже_проголосовавших_ранее');
            // добавляем css класс .noClick
            this.classList.add('noClick');
            // записываем в переменную IP-пользователя из атрибута data-ip
            var clientIp = this.getAttribute('data-ip');
            // записываем в переменную IP-пользователя из атрибута data-post
            var postId = this.getAttribute('data-post');
            // создаём новый XMLHttpRequest для асинхронной передачи параметров на сервер
            var httpRequest = new XMLHttpRequest();
            // указываем файл, на который идёт запрос
            var sendUrl = "/functions/like.php";
            // в параметры записываем IP-клиента и ID статьи
            var sendParams = 'ip='+ clientIp +'&id=' + postId;
            httpRequest.open("POST", sendUrl, true);
            // устанавливаем заголовки
            httpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            // отправляем данные на сервер
            httpRequest.send(sendParams);
        })
    }
});
</script>