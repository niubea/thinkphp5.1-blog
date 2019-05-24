<?php /*a:2:{s:91:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/admin/view/login/index.html";i:1558689957;s:92:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/admin/view/public/basic.html";i:1558690572;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'逍遥PHP后台管理')); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/plugs/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/static/plugs/font-awesome-4.7.0/css/font-awesome.css" media="all" />
    <link rel="stylesheet" href="/static/css/admin/liboblog.css" media="all" />
    
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/static/css/admin/login.css" media="all">
</head>

</head>
<body class="<?php echo htmlentities((isset($body) && ($body !== '')?$body:'childrenBody')); ?>">


<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2><?php echo htmlentities((isset($SysInfo['ManageName']) && ($SysInfo['ManageName'] !== '')?$SysInfo['ManageName']:'')); ?></h2>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
                <input type="text" id="username" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                <input type="password" id="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
            </div>

            <!--判断是否开启验证码登录-->
            <!--<?php if($SysInfo['VercodeType'] == 1): ?>-->
            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-xs7">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>
                        <input type="text" id="vercode" name="vercode" id="LAY-user-login-vercode" placeholder="图形验证码" class="layui-input">
                    </div>
                    <div class="layui-col-xs5">
                        <div style="margin-left: 10px;">
                            <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?seed='+Math.random()" class="layadmin-user-login-codeimg" lay-submit lay-filter="LAY-user-get-vercode">
                        </div>
                    </div>
                </div>
            </div>
            <!--<?php endif; ?>-->

            <div class="layui-form-item" style="margin-bottom: 20px;">
                <input type="checkbox" name="remember" lay-skin="primary" title="记住密码">
                <a href="#" class="layadmin-user-jump-change layadmin-link" style="margin-top: 7px;">忘记密码？</a>
            </div>
            <div class="layui-form-item">
                <button class="layui-btn layui-btn-fluid" id="submitBtn">登 入</button>

            </div>
            <div class="layui-trans layui-form-item layadmin-user-login-other">
                <label>社交账号登入</label>
                <a href="javascript:;"><i class="layui-icon layui-icon-login-qq"></i></a>
                <a href="javascript:;"><i class="layui-icon layui-icon-login-wechat"></i></a>
                <a href="javascript:;"><i class="layui-icon layui-icon-login-weibo"></i></a>

                <a href="reg.html" class="layadmin-user-jump-change layadmin-link">注册帐号</a>
            </div>
        </div>
    </div>

    <div class="layui-trans layadmin-user-login-footer">

        <p><?php echo htmlentities((isset($SysInfo['FooterName']) && ($SysInfo['FooterName'] !== '')?$SysInfo['FooterName']:'')); ?> - <a href="<?php echo htmlentities((isset($SysInfo['BeianUrl']) && ($SysInfo['BeianUrl'] !== '')?$SysInfo['BeianUrl']:'')); ?>" target="_blank"><?php echo htmlentities((isset($SysInfo['Beian']) && ($SysInfo['Beian'] !== '')?$SysInfo['Beian']:'')); ?></a></p>
        <p>
            <span><a href="<?php echo htmlentities((isset($SysInfo['HomeUrl']) && ($SysInfo['HomeUrl'] !== '')?$SysInfo['HomeUrl']:'')); ?>" target="_blank">前往逍遥PHP社区</a></span>
        </p>
    </div>
</div>


<script type="text/javascript" src="/static/plugs/jquery/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/static/plugs/zoomify/js/zoomify.min.js"></script>
<script type="text/javascript" src="/static/plugs/layui/layui.all.js"></script>
<script type="text/javascript" src="/static/admin.js"></script>

<script>
    /**
     * 跳出ifram框架
     */
    if (top.location != self.location) top.location = self.location;

    /**
     * 登录
     */
    $("#submitBtn").click(function () {
        var data = {
            username: $("#username").val(),
            password: $("#password").val(),
            vercode: $("#vercode").val(),
        };
        $.request.post("<?php echo url('@admin/login'); ?>", data, function (res) {
            $.msg.success(res.msg, function () {
                window.location.href = "<?php echo url('@admin/index'); ?>";
            })
        });
        return false;
    });
</script>


</body>
</html>