<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<nav>
  <ul>
    <li><a href="">Система расчёта стоимости</a></li>
	<li><a href="/price.php">Тарифы</a></li>
    <li><a href="/lk.php">Личный кабинет</a></li>
  </ul>
</nav>
<form action="calculator.php" method="post">
	Заполните поля для подсчета стоимости коммунальных услуг за месяц: <br />
	Горячее водоснабжение: <br />
	<input type="text" name="gvs" /> м³ <br />
	Холодное водоснабжение: <br />
	 <input type="text" name="xvs" /> м³ <br />
	Водоотведение: <br />
	 <input type="text" name="sewage" /> м³ <br />
	Газоснабжение: <br />
	 <input type="text" name="gas" /> м³ <br />
	Электроэнергия: <br />
	 <input type="text" name="electric" /> кВт•ч<br />
	Размер квартиры: <br />
	 <input type="text" name="flat" /> м³<br />
	Отопление:
	 <input type="checkbox" name="heating" value="No" /> <br />
	Итог: 
<?php

if(!empty($_POST)){
$gvs=abs((int)$_POST['gvs']);
$xvs=abs((int)$_POST['xvs']);
$sewage=abs((int)$_POST['sewage']);
$gas=abs((int)$_POST['gas']);
$electric=abs((int)$_POST['electric']);
$flat=abs((int)$_POST['flat']);

$summ=($gvs*205+$xvs*42+$gas*6+$electric*4+$flat*30+$sewage*30);

if(!empty($_POST['heating'])){
	$summ=$summ+2467;
}
echo $summ;
}
?> 
рублей </br>
	<input type="submit" value="Посчитать" />
</form>
	</body>
</html>