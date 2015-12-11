
<!--查看所有章节列表-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看所有章节</title>
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
 * Time: 1:37
 */
require_once "houtai_header.php";
?>



<div class="container mycontainer">
    <table class="table table-striped">
        <tr>
            <th>章节id</th>
            <th>标题</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        require_once "../connect.php";
        $sql="select * from charpter";
        $query=mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            $charpter_id=$row['charpter_id'];
            $title=$row['title'];
            echo "<tr><td>$charpter_id</td><td>$title</td><td><a href='charpter_edit.php?charpter_id=$charpter_id'><img src='css/iconfont-bianji.png'></a></td><td><a href='charpter_delete.php?charpter_id=$charpter_id'><button onclick='return confirm_chk()'><img src='css/iconfont-delete.png'></button></a></td></tr>";
        }
        ?>
    </table>
        <form method="post" action="charpter_insert.php">
            <div class="form-group" style="float: none">
                <label for="exampleInput">新建章节</label>
                <input type="text" class="form-control" id="exampleInput" name="new_charpter" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">新建</button>
        </form>
</div>

<script>
    function confirm_chk(){
        var r=confirm('是否要删除该章节,及其所包含的所有视频?');
        if(r==true){return true;}
        else return false;
    }
</script>
</body>
</html>