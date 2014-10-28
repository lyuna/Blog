<?php 
	header('Content-type:text/html;charset=utf8');
	require_once('E:/Blog/connect.php');
	mysql_query('set names utf8');
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$update="update article set title='$title',author='$author',description='$description',content='$content',dateline='$dateline' where id='$id'";
	$query=mysql_query($update);
	if(!$query)
		echo "发表文章失败";
	else
	{
		echo "发表文章成功，3秒后回到主页";
		// header("Location:E:/Blog/blog.php ");
	} 
 ?>