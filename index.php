<!DOCTYPE html>
<html>
<head>
	<title>OpenForm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(isset($_POST['login']) && isset($_POST['password'])&& $_POST['login']=='admin' && $_POST['password']=='12345'){
	 
		header('Location: admin.php');

	}

	?>
	<h1>OpenForm для Администратора:</h1>
	<form method="POST">
		<p>Логин:<input name="login"></p>
		<p>Пароль:<input type="password" name="pass"></p>
  		<p><input type="submit"></p>
    </form>
    <footer>
		<p>28.01.21<br></p>
		<p>Login:admin</p> 
		<p>Password:12345</p>
	</footer>
</body>
</html>