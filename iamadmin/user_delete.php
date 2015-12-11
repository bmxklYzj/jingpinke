<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 23:09
 */
require_once "../connect.php";

$user_id=$_GET['user_id'];
//echo "$user_id";
$sql="delete from user where user_id=$user_id";
$query=mysql_query($sql);
//$cnt=mysql_num_rows($query, $conn);//哎，真是作死啊，忘写连接数据库require了，导致找了好久的错！真是悲剧啊
//echo "$cnt";
////echo "$query";
echo "<script>window.location.href='user.php'</script>";