<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看所有ppt</title>
    <link rel="stylesheet" type="text/css" href="../script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../script/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/houtai.css">

    <script src="../script/jquery.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</head>
<body>

<!--头部-->
<?php
    require "../connect.php";

    require_once "houtai_header.php";
?>

<!--中间部分-->
<div class="container mycontainer">

    <!--    <p>选择上传类型</p>-->
    <form id="form1" action="ppt_insert_handle.php" method="post"  enctype="multipart/form-data">

        <div class="form-group">
            <label>ppt标题：</label>
            <input type="text" class="form-control" name="title" placeholder="输入视频标题">
        </div>
        <div class="form-group charpter-group-left">
            <label>选择章节</label>
            <select class="form-control charpter-left" name="charpter_select">
                <?php

                $query = mysql_query("select * from charpter");
                while($row=mysql_fetch_array($query)){
                    $title = $row["title"];
//                echo "<script>alert('$Cat_Name')</script>";
//                echo "<opton>'.$Cat_Name.'</opton>";
                    echo "<option>";
                    echo $title;
                    echo "</option>";
                }
                ?>
                <!--            <option>视频上传</option>-->
                <!--            <option>ppt上传</option>-->
                <!--            <option>word文档上传</option>-->
            </select>
        </div>

        <div>
            <div class="form-group charpter-group-right">
                <label>无所选章节？新建章节：</label>
                <input type="text" class="form-control charpter-right" name="new_charpter" placeholder="输入新章节">
            </div>
            <button type="submit" class="btn btn-primary charpter-btn">新建</button>
        </div>

        <div class="form-group">
            <label for="fileinput">选择ppt文件</label>
            <input type="file" id="file" name="file">
        </div>
<!--        <div class="form-group">-->
<!--            <label for="fileinput">选择视频静态图片</label>-->
<!--            <input type="file" id="file" name="poster">-->
<!--        </div>-->
        <div class="form-group">
            <label>ppt详细介绍：</label>
            <textarea class="form-control" rows="3" name="info"></textarea>
        </div>


        <button type="submit" class="btn btn-primary mybutton">提交</button>
    </form>



</div>



<?php
require_once "../footer.php";
?>
</body>
</html>