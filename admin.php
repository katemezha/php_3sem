<!DOCTYPE html>
<html>
<head>
	<title>Админка OpenForm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Добро пожаловать в Админку</h1>
	<form action='opros.php' method="POST">
		<b><p>Ответ число:</p></b>
		<input type="" name="text1">
		<b><p>Ответ положительное число:</p></b>
		<input type="" name="text2">
		<b><p>Ответ строка</p></b>
		<input type="" name="text3">
		<b><p>Ответ текст</p></b>
		<input type="" name="text4">
		<b><p>Выбрать один ответ;</p></b>
		<p>Введите вопрос:</p>
		<input type="" name="vopros5"><br>
		<p>Введите варианты:</p>
		<input type="" name="text5_1">
		<input type="" name="text5_2">
		<input type="submit" name="plus5" value="Еще один вариант">
		<b><p>Выбрать несколько ответов:</p></b>
		<p>Введите вопрос:</p>
		<input type="" name="vopros6"><br>
		<p>Введите варианты:</p>
		<input type="" name="text6_1">
		<input type="" name="text6_2">
		<input type="" name="text6_3">
		<input type="submit" name="plus6" value="Еще один вариант">
		<br>
		<input type="submit" name="new" value="Создать Сессию">
	</form><br>

		<?php
			if (isset($_POST['new'])) {
				echo '<a href="opros.php">Перейти к опросу</a>';
				echo "Сылка: http://php-3sem.std-925.ist.mospolytech.ru/opros.php";
			}
		?>
	<br>	
	<a href="protocol.php">Открыть протокол</a>



</body>
</html>