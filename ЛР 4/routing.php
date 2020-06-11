<?php
$id = null;
//получение id страницы с помощью метода GET и фильтрации данных 
$id = strtolower(strip_tags($_GET['id']));
//проверка на содержимое переменной $id
switch($id){
	case 'menu': include 'menu.php'; break;
	case 'personal' :include 'personal.php' ; break;
	case 'inf' : include 'inf.php' ; break;
	case 'gbook' : include 'gbook.php' ; break;
	default: include 'lab4.php';
}
?>
