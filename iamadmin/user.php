
<!--查看所有用户列表-->
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
 * Date: 2015/12/10
 * Time: 22:49
 */
require_once "houtai_header.php";
?>



<div class="container mycontainer">
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>学号</th>
            <th>姓名</th>
            <th>昵称</th>
            <th>修改(由于修改用户没多大意思，没做，能删)</th>
            <th>删除</th>
        </tr>
        <tr>
            <?php
            require_once "../connect.php";

            $cnt=0;
            $sql="select * from user";
            $query=mysql_query($sql);
            while($row=mysql_fetch_array($query)){
                $cnt++;
                $user_id=$row['user_id'];
                $xuehao=$row["xuehao"];
                $username=$row["username"];
                $nicheng=$row["nicheng"];
                echo "<tr><td>$cnt</td><td>$xuehao</td><td>$username</td><td>$nicheng</td><td><a href='#'><img src='css/iconfont-bianji.png'></a></td><td><a href='user_delete.php?user_id=$user_id'><img src='css/iconfont-delete.png'></a></td></tr>";
            }
            ?>
        </tr>
    </table>
</div>


</body>
</html>
