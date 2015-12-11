<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/10/30
 * Time: 0:04
 * 此文件用于处理login.php穿过来的数据，连接数据库并跳转到main.php
 */
header("Content-type: text/html; charset=utf-8");
session_start();
require_once "../connect.php";
$name=inject_check($_POST['nicheng']);
$password=inject_check($_POST['password']);

$sql="select * from admin";
$query = mysql_query($sql);
$row=mysql_fetch_array($query);
$oldName=$row['name'];
$oldPassword=$row['password'];
if($name==$oldName && $password==$oldPassword){
    $_SESSION['admin']=$name;
    echo "<script>alert('登录成功！');window.location.href='video_show.php'</script>";
}else{
    echo "<script>alert('错误的用户名密码！');window.history.go(-1);</script>";
}