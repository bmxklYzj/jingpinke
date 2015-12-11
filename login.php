<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="script/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/mystyle.css">

    <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <title>登录</title>

    <script>
        $(function(){
            var nicheng = $("#nicheng").val();
            var password = $("#password").val();

            $("#nicheng").blur(function(){
               nicheng = $("#nicheng").val();
                if(nicheng == ""){
                    $("#nicheng_tx").html("用户名不能为空！");
                }else if(!(/^.*?[a-zA-Z0-9].*$/.test(nicheng) && /^.{6,16}$/.test(nicheng))){
                    $("#nicheng_tx").html("昵称名由6-16字母或数字组成！");
                }else{
                    $("#nicheng_tx").html("");
                }
            });

            $("#password").blur(function () {
                password = $("#password").val();
                if(password == ""){
                    $("#password_tx").html("密码不能为空！");
                }else if(!(/^.*?[\d]+.*$/.test(password) && /^.*?[A-Za-z].*$/.test(password) && /^.{6,16}$/.test(password))){
                    $("#password_tx").html("密码由6-16字母+数字组成!");
                }else{
                    $("#password_tx").html("");
                }
            });

        });
    </script>
</head>
<body>


    <div class="container container-register container-login">
        <h3>欢迎登录精品课程网</h3>
        <form action="login_handle.php" method="post" onsubmit="return regcheck()">

            <div class="form-group">
                <label for="exampleInputEmail1">昵称名：</label>
                <input type="text" class="form-control" id="nicheng" name="nicheng" placeholder="昵称名">
            </div>
            <span class="stuinfo" id="nicheng_tx"></span>
            <div class="form-group">
                <label for="exampleInputPassword1">密码：</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="密码">
            </div>
            <span class="stuinfo" id="password_tx"></span>
            <br>
            <div style="clear: both;"></div>
            <button type="reset" class="btn btn-primary reset">重置</button>
            <button type="submit" class="btn btn-primary login" >登录</button>
        </form>
    </div>

    <!-- footer-->

    <div>
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>© 西北工业大学 软件测试精品课  <a href="http://www.nwpu.edu.cn"> 西北工业大学</a></p>
            </div>
        </footer>
    </div>
</body>
</html>