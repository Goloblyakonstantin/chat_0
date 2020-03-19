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
	if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass']))
	{
		$login = protect($_POST['login']);
		$pass = protect($_POST['pass']);

		$mysql=new mysqli('localhost','root','','test_chat');
		$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
		$user=$result->fetch_assoc();

		if(!empty($user['login']))
			{
				$name=$user['name'];
				$_SESSION['name']=$name;
				$mysql->close();
				echo 2;
			}
	}
	else
		echo 0;
?>
