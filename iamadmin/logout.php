<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 22:24
 */
session_start();
unset($_SESSION['admin']);
echo "<script>window.location.href='video_show.php'</script>";