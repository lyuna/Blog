<?php 
	header("Content-type=text/html;charset=utf-8");
 ?>
 <!doctype html>
 <html>
 	<head>
 		<meta charset="UTF-8">
 	</head>
	<body>
		<form action="add.handle.php" method="post" name="form1" id="form1">
		<table width="779" border="0" cellpadding="8" cellspacing="1">
    <tr>
        <td colspan="2" align="center">文章发布</td>
    </tr>
    <tr>
        <td width="119">标题</td>
        <td width="625"><label for="title"></label>
        <input type="text" name="title" id="title"></td>
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
        <td colspan="2" align="right"><input type="reset" id="reset" name="reset" value="重置"></td>
        <td colspan="2" align="left"><input type="submit" id="button" name="button" value="发布"></td>
    </tr> 
    </table>
		</form>
	</body>
 </html>