<!DOCTYPE html>
<html>
<head>
	<title>Админка OpenForm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Добро пожаловать в Админку</h1>
	<form method="POST">
		<p>Ответ число:</p>
		<input type="" name="text1">
		<p>Ответ положительное число:</p>
		<input type="" name="text2">
		<p>Ответ строка</p>
		<input type="" name="text3">
		<p>Ответ текст</p>
		<input type="" name="text4">
		<p>Выбрать один ответ</p>
		<p>Введите вопрос:</p>
		<input type="" name="vopros5"><br>
		<p>Введите варианты</p>
		<input type="" name="text5_1">
		<input type="" name="text5_2">
		<input type="submit" name="plus5" value="Еще один вариант">
		<p>Выбрать несколько ответов</p>
		<p>Введите вопрос:</p>
		<input type="" name="vopros6"><br>
		<p>Введите варианты</p>
		<input type="" name="text6_1">
		<input type="" name="text6_2">
		<input type="" name="text6_3">
		<input type="submit" name="plus6" value="Еще один вариант">
		<br>
		<input type="submit" name="new" value="Создать Сессию">
	</form>
		<?php
		// if(isset($_POST['new'])){
		// 	header('Location:new.php')
		// }
		if (isset($_POST['new'])) {
			echo '<form method="POST">';
			echo '<p>'.$_POST['text1'].'<input type="" name="otv1" attern="^[ 0-9]+$"//></p>';
			echo '<p>'.$_POST['text2'].'<input type="" name="otv2" pattern="^[ 0-9]+$"/></p>';
			echo '<p>'.$_POST['text3'].'<input type="" name="otv3"  pattern="{,20}" size="30"/></p>';
			echo '<p><input type="textarea" name="otv4"  rows="5" cols="255">'.$_POST['text4'].'</p>';
			echo '<form><p>'.$_POST['vopros5'].'</p><p>'.$_POST['text5_1'].'<input type="radio" name="var5.1"></p><p>'.$_POST['text5_2'].'<input type="radio" name="var5.2"></p></form>';
			echo '<form><p>'.$_POST['vopros6'].'</p><p>'.$_POST['text6_1'].'<input type="checkbox" name="var6.1"></p><p>'.$_POST["text6_2"].'<input type="checkbox" name="var6.2"></p><p>'.$_POST["text6_3"].'<input type="checkbox" name="var6.3"></p></form>';
			echo '<input type="submit" name="new" value="Отправить"></form>';

		}

	?>
	<a href="protocol.php">Открыть протокол</a>



</body>
</html>