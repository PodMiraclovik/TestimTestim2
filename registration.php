<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<style type="text/css">
		#contant {
		min-width:25%;
		max-width:70%;
		font-size:190%;
		border-color:black;
		}
		#contant2 {
		height:20px;
		min-width:20%;
		max-width:90%;
		font-size:190%;
		border-color:black;
		}
	</style>
<body>

<form action="verification.php" method="POST">

<table>
<tr>
<td id="contant">Логин<font color="red">*</font>:</td>
<td id="contant2"><input type="text" size="20" name="login"></td>
</tr>
<tr>
<td id="contant">Пароль<font color="red">*</font>:</td>
<td id="contant2"><input type="password" size="20" maxlength="20" name="password"></td>
</tr>
<tr>
<td id="contant">Подтверждения пароля<font color="red">*</font>:</td>
<td id="contant2"><input type="password" size="20" maxlength="20" name="password2"></td>
</tr>
<tr>
<td id="contant">E-mail<font color="red">*</font>:</td>
<td id="contant2"><input type="text" size="20" name="email"></td>
</tr>
<tr>
<td id="contant">Имя:</td>
<td id="contant2"><input type="text" size="20" name="name"></td>
</tr>
<tr>
<td id="contant">Фамилия:</td>
<td id="contant2"><input type="text" size="20" name="lastname"></td>
</tr>
<tr>
<td></td>
<td colspan="2" id="contant2"><input type="submit" value="Зарегистроваться" name="submit">
</td>
</tr>
</table>
</form>

<br id="contant">Поля со значком <font color="red">*</font> обязательны для заполнения

</body>
</html>