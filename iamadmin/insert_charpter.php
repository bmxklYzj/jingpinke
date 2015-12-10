<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/11/7
 * Time: 8:42
 */
require_once "../functions.php";
connectDb();

$new_charpter = $_POST["new_charpter"];
echo "<script>alert('$new_charpter')</script>";
$query = mysql_query("insert into catalog (Cat_Name) VALUES ($new_charpter)");
//header("location:insert.php");
