<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 20:55
 */
session_start();

unset($_SESSION['username']);
unset($_SESSION['xuehao']);
unset($_SESSION['nicheng']);
echo "<script>window.location.href='index.php';</script>";