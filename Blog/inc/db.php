
<?php
//连接数据库;

//mysql_query("SET NAMES utf8");


try{
	$db = new PDO("mysql:host=localhost;dbname=blog;","root","13143264buxia");
	$db->query("SET NAMES 'utf8'");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch (PDOException $e){
	echo $e->getMessage() . '<br/>';
}
?>