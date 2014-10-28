<?php 
	header("Content-type=text/html;charset=utf-8");
	require_once '../inc/db.php';
	require_once '../inc/common.php';
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$dateline=time();
	$insert="insert into article (title,author,body,created_at)
	values('$title','$author','$content','$dateline')";
	$query=$db->query($insert);
	if(!$query)
		echo "发表文章失败";
	else
	{
		echo "发表文章成功";
		redirect_back(".show.php");
	}
 ?>
