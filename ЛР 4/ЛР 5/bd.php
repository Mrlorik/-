<?php
// имя базы данных, к которой будет подключение
$dbName = 'test';
/*
* имя хоста для подключения к БД
* 
* */
$dbHost = 'ljcalhost';
/*
* имя пользователя для подключения к базе данных
* 
* */
$dbUsername = 'root';
/*
*пароль для подключения к БД*/
$dbUserPassword = 'root';
/*
*переменная хранящая соединение с базой данных
**/
$cont = null;
$cont = new PDO("mysql:host=".$dbHost.";"."dbname=".$dbName, $dbUsername, $dbUserPassword);
/*
*функция для сохранения даных в БД
*$Name - имя пользователя, который оставил свой комментарий
*$email - электронный адрес
*$text - комментарий
*
**/
function save($name, $email, $text)
{
	global $cont;
	$sql = $cont->prepare("INSERT INTO lab5 (name, email,text) values (?, ?, ?)");
	$result = $sql->execute(array($name, $email, $text));
}
/*
функция для фильтрации данных полученных через POST запрос $name - переменная для фильтрации данных
*
**/
function filter ($name)
{
	$result = htmlspecialchars (strip_tags(trim($name)));
	return $result;
}
/*функция для получения всех данных из БД
*
**/
function getALL()
{
	global $cont;
	$$result = $cont->query("SELECT * from lab5");
	return $result;
}
?>