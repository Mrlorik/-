<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Гостевая кинига</title>
		<link rel="stylesheet" type="text/css" href="css/lb4.css">
		<meta name="viewport" content="width=divice-widtgh, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
	</head>
	<body>
		<style> body {
				background: url('img/d99a77aeb546be61d3016f6efa0078fb.jpg');
			} </style>
			<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<div id="container">
		<div id="header">
			<h3>Гостевая книга</h3>
			<?php
date_default_timezone_set('GMT+3');
echo date(' jS \of m. Y h:i A');
?>
			</div>
		<div class="col-lg-12">
		<div id="form">Если ты оказался здесь, то значит ты хочешь попасть к нам!<br/>
		Сейчас это сделать очень просто. Ты можешь зарегестрироваться онлайн!<br/>
		 Просто введи свои данные: </div>
<form class="form-inline">
<div class="col-lg-12">
	<div class="form-group">
	<div id="form">
		<label class="sr-only" for="inputNaim">ФИО</label>
	<input type="ФИО" class="form-control" id="inputNaim" placeholder="ФИО">	
	</div>
	<div class="col-lg-12">
				<div class="form-group">
				<div id="form">
				<label class="sr-only" for="inputEmail">E-mail</label>
				<input type="E-mail" class="form-control" id="inputEmail" placeholder="Email">
</div>
<div class="col-lg-12">
				<div class="col-lg-12">
				<div class="form-group">
				<div id="form">
				<label class="sr-only" for="inputTaim">Дата и время</label>
				<input type="Дата" class="form-control" id="inputTaim" placeholder="Дата и время записи">
				</div>
				<button type="submit"
				class="btn btn-primary">
				<div id="form1">Отправить	</button>
</form>
<div id="table">	
<table class="table"  align="center" bgcolor="#ffaa00" border="1" width="900" height="750">
	<thead>
		<tr>	
					<th><font color="#ea3933">ФИО</th>
					<th >
						<font color="#ea3933">E-mail</font></th>
					<th><font color="#ea3933">Дата и время</font></th>
			</tr>
			<tr>
			<th>Иван Иванович</th>
				<th>IvanIvanovich@mail.ru</th>
				<th>19.10.2020 18:35</th>
			</tr>
			<tr>
			<th>Николай Николаевич</th>
				<th>NikolaKola@mail.ru</th>
				<th>08.01.2020 09:02</th>
			</tr>
			<tr>
			<th>Федор Федорович</th>
				<th>PhedorPhedorovich@mail.ru</th>
				<th>01.07.2020 11:10</th>
			</tr>
	</thead>
</table><br/>
<div id="form"><h5><a href="Menu2.0.html">Вернуться в главное меню </a></h5></div>	
	</body>
</html>