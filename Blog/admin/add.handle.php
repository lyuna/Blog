<?php 
	header("Content-type=text/html;charset=utf-8");
	require_once('E:/Blog/connect.php');
	mysql_query("set names utf8");
	$url = "E:/Blog/blog.php"; 
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$insert="insert into article (title,author,description,content,dateline) 
	values('$title','$author','$description','$content','$dateline')";
	$query=mysql_query($insert);
	if(!$query)
		echo "发表文章失败";
	else
	{
		echo "发表文章成功，3秒后回到主页";
		// header("Location:E:/Blog/blog.php ");
	} 
 ?>
