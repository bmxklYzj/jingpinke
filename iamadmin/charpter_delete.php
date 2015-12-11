<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/12
 * Time: 1:45
 */

require_once "../connect.php";
$charpter_id=$_GET['charpter_id'];
$query = mysql_query("delete from charpter where charpter_id=$charpter_id");

$q=mysql_query("delete from video where charpter_id=$charpter_id");
header("location:charpter_show.php");
