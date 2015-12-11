<?php
/**
 * Created by PhpStorm.
 * User: ZLei
 * Date: 2015/11/5
 * Time: 14:48
 */
    $con = mysql_connect("localhost","root","yzj19950111");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_query("set names utf8");
    mysql_select_db("jingpinke",$con);

?>