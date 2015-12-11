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
        <tr>
            <?php
            require_once "../connect.php";

            $query = mysql_query("select * from resource_ppt");
            while($row = mysql_fetch_array($query)){
                $Res_ResID=$row["Res_ResID"];
                $Res_Resname=$row["Res_Resname"];
                $Res_Resinst=$row["Res_Resinst"];
                $Res_ReadTime=$row["Res_ReadTime"];
                echo "<tr><td>$Res_ResID</td><td>$Res_Resname</td><td>$Res_Resinst</td><td>$Res_ReadTime</td><td><a href='#'><img src='css/iconfont-bianji.png'></a></td><td><a href='#'><img src='css/iconfont-delete.png'></a></td></tr>";
            }
            ?>
        </tr>
    </table>
</div>



</body>
</html>
