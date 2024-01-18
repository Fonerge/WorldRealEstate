<?php
	require_once 'auth_func.php';
	session_start();
	
	if (!empty($_POST['user_login']) and !empty($_POST['user_pass'])) {
		$login = $_POST['user_login'];
		$password = $_POST['user_pass'];

		$password = md5($password);
		
		$query = "SELECT * FROM `wre_authorization` WHERE `user_login`='$login' AND `user_pass`='$password'";
		$result = mysqli_query($data, $query);
		$user = mysqli_fetch_assoc($result);

		if (!empty($user)) {
			$_SESSION['auth'] = true;
			header('Location: panel.php');
		} else {
			echo('Неверно введён логин или пароль!');
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="World Real Estate">
    <meta name="robots" content="noindex">

	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="icon" type="image/x-icon" href="https://wr-e.com/images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="https://wr-e.com/images/favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://wr-e.com/images/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://wr-e.com/images/apple-touch-icon.png">
	<title>WRE-admin</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<img src="logo.png" width="80px" height="119px">
			</div>
			<div class="title">
				<h1>Админ-панель сайта <a href="https://wr-e.com">wr-e.com</a>.</h1>
	    		<div class="inner">
	    			<p>Вы вошли в панель сайта. Введите данные, чтобы продолжить.</p>
	    		</div>
			</div>
		</div>
		<hr>
	</header>
	<form action="login.php" method="POST">
		<div class="container">
			<div class="row text-center">
				<label for="email"><b>Логин</b></label>
				<input type="text" name="user_login" placeholder="Введите логин" required>
				<label for="psw"><b>Пароль</b></label>
				<input type="password" name="user_pass" placeholder="Введите пароль" required>
				<hr>
			</div>
			<div class="text-center">
				<button type="submit" class="btn_log">Войти</button>
			</div>
		</div>
	</form>
</body>
</html>