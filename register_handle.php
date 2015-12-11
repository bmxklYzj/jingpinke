<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 17:11
 */
require_once "connect.php";

session_start();

if($_GET['act']=="check"){
    $xuehao=$_GET['xuehao'];
    $sql="select * from user where xuehao='{$xuehao}'";
    $query=mysql_query($sql);
    $cnt=mysql_num_rows($query);
    echo $cnt;
}else{

    $xuehao=inject_check($_POST['xuehao']);
    $username=inject_check($_POST['username']);
    $nicheng=inject_check($_POST['nicheng']);
    $password=md5(inject_check($_POST['password']));

    $sql="insert into user (xuehao, username, nicheng, password) VALUES ('$xuehao','$username', '$nicheng', '$password' )";
    $query=mysql_query($sql);
//$cnt=mysql_num_rows($query,$conn);
    $user_id=mysql_insert_id();
    if($user_id){
        echo "<script>alert('注册成功！');window.location.href='index.php'</script>";
    }else{
        echo "error!";
    }

    $_SESSION['username']=$username;
    $_SESSION['nicheng']=$nicheng;
    $_SESSION['xuehao']=$xuehao;
    $_SESSION['user_id']=$user_id;
}