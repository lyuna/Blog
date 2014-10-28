<?php 
    require_once '../inc/db.php';
    $sql="select * from article";
    $stmt=$db->prepare($sql);
    $res=$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <title>L的博客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一个正在等待开掘的小白</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="../css/index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="register">
            <li><a href="../session/onload.php">登陆</a></li>
            <li><a href="../user/new.php">注册</a></li>
        </div>
        <div class="blog-nav">                                     <!-- 导航区 -->
            <img src="../image/l_small.png">                          <!-- 插入logo -->
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
                        <li name="author">作者</li>
                        <li name="time">发布日期</li>
                    </ul>
               </div>
            <div class="blog-content-content">
           <?php
                // if(!empty($data))
                // {
                //     foreach ($data as $value) {
           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    $value=$row;
            ?>
            <div class="blog-content-content-list">
            <ul>
                <li><a href="./show.php?id=<?php echo $value['id'] ;?>"><?php echo $value['title']; ?></a></li>
                <li><?php echo $value['author']; ?></li>
                <li><?php echo $value['created_at'] ?></li>
            </ul>
            </div>
            <?php
                    }
             ?>
            </div>
        </div>
        <div class="blog-foot">
            <div class="will_be_hidden">
                <a href="add.php"><i>写博客</i></a>
            </div>
        </div>
    </body>
</html>