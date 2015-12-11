<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 21:00
 */
require_once "connect.php";
header("Content-type:text/html; charset=utf-8");
session_start();
$nicheng=inject_check($_POST['nicheng']);
$password=md5(inject_check($_POST['password']));

$sql="select * from user where nicheng='$nicheng'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$cnt=mysql_num_rows($query);

if(!$cnt){
    echo "<script>alert('用户名不存在，请重新输入！');window.history.go(-1);</script>";
}else{
    $oldPassword=$row['password'];
    $username=$row['username'];
    $xuehao=$row['xuehao'];
    $user_id=$row['user_id'];
    if($oldPassword==$password){
        $_SESSION['nicheng']=$nicheng;
        $_SESSION['username']=$username;
        $_SESSION['xuehao']=$xuehao;
        $_SESSION['user_id']=$user_id;
        echo "<script>alert('登录成功！');window.location.href='index.php'</script>";
    }else{
        echo "<script>alert('用户名密码不匹配，请重新输入！');window.history.go(-1);</script>";
    }
}