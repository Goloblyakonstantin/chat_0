<?php
session_start();
require_once'php/php.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta name="description" content="<?php echo $description ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="css/index_css.css">
		<link rel="shortcut icon" href="/img/ico/ico.ico" type="image/x-icon">
		<title>Регистрация\Авторизация</title>
	</head>
	<body>
		<footer>ЧАТ</footer>
		<main>
			<form>
				<input type='text' class='login' id='login' placeholder='логин'></br>
				<input type='text' class='pass' id='pass' placeholder='пароль'></br>
				<input type='text' class='name' id='name' placeholder='имя'></br>
				<input type='submit' class='btn_reg' id='btn_reg' value='регистрация'>
				<input type='submit' class='btn_auth' id='btn_auth' value='авторизация'>
			</form>
		</main>

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>
