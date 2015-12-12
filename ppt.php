<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/mystyle.css">
    <link rel="stylesheet" type="text/css" href="script/video.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>视频</title>
</head>
<body>
<!-- 导航栏-->
<?php
require_once "header.php";
?>


<div class="container mycontainer">
    <!--        我是左侧导航栏-->
    <?php
    require_once "ppt_leftnav.php";
    ?>

    <?php
    require_once "connect.php";
    //    session_start();


    $video_id=$_GET['ppt_id'];
    $_SESSION['ppt_id']=$video_id;
    $sql="select * from video where video_id=$video_id and ppt=1";
    $query=mysql_query($sql);
    $row=mysql_fetch_array($query);
    $title=$row['title'];
    $clicktime=$row['clicktime'];
    $clicktime+=1;
    mysql_query("update video set clicktime=$clicktime WHERE video_id=$video_id");
    $location=$row['location'];
    $info=$row['info'];
    $poster=$row['poster'];
    ?>

    <div class="col-md-8">
        <div class="content-left">
            <div class="video-info">
                <h1><?php echo "$title"; ?></h1>
                <div class="video_meta">
                    <div class="video-meta-left">阅读量 <?php echo "$clicktime"; ?></div>
                    <div class="video-info-right">
                        <div class="bdsharebuttonbox"><a class="bds_more" href="#" data-cmd="more"></a><a class="bds_qzone" title="分享到QQ空间" href="#" data-cmd="qzone"></a><a class="bds_tsina" title="分享到新浪微博" href="#" data-cmd="tsina"></a><a class="bds_tqq" title="分享到腾讯微博" href="#" data-cmd="tqq"></a><a class="bds_renren" title="分享到人人网" href="#" data-cmd="renren"></a><a class="bds_weixin" title="分享到微信" href="#" data-cmd="weixin"></a></div>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                        <span>分享</span>
                    </div>
                </div>
            </div>

            <div class="video">
                <!--这里还可以考虑插入flash播放器，以防止视频格式不是.mp4或是不支持的格式，参考极客学院的视频-->
                <iframe src="ppt/<?php echo "$location"; ?>" frameborder="0" style="width: 825px; height: 500px;"></iframe>
                <!--                <object data="video/2.mp4" width="320" height="240">-->
                <!--                    <embed width="320" height="240" src="ppt/hello.swf" />-->
                <!--                </object>-->

            </div>
            <div class="video-describe">
                <h2>视频介绍</h2>
                <hr/>
                <p><?php echo "$info"; ?></p>
                <hr/>
                <h2>相关资料下载</h2>
                <hr/>
                <div>
                    <a href="#">相关资料链接</a>
                </div>
                <hr/>
            </div>

            <div class="media media-bottom">
                <h2>评论专区</h2>
                <hr/>
                <?php
                //                $user_id=$_SESSION['user_id'];
                //                $sql="select * from usercomment where user_id='{$user_id}' and video_id='{$video_id}'";
                $sql="select * from usercomment where video_id='{$video_id}'";
                $query=mysql_query($sql);
                $cnt=0;
                $commentnum=mysql_num_rows($query);
                if(!$commentnum){
                    echo "<p>暂无评论</p>";
                }else{
                    while($row=mysql_fetch_array($query)){
                        $user_id=$row['user_id'];
                        $s="select * from user where user_id=$user_id";
                        $q=mysql_query($s);
                        $r=mysql_fetch_array($q);
                        $xuehao=$r['xuehao'];
                        $nicheng=$r['nicheng'];
                        ?>
                        <div class="comment">
                            <div class="media-left media-middle">
                                <p class="pleft">评论<?php $cnt++;echo "$cnt"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$xuehao"; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nicheng"?></p>
                            </div>
                            <div class="media-body">
                                <p><?php echo "{$row['content']}"; ?></p>

                            </div>
                        </div>

                        <?php
                    }
                }
                ?>




                <form method="post" action="ppt_comment.php">
                    <div class="media-bottom-comment">
                        <label>请文明发言:</label>
                        <textarea class="form-control comment" rows="3" name="info"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mybutton">提交</button>
                </form>
            </div>
        </div>
    </div>

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
    });
</script>

</body>
</html>
