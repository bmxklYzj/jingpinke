<nav class="navbar navbar-inverse navbar-fixed-top my_navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand my_navbar-brand" href="index.php">
                <!--<img height="50" src="image/logo.jpg" alt="Brand">-->
                首页
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse my_navbar-nav" id="bs-example-navbar-collapse-1">
            <ul class="nav nav-pills">
                <!--<li class="active"><a href="#">L    ink <span class="sr-only">(current)</span></a></li>-->
                <li><a href="ppt.php">课件</a></li>
                <?php
//                每次点击给video.php传一个默认值，该默认值是最后一个添加的视频
                require_once "connect.php";
                $sql="select video_id from video";
                $query=mysql_query($sql);
                $row=mysql_fetch_array($query);
                $video_id=$row['video_id'];
//                echo "$video_id";
                ?>
                <li><a href="video.php?video_id=<?php echo "$video_id"; ?>">视频</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其它<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills navbar-right">
                <?php session_start();
                    if(isset($_SESSION['nicheng'])){
                        $nicheng=$_SESSION['nicheng'];
                        echo "<p style='float: left;margin-top: 7%;'>欢迎您:</p><li><a href='#'>$nicheng</a></li><li><a href='logout.php'>退出</a></li>";
                    }else{
                        ?>
                        <li><a href="login.php">登录</a></li>
                        <li><a href="register.php">注册</a></li>
                        <?php
                    }
                ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>