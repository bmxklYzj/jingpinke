<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/mystyle.css">
    <!--<link rel="stylesheet" type="text/css" href="carousel.css">-->

    <title>精品课  参见：http://v3.bootcss.com/examples/carousel/</title>
</head>
<body>
<?php
require_once "header.php";
?>



<!--滚动画面-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="image/pic1.jpg" alt="...">
            <div class="carousel-caption">
                视频
            </div>
        </div>
        <div class="item"  role="listbox">
            <img src="image/pic3.jpg" alt="...">
            <div class="carousel-caption">
                课件
            </div>
        </div>
        <div class="item">
            <img src="image/pic2.jpg" alt="...">
            <div class="carousel-caption">
                资料下载
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--中间三个图片加文字的内容-->
<!--<div class="row">-->
<!--<div class="col-lg-4">-->
<!-- -->
<!--</div>-->
<!--</div>-->
<div class="container threePic">
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" height="140px" width="140px" src="image/t1.png" alt="...">
            <div class="caption">
                <h3>课件</h3>
                <p>课件课件课件课件课件课件课件课件课件课件课件</p>
                <p><a href="ppt.php" class="btn btn-primary" role="button">More &rsaquo;&rsaquo;</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <img class="img-circle" height="140px" width="140px" src="image/t2.png" alt="...">
            <div class="caption">
                <h3>视频</h3>
                <p>视频视频视频视频视频视频视频视频视频视频视频</p>
                <p><a href="video.php" class="btn btn-primary" role="button">More &rsaquo;&rsaquo;</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <img class="img-circle" height="140px" width="140px" src="image/t3.png" alt="...">
            <div class="caption">
                <h3>资料</h3>
                <p>资料资料资料资料资料资料资料资料资料资料资料</p>
                <p><a href="video.php" class="btn btn-primary" role="button">More &rsaquo;&rsaquo;</a></p>
            </div>
        </div>
    </div>






</div>

<!-- FOOTER -->

<?php
require_once "footer.php";
?>


<script src="script/jquery.min.js"></script>
<script src="script/bootstrap.min.js"></script>
</body>
</html>