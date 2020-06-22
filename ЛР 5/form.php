<?php
/*
*скрипт реализующий по нажатию кнопки sumbit передачу данных с формы в базу данных
**/
//подключение файла bd.php реализирующего взаимодействие с бд
include_once "bd.php";
// проверка была ли нажата кнопка с именем sumbit
if(isset($_POST['sumbit']))
{
	//фильтрация данных полученных через метод POST
	$name = filter ($_POST['name']);
	$email = filter ($_POST['email']);
	$text = filter ($_POST['text']);
	// запись данных в бд
	save($name,$email, $text );
	// переход на страницу после записи данных в бд
	header("Location: ../lab5.php?id=gbook");
}
?>