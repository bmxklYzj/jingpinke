<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: yzj-->
<!-- * Date: 2015/12/12-->
<!-- * Time: 11:40-->
<!-- */-->

<!--        我是左侧导航栏-->
    <div class="col-md-3 leftnav">
        <!--            我是导航栏，还没有内容-->


        <div class="leftnav-container">
            <?php
            require_once "connect.php";
            $sql="select * from charpter";
            $query=mysql_query($sql);
            while($row=mysql_fetch_array($query)){
                $charpter_id=$row['charpter_id'];
                $title=$row['title'];
                ?>
                <dl>
                    <dt><a style="color: #FFF;" href="#"><?php echo "$title"; ?></a><img src="icon/right.png"></dt>
                    <?php
                    $s="select * from video WHERE charpter_id='{$charpter_id }' and ppt=1";
                    $q=mysql_query($s);
                    while($r=mysql_fetch_array($q)){
                        $titlevideo=$r['title'];
                        $video_id=$r['video_id'];
                        ?>
                        <dd><a href="video.php?video_id=<?php echo "$video_id"; ?>"><?php echo "$titlevideo"; ?></a></dd>

                        <?php
                    }
                    ?>
                    <!--                    <dd><a href="video.php">副标题1</a></dd>-->
                    <!--                    <dd><a href="#">副标题2</a></dd>-->
                    <!--                    <dd><a href="#">副标题3</a></dd>-->
                    <!--                    <dd><a href="#">副标题4</a></dd>-->
                    <!--                    <dd><a href="#">副标题5</a></dd>-->

                </dl>
                <?php
            }
            ?>


</div>
</div>

