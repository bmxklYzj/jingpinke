<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/11/6
 * Time: 22:54
 */
require_once "../connect.php";


$new_charpter = $_POST["new_charpter"];
if($new_charpter != ""){
    echo "<script>alert('成功添加章节：".$new_charpter."')</script>";
    $query = mysql_query("insert into charpter (title) VALUES ('$new_charpter')");
    header("location:ppt_insert.php");
}else{
    $charpter_select = $_POST["charpter_select"];

    $query = mysql_query("select * from charpter where title = '".$charpter_select."'");
    $row = mysql_fetch_array($query);
    $id = $row["charpter_id"];

//echo "<script>alert('$id')</script>";



    move_uploaded_file($_FILES["file"]["tmp_name"], iconv("UTF-8", "gb2312", "../ppt/".$_FILES["file"]["name"]));
    mysql_query("insert into video (title, info, location, clicktime, charpter_id, ppt) VALUES ('$_POST[title]', '$_POST[info]',  '".$_FILES["file"]["name"]."', 0, '$id', 1)");

    echo "<script>alert('添加成功！')</script>";
//$id = "video";
    header("location:ppt_show.php");
}


