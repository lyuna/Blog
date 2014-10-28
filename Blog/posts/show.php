<?php 
	header('Content-type:text/html;charset=utf-8');
	require_once '../inc/db.php';
    $db->query('set names utf8');
	$id=$_GET['id'];
	$show="select * from article where id=$id";
	$stmt=$db->prepare($show);
	$stmt->execute();
    $res=$stmt->fetch(PDO::FETCH_ASSOC)
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
            <input type="text" name="title" id="title" placeholder="<?php echo $res['title']; ?>"></td>
        </tr>
        <tr>
            <td>作者</td>
            <td><input type="text" name="author" id="author" placeholder="<?php echo $res['author'] ?>"></td>
        </tr>
        <tr>
            <td>内容</td>
            <td>
            <textarea id="content"  name="content" cols="60" rows="15" placeholder="<?php echo $res['body'] ?>"></textarea>
            </td>
        </tr>
    </table>
    </body>
 </html>