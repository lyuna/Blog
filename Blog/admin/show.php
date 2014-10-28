<?php 
	header('Content-type:text/html;charset=utf-8');
	mysql_query('set names utf8');
	require_once('E:/Blog/connect.php');
	$id=$_GET['id'];
	$show="select * from article where id=$id";
	$query=mysql_query($show);
	$con=mysql_fetch_assoc($query);
 ?>
 <!doctype html>
 <html>
 	<head></head>
 	<body>
 			<table width="779" border="0" cellpadding="8" cellspacing="1">
    	<tr>
        	<td colspan="2" align="center">文章详情</td>
    	</tr>
    	<tr>
        	<td width="119">标题</td>
        	<td width="625"><label for="title"></label>
        	<input type="text" name="title" id="title" placeholder="<?php echo $con['title']; ?>"></td>
    	</tr>
    	<tr>
        	<td>作者</td>
        	<td><input type="text" name="author" id="author"></td>
    	</tr>
    	<tr>
        	<td>简介</td>
        	<td><label for="description"></label>
            <textarea   cols="60" rows="5" name="description" id="description"></textarea>
        </td>
    	</tr>
    	<tr>
        	<td>内容</td>
        	<td>
            <textarea id="content"  name="content" cols="60" rows="15"></textarea>
        	</td>
    	</tr>
    	<tr>
        	<td colspan="2" align="center"><input type="submit" id="button" name="button" value="发布"></td>
    	</tr> 
    </table>
 	</body>
 </html>