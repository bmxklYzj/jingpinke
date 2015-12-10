<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/mystyle.css">

    <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script>



    <script>



        $(function(){

            var stuid = $("#stuid").val();
            var username = $("#username").val();
            var nicheng = $("#nicheng").val();
            var password1 = $("#password1").val();
            var password2 = $("#password2").val();

            //验证学号
            $("#stuid").blur(function(){

                stuid = $("#stuid").val();
                if(stuid == ""){
//                    alert("请输入学号！")
                    $("#stuid_tx").html("请输入学号！");
                }
                else if(!(/^\d{10}$/.test(stuid))){
                    $("#stuid_tx").html("学号必须是十位数字！");
//                    alert("学号必须是十位数字！");
                }
                else{
                    $("#stuid_tx").html("");
                }
            });

            //验证姓名
            $("#username").blur(function () {
                username = $("#username").val();
                if(username == ""){
                    $("#username_tx").html("姓名不能为空！");
                }else if(!(/[\u4E00-\u9FA5]{2,6}/.test(username))){
                    $("#username_tx").html("姓名必须为2-6位汉字！");
                }else{
                    $("#username_tx").html("");
                }
            });

            //验证昵称
            $("#nicheng").blur(function () {
                nicheng = $("#nicheng").val();
                if(nicheng == ""){
                    $("#nicheng_tx").html("昵称名不能为空！");
                }else if(!(/^.*?[a-zA-Z0-9].*$/.test(nicheng) && /^.{6,16}$/.test(nicheng))){
                    $("#nicheng_tx").html("昵称名由6-16字母或数字组成！");
                }else{
                    $("#nicheng_tx").html("");
                }
            });

            //验证密码password1格式是否正确
            $("#password1").blur(function () {
                password1 = $("#password1").val();
                if(password1 == ""){
                    $("#password1_tx").html("密码不能为空");
                }else if(!(/^.*?[\d]+.*$/.test(password1) && /^.*?[A-Za-z].*$/.test(password1) && /^.{6,16}$/.test(password1))){
                    $("#password1_tx").html("密码由6-16字母+数字组成!");
                }else{
                    $("#password1_tx").html("");
                }
            });

            //验证两次输入的密码是否一致password1 ?= password2
            $("#password2").blur(function () {
                password2 = $("#password2").val();
                password1 = $("#password1").val();
                if(password1 != password2){
                    $("#password2_tx").html("两次输入的密码不一致，请重新输入");
                    $("#password1").html("");
                    $("#password2").html("");
                }else{
                    $("#password2_tx").html("");
                }
            });

        })

    </script>

    <title>注册</title>
</head>
<body>
<div class="container container-register">
    <h3>欢迎注册精品课程网</h3>
    <form action="register.php" method="post">

        <div class="form-group">
            <label for="exampleInputXuehao">学号：</label>
            <input type="text" class="form-control" id="stuid"  placeholder="学号">
        </div>
        <span id="stuid_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputUsername">姓名：</label>
            <input type="text" class="form-control" id="username"  placeholder="姓名">
        </div>
        <span id="username_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputUsername">昵称名：(以后就要靠它来登录啦)</label>
            <input type="text" class="form-control" id="nicheng"  placeholder="昵称名">
        </div>
        <span id="nicheng_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputPassword">密码：</label>
            <input type="password" class="form-control" id="password1" placeholder="密码">
        </div>
        <span id="password1_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="Password4">验证密码：</label>
            <input type="password" class="form-control" id="password2" placeholder="验证密码">
        </div>
        <span id="password2_tx" class="stuinfo" style="float: left;"></span>
        <br>
        <div style="clear: both;"></div>
        <button type="reset" class="btn btn-primary reset">重置</button>
        <button type="submit" class="btn btn-primary login" >注册</button>
    </form>
</div>



<!--<div >-->
    <!--<footer class="footer navbar-fixed-bottom">-->
        <!--<div class="container">-->
            <!--<p class="pull-right"><a href="#">Back to top</a></p>-->
            <!--<p>© 西北工业大学 软件测试精品课  <a href="http://www.nwpu.edu.cn"> 西北工业大学</a></p>-->
        <!--</div>-->
    <!--</footer>-->
<!--</div>-->
</body>
</html>

<!--<iframe src="video/2.mp4" frameborder="0" style="width: 825px; height: 500px;"></iframe>-->
<!--<video class="video-main" src="video/2.mp4" controls="controls">视频</video>-->
