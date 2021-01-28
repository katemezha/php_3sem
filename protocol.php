<!DOCTYPE html>
<html>
<head>
	<title>Протокол</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Результаты опроса</h1>
	<? php
		if (isset($_POST['otpr'])) {
			if (isset($_POST['var5.1']) {
				$c=50;
			}
			elseif (isset($_POST['var5.2']) {
				$c=100;
			}
		}
		else{
			$c=0;
		}
	?>
		<? php
		if (isset($_POST['otpr'])) {
			if (isset($_POST['var6.1']) {
				$d=50;
			}
			elseif (isset($_POST['var6.2']) {
				$d=100;
			}
		}
		else{
			$d=0;
		}
	?>
	<? php
	 echo '<table border="1" width="80%">
   <caption>Протокол</caption>
   <tr>
	    <th>'.$_POST["text1"].'</th>
	    <th>'.$_POST["text2"].'</th>
	    <th>'.$_POST["text3"].'</th>
	    <th>'.$_POST["text4"].'</th>
	    <th>'.$_POST["vopros5"].'</th>
	    <th>'.$_POST["vopros6"].'</th>
	    <th>Дата</th>
	    <th>Время</th>
	    <th>IP</th>
	    <th>Баллы</th>
	    <th>Средний Балл</th>
   </tr>';
   ?>
   <? php
   	echo'<tr><td>'.$_POST['otv1'].'</td><td>'.$_POST['otv2'].'</td><td>'.$_POST['otv3'].'</td><td>'.$_POST['otv4'].'</td><td>'.$c.'</td><td>'.$_POST['var6.1'].'</td><td>'.date( "d.m.y" ).'</td><td>'.date( "H:i" ).'</td><td>'.$_SERVER['REMOTE_ADDR'].'</td><td>'.($_POST['otv1']+$_POST['otv2']+strlen($_POST['otv3'])+strlen($_POST['otv4'])).'</td><td>'.(($_POST['otv1']+$_POST['otv2']+strlen($_POST['otv3'])+strlen($_POST['otv4']))/6).'</td></tr>';
   ?>
  </table>
</body>
</html>