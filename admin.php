<!DOCTYPE html>
<html>
<head>
	<title>Админка OpenForm</title>
</head>
<body>
	<?php
		if(isset($_POST['new'])){
			header('Location:new.php')
		}
	?>
	<h1>Добро пожаловать в Админку</h1>
	<form method="POST">
		<input type="submit" name="new" value="Создать Сессию">
	</form>

</body>
</html>