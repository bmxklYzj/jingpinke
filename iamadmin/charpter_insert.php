<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/12
 * Time: 1:58
 */
require_once "../connect.php";
$new_charpter=$_POST['new_charpter'];
$query = mysql_query("insert into charpter (title) VALUES ('$new_charpter')");
header("location:charpter_show.php");