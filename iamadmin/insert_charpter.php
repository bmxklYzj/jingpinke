<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/11/7
 * Time: 8:42
 */
require_once "../connect.php";

$new_charpter = $_POST["new_charpter"];
echo "<script>alert('$new_charpter')</script>";
$query = mysql_query("insert into charpter (title) VALUES ($new_charpter)");
header("location:insert.php");
