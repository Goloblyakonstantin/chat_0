<?php
	session_start();
	//Защита от вредоносных символов
	function protect($var)
	{
		$var = trim($var);
		$var = strip_tags($var);
		$var = mysql_escape_string($var);
		return $var;
	}
	//Добавление логина
	if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass']) && !empty($_POST['name']))
	{
		$login = protect($_POST['login']);
		$pass = protect($_POST['pass']);
		$name = protect($_POST['name']);

		$mysql=new mysqli('localhost','root','','test_chat');
		$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
		$user=$result->fetch_assoc();

		if(!empty($user['login']) or !empty($user['pass']))
			echo 2;
		else
		{
			echo 1;
			$mysql=new mysqli('localhost','root','','test_chat');
			$mysql->query("INSERT INTO `users`(`login`,`pass`,`name`) VALUES('$login','$pass','$name')");
			$mysql->close();
		}
	}
	else
		echo 0;
?>
