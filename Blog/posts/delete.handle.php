<?php 
	header('Content-type:text/html;charset=utf-8');
	require_once('E:/Blog/connect.php');
	$id=$_GET['id'];
	$delete="delete from article where id=$id";
	$query=mysql_query($delete);
	if($query)
		echo "文章删除成功";
	else
		echo "文章删除失败";
 ?>