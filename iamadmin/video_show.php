<!--查看所有视频列表-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台主页面</title>
    <link rel="stylesheet" type="text/css" href="../script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../script/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/video_view.css">

    <script src="../script/jquery.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</head>
<body>

<!--头部-->
<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/11/6
 * Time: 21:32
 */
require_once "houtai_header.php";
?>



<div class="container mycontainer">
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>标题</th>
            <th>介绍</th>
            <th>阅读次数</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
            <?php
            require_once "../connect.php";

            $query = mysql_query("select * from video");
            while($row = mysql_fetch_array($query)){
                $video_id=$row["video_id"];
                $title=$row["title"];
                $info=$row["info"];
                $clicktime=$row["clicktime"];
                echo "<tr><td>$video_id</td><td>$title</td><td>$info</td><td>$clicktime</td><td><a href='video_edit.php?video_id=$video_id'><img src='css/iconfont-bianji.png'></a></td><td><a href='video_delete.php?video_id=$video_id'><button onclick='return show_confirm()'><img src='css/iconfont-delete.png'></button></a></td></tr>";
            }
            ?>
    </table>
</div>

<script>
    function show_confirm(){
        var r=confirm("确定要删除？");
        if(r==true){
            return true;
        }else{
            return false;
        }
    }
</script>

</body>
</html>
