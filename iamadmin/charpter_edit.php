
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看所有章节</title>
    <link rel="stylesheet" type="text/css" href="../script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../script/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/video_view.css">

    <script src="../script/jquery.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/12
 * Time: 1:43
 */
require_once "houtai_header.php";
require_once "../connect.php";
$charpter_id=$_GET['charpter_id'];
$sql="select * from charpter where charpter_id='$charpter_id'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$title=$row['title'];
//echo "$charpter_id";
//echo "$title";
?>
<div class="container mycontainer">
    <form method="post" action="charpter_edit_handle.php">
        <div class="form-group" style="float: none">
            <label for="exampleInput">修改章节</label>
            <input type="text" class="form-control" id="exampleInput" name="new_charpter" placeholder="" value="<?php echo "$title"; ?>">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>
</div>


</body>
</html>