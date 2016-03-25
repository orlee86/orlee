<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Оформление заказа</title>
  </head>
	<body>
	<div class="container">
	<div class="main">
	<p><b>Вязаная шапка модель №112</b></p>
	<img src="file:///C:/Users/Vi/Desktop/ек/web%20програмування/t1I2GJbuPtY.jpg"/>
   <form method="post" action="input5.php">
     <p><b>Цвет</b></p>
     <p><input type="checkbox" name="colorBlack" id="color_Black" value="a1" checked>Черный<Br>
     <input type="checkbox" name="colorPink"  id="color_Pink" value="a2">Розовый<Br>
     <input type="checkbox" name="colorRed" id="color_Red" value="a3">Красный<Br> 
     <input type="checkbox" name="colorBlue" id="color_Blue" value="a4">Синий<Br> 
     <input type="checkbox" name="colorWhite" id="color_White"value="a5">Белый</p>
      <p><b>Материал</b></p>
   <form action="select1.php" method="post">
      <p><select size="4" multiple name="material[]">
      <option disabled>Выберите материал</option>
      <option value="Natural_yarn" id="Natural_yarm">Натуральная пряжа</option>
	  <option value="Wool_mixture" id="Wool_mixture">Полушерсть</option>
      <option selected value="Acril_yarn" id="Acril_yarn">Акриловая пряжа</option>
      </select></p>
	  
  <form name="formal">
     <input type="radio" name="sex" value="man" checked>М
	 <input type="radio" name="sex" value="women" checked>Ж
	 </form>
	 <p><b>Наличие акционного купона</b>
  <input type="checkbox" name="promotional coupon" value="Yes">Да </p>
   <p><input type="submit" value="Купить"></p>
   </div>
   </div>
 </body>
</html>
