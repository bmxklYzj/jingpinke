<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/10/23
 * Time: 17:56
 */

require "config.php";

function connectDB(){
    $conn = mysql_connect(HOST, USER, PASSWORD);
    mysql_query("set names utf8");
    mysql_select_db("class_sql", $conn);
    if(!$conn){
        die("cannot connect to DB");
    }else{
        return $conn;
    }
}