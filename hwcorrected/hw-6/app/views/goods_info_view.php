<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="/localhost/2505/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<ul>
		<li><a href="index.php">главная</a></li>
		<li><a href="auth_form.php">Войти</a></li>
		<?php if ($auth): ?>
		<li><a href="?exit=exit">Выйти</a></li>
		<? endif; ?>
	</ul>
	<div>
		<h1><?php echo $current_good['title'];?></h1>
		<p><?php echo $current_good['description']; ?></p>
	</div>
	<?php if ($auth):?>

	<form id="comment_form">
		<textarea title="Комментарий1"></textarea>
		<button type="submit" >Оставить комментарий</button>
	</form>

	<?php else:?>

	<p>Вы не можете оставить комментарий</p>

	<? endif; ?>

	<script type="text/javascript" src="/localhost/2505/js/comments.js"></script>
</body>
</html>