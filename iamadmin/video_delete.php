<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/11
 * Time: 0:41
 */

require_once "../connect.php";
//echo "<script>confirm('确定要删除？');</script>";
$video_id=$_GET['video_id'];
$sql="delete from video where video_id=$video_id";
mysql_query($sql);

$s="delete from usercomment where video_id=$video_id";
mysql_query($s);

$sq="delete from uservideo where video_id=$video_id";
mysql_query($sq);
//header("location:video_show.php");
echo "<script>window.location.href='video_show.php'</script>";