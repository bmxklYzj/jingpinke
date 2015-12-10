<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/mystyle.css">
    <link rel="stylesheet" type="text/css" href="script/video.css">

    <title>ppt</title>
</head>
<body>
<!-- 导航栏-->
<?php
    require_once "header.php";
?>


<div class="container mycontainer">
    <!--        我是左侧导航栏-->
    <?php
    require_once "leftnav.php";
    ?>

    <div class="col-md-8">
        <div class="content-left">
            <div class="video-info">
                <h1>软件测试精品课程视频</h1>
                <div class="video_meta">
                    <div class="video-meta-left">阅读量 50</div>
                    <div class="video-info-right">
                        <div class="bdsharebuttonbox"><a class="bds_more" href="#" data-cmd="more"></a><a class="bds_qzone" title="分享到QQ空间" href="#" data-cmd="qzone"></a><a class="bds_tsina" title="分享到新浪微博" href="#" data-cmd="tsina"></a><a class="bds_tqq" title="分享到腾讯微博" href="#" data-cmd="tqq"></a><a class="bds_renren" title="分享到人人网" href="#" data-cmd="renren"></a><a class="bds_weixin" title="分享到微信" href="#" data-cmd="weixin"></a></div>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                        <span>分享</span>
                    </div>
                </div>
            </div>
            <div class="video">
                <!--这里还可以考虑插入flash播放器，以防止视频格式不是.mp4或是不支持的格式，参考极客学院的视频-->
                <iframe src="ppt/hello.swf" frameborder="0" style="width: 825px; height: 500px;"></iframe>
            </div>
            <div class="video-describe">
                <h2>视频介绍</h2>
                <hr/>
                <p>这里可以是的视频相关的介绍        这里可以是的视频相关的介绍        这里可以是的视频相关的介绍        这里可以是的视频相关的介绍        这里可以是的视频相关的介绍        这里可以是的视频相关的介绍        这里可以是的视频相关的介绍 </p>
                <hr/>
                <h2>相关资料下载</h2>
                <hr/>
                <div>
                    <a href="#">我是资料，点击我下载</a>
                </div>
                <hr/>
            </div>
            <div class="media media-bottom">
                <h2>评论专区</h2>
                <hr/>
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="image/logo.jpg" alt="Logo">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">我是评论标题</h4>
                    我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论
                </div>
            </div>
        </div>
    </div>
    <!--        这里是右侧栏-->
    <!--        <div class="col-md-2">-->
    <!--            <div class="content-right">-->
    <!--                <h2>更多相关视频</h2>-->
    <!--                <a class="more" href="#">更多视频1</a>-->
    <!--                <a class="more" href="#">更多视频1</a>-->
    <!--                <a class="more" href="#">更多视频1</a>-->
    <!--                <a class="more" href="#">更多视频1</a>-->
    <!--                <a class="more" href="#">更多视频1</a>-->
    <!--                <a class="more" href="#">更多视频1</a>-->
    <!--            </div>-->
    <!--        </div>-->
</div>

<?php
require_once "footer.php";
?>

<!--映入必要的js文件-->
<script src="script/jquery.min.js"></script>
<script src="script/bootstrap.min.js"></script>
<!--    leftnav左侧竖直导航栏的js-->
<script>
    $(document).ready(function(){
        $(".leftnav-container dd").hide();//默认先隐藏所有的dd
        $(".leftnav-container dt").click(function(){
            $(this).parent().find("dd").slideToggle();//当前dt对象所在的dd给toggle
            $(this).parent().find("dd").removeClass("menu");//给当前dd移除.menu类属性
            $(".leftnav-container dt img").attr("src","icon/right.png");
            $(this).parent().find('img').attr("src","icon/down.png");
            $(".menu").slideUp();//上滑
            $(this).parent().find("dd").addClass("menu");//给当前dd添加.menu类属性
        });

        $(".leftnav-container dd a").hover(function(){
            $(this).css("color", "#0AE0F0");
        },function(){
            $(this).css("color", "#FFF");
        });

//        $(".leftnav-container a").mouseover(function(){
//            $(this).mouseover(function(){
//                $(this).css("color", "#0AE0F0");
////                color: #0AE0F0;
//            });
//        });
//        $(".leftnav-container a").mouseout(function(){
//            $(this).mouseout(function(){
//                $(this).css("color", "#FFF");
////                color: #0AE0F0;
//            });
//        });
    });
</script>

</body>
</html>