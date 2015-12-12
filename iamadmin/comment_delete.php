<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/12
 * Time: 12:01
 */

require_once "../connect.php";

$usercomment_id=$_GET['usercomment_id'];
mysql_query("delete from usercomment WHERE usercomment_id=$usercomment_id");
header("location:comment_show.php");