<!DOCTYPE html>
<html>
<head>
	<title>Протокол</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Результаты опроса</h1>
	<? php
	 echo '<table border="1" width="80%">
   <caption>Протокол</caption>
   <tr>
	    <th>'.$_POST["text1"].'</th>
	    <th>'Число'</th>
	    <th>'Возраст'</th>
	    <th>'Комментарий'</th>
	    <th>'Группа'</th>
	    <th>'Пол'</th>
	    <th>Дата</th>
	    <th>Время</th>
	    <th>IP</th>
	    <th>Баллы</th>
	    <th>Средний Балл</th>
   </tr>';
   <?php
   	echo'<tr><td>'.$_POST['otv1'].'</td><td>'.$_POST['otv2'].'</td><td>'.$_POST['otv3'].'</td><td>'.$_POST['otv4'].'</td><td>'.$_POST['otv5'].'</td><td>'.$_POST['otv6'].'</td><td>'.date( "d.m.y" ).'</td><td>'.date( "H:i" ).'</td><td>'.$_SERVER['REMOTE_ADDR'].'</td><td>'.($_POST['pole1']+$_POST['pole2']+strlen($_POST['pole3'])+strlen($_POST['pole4'])).'</td><td>'.(($_POST['pole1']+$_POST['pole2']+strlen($_POST['pole3'])+strlen($_POST['pole4']))/6).'</td></tr>';
   ?>
  </table>
</body>
</html>
	?>
</body>
</html>