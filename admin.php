<!DOCTYPE html>
<html>
<head>
	<title>Админка OpenForm</title>
</head>
<body>
	<?php
		// if(isset($_POST['new'])){
		// 	header('Location:new.php')
		// }
		if (isset($_POST['new'])) {
			echo '<form method="POST"><p>'.$_POST['text1'].'<input type="" name="otv1" attern="^[ 0-9]+$"//></p><input type="submit" name="new" value="Отправить"></form>';
			echo '<form method="POST"><p>'.$_POST['text2'].'<input type="" name="otv2"></p><input type="submit" name="new" value="Отправить"></form>';
			echo '<form method="POST"><p>'.$_POST['text3'].'<input type="" name="otv3"></p><input type="submit" name="new" value="Отправить"></form>';
			echo '<form method="POST"><p>'.$_POST['text4'].'<input type="textarea" name="otv4"></p><input type="submit" name="new" value="Отправить"></form>';
		}

	?>
	<h1>Добро пожаловать в Админку</h1>
	<form method="POST">
		<p>Тип 1:</p>
		<input type="" name="text1">
		<input type="submit" name="vopros1" value="Ответ число">
		<p>Тип 2:</p>
		<input type="" name="text2">
		<input type="submit" name="vopros2" value="Ответ положительное число">
		<p>Тип 3:</p>
		<input type="" name="text3">
		<input type="submit" name="vopros3" value="Добавить текстовое поле">
		<p>Тип 4:</p>
		<input type="" name="text4">
		<input type="submit" name="vopros4" value="Добавить многострочное поле">
		<p>Тип 2:</p>
		<input type="" name="text2">
		<input type="submit" name="vopros2" value="Добавить многострочное поле">
		<br>
		<input type="submit" name="new" value="Создать Сессию">
	</form>
	<a href="protocol.php">Открыть протокол</a>


</body>
</html>