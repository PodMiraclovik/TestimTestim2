<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nakrutka</title>
<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<?php
                    $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
                    $user = json_decode($s, true);
                    //$user['network'] - соц. сеть, через которую авторизовался пользователь
                    //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
                    //$user['first_name'] - имя пользователя
                    //$user['last_name'] - фамилия пользователя
                
?>
</head>
<body>
<from action="login.php" method="POST"></from>
<div>
<p class="Login .col-m-1 .col-m-12">Логин:</p>
<br>
<input type="text" name="login" class="Login2 .col-m-1 .col-m-12" placeholder="login">
</div>

<div>
<p class="password .col-m-1 .col-m-12">Пароль:</p>
<br>
<input type="password" name="password" class="password2 .col-m-1 .col-m-12" placeholder="password">
</div>

<div>
<p><input type="submit" value="Войти" name="submit" class="submit .col-m-1 .col-m-12" ></p>
</div>
</table>
</form>

<a href="registration.php" class="registration2 .col-m-1 .col-m-12" >Регистрация</a>
<script src="//ulogin.ru/js/ulogin.js" ></script>
<div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,twitter,facebook;mobilebuttons=0;" ></div>
</body>
</html>