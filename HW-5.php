<!DOCTYPE html>
<html>
<head>
	<title>HW-5</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		<label for="fname">Имя</label>
		<input id="fname" type="text" name="fname">

		<label for="surname">Фамилия</label>
		<input id="surname" type="text" name="surname">

		<label for="univer">Учебное заведение</label>
		<input id="univer" type="text" name="univer">

		<label for="check">Чужой компьютер</label>
		<input id="check" type="checkbox" name="check">
		
		<button id="submit">Зарегистрироваться</button>
	</form>

	<?php

		$fname = $_POST['fname'];
		$surname = $_POST['surname'];
		$univer = $_POST['univer'];
		

		function createFile($fname, $surname, $univer) {
			$file = 'hm5.txt';
			$current = file_get_contents($file);
			$current .= $fname;
			file_put_contents($file, $current);

			$current .= $surname;
			file_put_contents($file, $current);

			$current .= $univer;
			file_put_contents($file, $current);

			$output = file_get_contents('hm5.txt');
			echo $output;
		}

		createFile($fname, $surname, $univer);
	?>


</body>
</html>




















