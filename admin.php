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
		if (isset($_POST['vopros1'])) {
			echo '<form method="POST"><p>'.$_POST['text1'].'<input type="" name="otv1"></p><input type="submit" name="new" value="Отправить"></form>';
		}
		if (isset($_POST['vopros2'])) {
			echo '<form method="POST"><p>'.$_POST['text2'].'<input type="textarea" name="otv2"></p><input type="submit" name="new" value="Отправить"></form>';
		}

	?>
	<h1>Добро пожаловать в Админку</h1>
	<form method="POST">
		<p>Тип 1:</p>
		<input type="" name="text1">
		<input type="submit" name="vopros1" value="Добавить текстовое поле">
		<p>Тип 2:</p>
		<input type="" name="text2">
		<input type="submit" name="vopros2" value="Добавить многострочное поле">
		<br>
		<input type="submit" name="new" value="Создать Сессию">
	</form>
	<a href="protocol.php">Открыть протокол</a>


</body>
</html>