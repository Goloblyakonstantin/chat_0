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
		<title>Чат</title>
	</head>
	<body>
		<main>
			<p>привет,<?php echo $_SESSION['name']  ?></p>
		</main>
		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>
