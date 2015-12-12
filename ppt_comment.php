<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/11
 * Time: 23:47
 */
session_start();
require_once "connect.php";
header("Content-type:text/html; charset=utf-8");

if(!isset($_SESSION['nicheng'])){
    echo "<script>alert('请先登录！');window.location.href='index.php'</script>";
}else{
    $nicheng=$_SESSION['nicheng'];
    $sql="select user_id from user where nicheng='{$nicheng}'";
    $query=mysql_query($sql);
    $row=mysql_fetch_array($query);
    $user_id=$row['user_id'];

    $video_id=$_SESSION['ppt_id'];
    $comment=$_POST['info'];
//    echo "$video_id";
//    echo "$user_id";
//    echo "$comment";

    $s="insert into usercomment (content, user_id, video_id) VALUES ('$comment', '$user_id', '$video_id')";
    mysql_query($s);
    header("location:ppt.php?ppt_id=$video_id");
}