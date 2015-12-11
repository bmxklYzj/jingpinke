<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/10/23
 * Time: 17:56
 */

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "yzj19950111");

$conn = mysql_connect(HOST, USER, PASSWORD);
mysql_query("set names utf8");
mysql_select_db("jingpinke", $conn);
if(!$conn){
    die("cannot connect to DB");
}


function inject_check($Sql_Str) {
    $check=preg_match('/select|insert|update|delete|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i',$Sql_Str);
    if ($check) {
        echo '<script language="JavaScript">alert("非法数据");</script>';
        exit();
    }else{
        return $Sql_Str;
    }
}