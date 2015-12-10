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
require_once "../functions.php";
connectDb();

//if($_FILES["file"]["error"] > 0){
//    echo "Error: ".$_FILES["file"]["error"]."</br>";
//}else {
//    echo "upload name:" . $_FILES["file"]["name"];
//    echo "type:" . $_FILES["file"]["type"];
//    echo "size:" . ($_FILES["file"]["size"] / 1024) . "kb";
//    echo "tmp_name" . $_FILES["file"]["tmp_name"];
//}
//echo "<br>"."$_POST[Res_name]";
//echo $_FILES["file"]["name"];

$new_charpter = $_POST["new_charpter"];
if($new_charpter != ""){
    echo "<script>alert('成功添加章节：".$new_charpter."')</script>";
    $query = mysql_query("insert into catalog (Cat_Name) VALUES ('$new_charpter')");
    header("location:insert.php");
}else{
    $charpter_select = $_POST["charpter_select"];
//echo "<script>alert($charpter_select==='第二章')</script>";
//if ($charpter_select=='第一章')
//{
//    echo "ok";
//}
//else
//{
//    echo "no";
//}
    $query = mysql_query("select * from catalog where Cat_Name = '".$charpter_select."'");
    $row = mysql_fetch_array($query);
    $id = $row["Cat_Char"];

//echo "<script>alert('$id')</script>";



    move_uploaded_file($_FILES["file"]["tmp_name"], iconv("UTF-8", "gb2312", "../video/".$_FILES["file"]["name"]));
    mysql_query("insert into resource_ppt (Res_Resname, Res_Resinst, Res_location, Res_ReadTime, Res_ResChar) VALUES ('$_POST[Res_name]', '$_POST[Res_info]',  '".$_FILES["file"]["name"]."', 0, '$id')");

    echo "<script>alert('添加成功！')</script>";
//$id = "video";
    header("location:ppt_show.php");
}


