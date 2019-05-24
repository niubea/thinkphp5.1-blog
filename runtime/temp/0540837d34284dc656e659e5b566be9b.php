<?php /*a:3:{s:93:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/install/view/index/step3.html";i:1558689957;s:126:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/install/view/../../../application/install/view/index/head.html";i:1558690550;s:126:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/install/view/../../../application/install/view/index/foot.html";i:1558690485;}*/ ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>liboBlog后台权限系统安装</title>
        <link rel="stylesheet" href="/static/plugs/layui/css/layui.css">
        <link rel="stylesheet" href="/static/css/install/admin_style.css">
        <link rel="stylesheet" href="/static/css/install/install.css">
        <script type="text/javascript" src="/static/plugs/layui/layui.js"></script>
        <script>
            var ROOT_PATH = "__ROOT__", ADMIN_PATH="<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>";
        </script>
    </head>
<body>
<div class="header">
    <h1>感谢您选择liboBlog后台权限系统建站</h1>
</div>
<style type="text/css">
    .layui-table td, .layui-table th {
        text-align: left;
    }

    .layui-table tbody tr.no {
        background-color: #f00;
        color: #fff;
    }
</style>
<div class="install-box">
    <fieldset class="layui-elem-field layui-field-title">
        <legend>数据库配置</legend>
    </fieldset>
    <form class="layui-form layui-form-pane" action="?step=4" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">服务器地址</label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="hostname" lay-verify="title" value="127.0.0.1">
            </div>
            <div class="layui-form-mid layui-word-aux">数据库服务器地址，一般为127.0.0.1</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">数据库端口</label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="hostport" lay-verify="title" value="3306">
            </div>
            <div class="layui-form-mid layui-word-aux">系统数据库端口，一般为3306</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">数据库名称</label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="database" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux">系统数据库名,必须包含字母</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">数据库账号</label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input" name="username" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux">连接数据库的用户名</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">数据库密码</label>
            <div class="layui-input-inline w200">
                <input type="password" class="layui-input" name="password" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux">连接数据库的密码</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">覆盖数据库</label>
            <div class="layui-input-inline w200">
                <input type="radio" name="cover" value="1" title="覆盖">
                <input type="radio" name="cover" value="0" title="不覆盖" checked>
            </div>
        </div>
        <div class="layui-form-item">
            <button type="submit" class="layui-btn fl" style="margin-left:120px;" lay-submit="" lay-filter="formTest">测试数据连接</button>
            <div class="layui-form-mid layui-word-aux">请先点击 【测试数据连接】 再安装</div>
        </div>
    </form>
    <form class="layui-form layui-form-pane" action="?step=5" method="post">
        <input type="hidden" name="install_dir" value="<?php echo htmlentities($install_dir); ?>">
        <fieldset class="layui-elem-field layui-field-title">
            <legend>后台路径设置</legend>
        </fieldset>
        <div class="layui-form-item">
            <label class="layui-form-label">后台的地址</label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input admin_url" name="admin_url" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux">后台的地址默认为admin（建议不要设置为admin）</div>
        </div>
        <fieldset class="layui-elem-field layui-field-title">
            <legend>管理账号设置</legend>
        </fieldset>
        <div class="layui-form-item">
            <label class="layui-form-label">管理员账号</label>
            <div class="layui-input-inline w200">
                <input type="text" class="layui-input username" name="username" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux">管理员账号最少4位</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">管理员密码</label>
            <div class="layui-input-inline w200">
                <input type="password" class="layui-input password" name="password" lay-verify="title">
            </div>
            <div class="layui-form-mid layui-word-aux">保证密码最少6位</div>
        </div>
        <div class="step-btns">
            <a href="?step=2" class="layui-btn layui-btn-primary layui-btn-big fl">返回上一步</a>
            <button  type="submit" class="layui-btn layui-btn-big layui-btn-normal fr" lay-submit="" lay-filter="formSubmit">立即执行安装</button>
        </div>
    </form>
</div>
<div class="copyright">
    © 2018-2020 <a href="https://www.pollylee.cn" target="_blank">www.pollylee.cn</a> All Rights Reserved.
</div>
</body>
</html>
<script type="text/javascript">
    layui.use(['laydate', 'form', 'layer', 'table', 'laytpl'], function () {
        var form = layui.form,
            layer = parent.layer === undefined ? layui.layer : top.layer,
            $ = layui.jquery,
            laytpl = layui.laytpl,
            table = layui.table,
            laydate = layui.laydate;
        form.on('submit(formTest)', function (data) {
            var _form = '';
            if ($(this).attr('data-form')) {
                _form = $($(this).attr('data-form'));
            } else {
                _form = $(this).parents('form');
            }
            console.log(_form.serialize());
            layer.msg('数据提交中...', {time: 500000});
            $.ajax({
                type: "POST",
                url: _form.attr('action'),
                data: _form.serialize(),
                dataType: 'json',
                success: function (res) {
                    layer.msg(res.msg);
                }
            });
            return false;
        });
        form.on('submit(formSubmit)', function (data) {
            var _form = '';
            if ($(this).attr('data-form')) {
                _form = $($(this).attr('data-form'));
            } else {
                _form = $(this).parents('form');
            }
            console.log('执行安装');
            layer.msg('数据文件正在创建，请稍后...', {time: 500000});
            $.ajax({
                type: "POST",
                url: _form.attr('action'),
                data: {admin_url: $(".admin_url").val(), username: $(".username").val(), password: $(".password").val()},
                dataType: 'json',
                success: function (res) {
                    console.log(res);
                    if (res.code == 1) {
                        layer.msg(res.msg, function () {
                            window.location.href = '/' + $(".admin_url").val() + '.php';
                        });
                    } else {
                        layer.msg(res.msg);
                    }
                }
            });
            return false;
        });


    });
</script>