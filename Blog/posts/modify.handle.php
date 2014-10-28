<?php
	header('Content-type:text/html;charset=utf8');
	require_once '../inc/db.php';
	require_once '../inc/common.php';
	$db->query('set names utf8');
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$dateline=time();
	$update="update article set title='$title',author='$author',body='$content',created_at='$dateline' where id='$id'";
	$stmt=$db->prepare($update);
	$stmt->execute();
	if(!$stmt)
		echo "发表文章失败";
	else
	{
		echo "修改成功,";

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="3; url=index.php" />
	<title>Document</title>
</head>
<body>
	
</body>
</html>