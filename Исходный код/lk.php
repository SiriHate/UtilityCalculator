<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<nav>
  <ul>
    <li><a href="/calculator.php">Система расчёта стоимости</a></li>
	<li><a href="/price.php">Тарифы</a></li>
    <li><a href="">Личный кабинет</a></li>
  </ul>
</nav>
<center>
<Div name = content CLASS = "content" >
		<p>Добро пожаловать: <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Выйти из аккаунта</a> </p>
		</center>.
		<Div/>
	</body>
</html>