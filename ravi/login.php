<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Вход</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2016/validator/validator.min.js"></script>

</head>

<?php
include_once("header.php");
?>
 
 <body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="http://www.planetatour19.ru/static/one/images/recreations.png" alt="foto" style="width: 100%">
            </div>
        </div>
       <div class="row">
        <div class="col-3"></div>
         <div class="col-6" style="float: center">
         <form data-toggle="validator">
  	  <div class="form-group">
    	   <label for="inputName" class="col-xs-2 control-label">Ваше имя</label>
    	   <div class="col-xs-4">
      	    <input type="text" class="form-control" id="inputName" placeholder="Введите имя" required minlength="4">
    	   </div>
  	  </div>
  	  <div class="form-group">
    	   <label for="inputPassword" class="col-xs-2 control-label">Пароль:</label>
    	   <div class="col-xs-4">
      	    <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Введите пароль" required minlength="5">
    	   </div>
 	  </div>
  	  <div class="form-group">
    	   <label for="inputPassword2" class="col-xs-2 control-label">Повторите пароль:</label>
    	   <div class="col-xs-4">
      	     <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Ошибка! Пароли не совпадают!" placeholder="Повторите пароль" required minlength="5">
             <div class="help-block with-errors"></div>
    	   </div>
 	  </div>
  	  <div class="form-group">
    	   <div class="col-xs-offset-2 col-xs-4">
      	    <div class="checkbox">
 <label>
 <input type="checkbox" id="terms" data-error="Прежде чем оправить данные" required>
 Докажите что Вы человек
 </label>
 <div class="help-block with-errors"></div>
 </div>
    	   </div>
          </div>
  	  <div class="form-group">
    	   <div class="text-center">
      	    <button type="submit" class="btn btn-primary btn-lg">Войти</button>
    	   </div>
  	  </div>
	 </form>
	</div>
     <div class="col-3"></div>
    </div>
   </div>
  </div>
 </body>
</html>
