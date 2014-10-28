<?php  
   require_once('connect.php'); 
   mysql_query('set names utf8');
   $select="select * from article order by dateline desc";
   $query=mysql_query($select);
   if($query&&mysql_num_rows($query))
    {
        while($rows=mysql_fetch_assoc($query))
        {
            $data[]=$rows;
        }
    }
?>
<!doctype html>
<html>
    <head>
        <title>L的博客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一个正在等待开掘的小白</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../Bootstrap/bootstrap-3.2.0-dist/css/bootstrap.min.css">
        <link href="css/index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="blog-nav">                                     <!-- 导航区 -->
            <img src="image/l_small.png">                          <!-- 插入logo -->
            <ul>
                <li id="last-li"><a href="#">接受批评</a></li>
                <li><a href="#">留下脚印</a></li>
                <li><a href="#">主人资料</a></li>
                <li><a href="#">首页</a></li>
            </ul>
            <form class="Search">                                  <!-- 定义搜索表格 -->
                搜索：<input type="text" class="text">             <!-- 搜索标签 -->
                <input type="button" class="button" value="Search"><!-- 查询标签 -->
            </form>
        </div>
        <div class="blog-content">                  <!-- 内容区 -->
            <br/><br/><br/><br/>
            <fieldset>
                <legend>
                    <span>文章列表</span>
                </legend>
            </fieldset> 
               <div class="blog-content-title">
                    <ul>
                        <li style="display:none"></li>
                        <li name="title">标题</li>
                        <li name="description">内容简介</li>
                        <li name="author">作者</li>
                        <li name="dateline">发布日期</li>
                    </ul>
               </div>
            <div class="blog-content-content"> 
           <?php 
                if(!empty($data))
                {
                    foreach ($data as $value) {
            ?> 
            <div class="blog-content-content-list">
            <ul>
                <li><a href="admin/show.php?id=<?php echo $value['id'] ;?>"><?php echo $value['title']; ?></a></li>
                <li><?php echo $value['description']; ?></li>
                <li><a href="admin/show.php?id=<?php echo $value['id'] ;?>"><?php echo $value['author']; ?></li>
                <li><?php echo $value['dateline'] ?></li>
                <a href="admin/delete.handle.php?id=<?php echo $value['id']; ?>">删除</a><?php  ?>
                <a href="admin/modify.php?id=<?php echo $value['id']; ?>">修改</a> 
            </ul> 
            </div>
            <?php          
                    }
                }
             ?>
            </div>
           
        </div>
        <div class="blog-foot">
            <div class="will_be_hidden">
                <a href="admin/add.php"><i>写博客</i></a>
            </div>
        </div>
    </body>
</html>