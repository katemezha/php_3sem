<!DOCTYPE html>
<html>
<head>
	<title>Опросник OpenForm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Приветствуем вас, пройдите пожалуйста опрос!</h1>
	<?php
			if (isset($_POST['new'])) {
				echo '<form action=" protocol.php" method="POST">';
				echo '<p>'.$_POST['text1'].'<input type="" name="otv1" pattern="^[ 0-9]+$"//></p>';
				echo '<p>'.$_POST['text2'].'<input type="" name="otv2" pattern="^[ 0-9]+$"/></p>';
				echo '<p>'.$_POST['text3'].'<input type="" name="otv3"  pattern="{,20}" size="30"/></p>';
				echo '<p><input type="textarea" name="otv4"  rows="5" cols="255">'.$_POST['text4'].'</p>';
				echo '<form><p>'.$_POST['vopros5'].'</p><p>'.$_POST['text5_1'].'<input type="radio" name="var5.1"></p><p>'.$_POST['text5_2'].'<input type="radio" name="var5.2"></p></form>';
				echo '<form><p>'.$_POST['vopros6'].'</p><p>'.$_POST['text6_1'].'<input type="checkbox" name="var6.1"></p><p>'.$_POST["text6_2"].'<input type="checkbox" name="var6.2"></p><p>'.$_POST["text6_3"].'<input type="checkbox" name="var6.3"></p></form>';
				echo '<input type="submit" name="otpr" value="Отправить"></form>';
				echo 'http://php-3sem.std-925.ist.mospolytech.ru/opros.php';
				echo '<a href="protocol.php">Ссылка на протокол</a>';
			}
			if (isset($_POST['otpr'])) {
				echo "Спасибо!";
				
			}
			else{
				echo "Поля заполнены не корректно";
			}


	?>
</body>
</html>