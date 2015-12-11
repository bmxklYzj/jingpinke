<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台主页面</title>
    <link rel="stylesheet" type="text/css" href="../script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../script/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/houtai.css">

    <script src="../script/jquery.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</head>
<body>

<!--头部-->
<?php
require_once "houtai_header.php";
require "../connect.php";
$video_id=$_GET['video_id'];
echo "$video_id";
$query = mysql_query("select * from video where video_id='$video_id'");
$row = mysql_fetch_array($query);
$title=$row["title"];
$oldCharpter_id=$row["charpter_id"];
$location=$row['location'];
$info=$row["info"];
?>

<!--中间部分-->
<div class="container mycontainer">

    <!--    <p>选择上传类型</p>-->
    <form id="form1" action="insert_handle.php" method="post"  enctype="multipart/form-data">

        <div class="form-group">
            <label>视频标题：</label>
            <input type="text" class="form-control" name="title" placeholder="<?php echo "$title"; ?>">
        </div>
        <div class="form-group charpter-group-left">
            <label>选择章节</label>
            <select class="form-control charpter-left" name="charpter_select">
                <?php

                $query = mysql_query("select * from charpter");
                while($row=mysql_fetch_array($query)){
                    $title = $row["title"];
                    $charpter_id=$row['charpter_id'];
                    if($charpter_id==$oldCharpter_id){
                        echo "<option selected='selected'>";
                        echo $title;
                        echo "</option>";
                    }else{
                        echo "<option>";
                        echo $title;
                        echo "</option>";
                    }
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
            <label for="fileinput">选择文件</label>
            <input type="file" id="file" name="file">
        </div>
        <div class="form-group">
            <label>视频详细介绍：</label>
            <textarea class="form-control" rows="3" name="info" placeholder="<?php echo "$info"; ?>"></textarea>
        </div>


        <button type="submit" class="btn btn-primary mybutton">提交</button>
    </form>



</div>



<?php
require_once "../footer.php";
?>

</body>
</html>