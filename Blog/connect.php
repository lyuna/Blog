<?php 
	require_once('E:/Blog/config.php');
	header("Content-type:text/html;charset=utf8");
	if(!$con=mysql_connect(HOST,USERNAME,PASSWORD))
		echo "链接数据库失败";
	mysql_select_db('blog');
	mysql_query('set names utf8');
 ?>