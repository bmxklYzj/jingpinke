<!--查看所有章节列表-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看所有评论</title>
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
 * Date: 2015/12/12
 * Time: 11:53
 */
require_once "houtai_header.php";
?>



<div class="container mycontainer">
    <table class="table table-striped">
        <tr>
            <th>评论id</th>
            <th>视频/ppt id</th>
            <th>视频/ppt 标题</th>
            <th>用户id</th>
            <th>用户学号</th>
            <th>删除</th>
        </tr>
        <?php
        require_once "../connect.php";
        $sql="select * from usercomment";
        $query=mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            $video_id=$row['video_id'];
            $user_id=$row['user_id'];
            $usercomment_id=$row['usercomment_id'];

            $sql2="select * from video where video_id=$video_id";
            $query2=mysql_query($sql2);
            $row2=mysql_fetch_array($query2);
            $title=$row2['title'];

            $sql1="select * from user where user_id=$user_id";
            $query1=mysql_query($sql1);
            $row1=mysql_fetch_array($query1);
            $user_xuehao=$row1['xuehao'];

            echo "<tr><td>$usercomment_id</td><td>$video_id</td><td>$title</td><td>$user_id</td><td>$user_xuehao</td><td><a href='comment_delete.php?usercomment_id=$usercomment_id'><button onclick='return confirm_chk()'><img src='css/iconfont-delete.png'></button></a></td></tr>";
        }
        ?>
    </table>
<!--    <form method="post" action="charpter_insert.php">-->
<!--        <div class="form-group" style="float: none">-->
<!--            <label for="exampleInput">新建章节</label>-->
<!--            <input type="text" class="form-control" id="exampleInput" name="new_charpter" placeholder="">-->
<!--        </div>-->
<!---->
<!--        <button type="submit" class="btn btn-primary">新建</button>-->
<!--    </form>-->
</div>

<script>
    function confirm_chk(){
        var r=confirm('是否要删除该评论?');
        if(r==true){return true;}
        else return false;
    }
</script>
</body>
</html>