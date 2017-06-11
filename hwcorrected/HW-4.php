<!DOCTYPE html>
<html>
<head>
	<title>HW-3</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		<label for="login">Логин</label>
		<input id="login" type="text" name="login">

		<label for="pwd">Пароль</label>
		<input id="pwd" type="password" name="pwd">

		<label for="check">Сохранить пароль</label>
		<input id="check" type="checkbox" name="check">
		
		<button id="submit">Зарегистрироваться</button>
	</form>
	<?php
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];
		$check = $_POST['check'];

		$data_arr = [
			'login' => $login,
			'pwd' => $pwd,
			'check' => $check

		];

	?>


	<script type="text/javascript">
		var lgn = 'Шарин';
		var pswd = '111';
		var obj = <?php echo json_encode($data_arr); ?>;

		var l = obj.login;
		var p = obj.pwd;

		if ((l === lgn)&&(p === pswd)) {
			alert('Пароль принят');
		} else {
			if ((l === null)&&(p === null)) {
				alert('введите пароль');
			} else {
				alert('неправильно введёт логин или пароль');
			}

		}



	</script>
</body>
</html>