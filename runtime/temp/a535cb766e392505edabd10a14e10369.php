<?php /*a:3:{s:93:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/install/view/index/step2.html";i:1558689957;s:126:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/install/view/../../../application/install/view/index/head.html";i:1558690550;s:126:"/www/wwwroot/www.pollylee.cn/web/cztdoc.pollylee.cn/application/install/view/../../../application/install/view/index/foot.html";i:1558690485;}*/ ?>
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
.layui-table td, .layui-table th{text-align:left;}
.layui-table tbody tr.no{background-color:#f00;color:#fff;}
</style>
<div class="install-box">
    <fieldset class="layui-elem-field layui-field-title">
        <legend>运行环境检测</legend>
    </fieldset>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th>环境名称</th>
                <th>当前配置</th>
                <th>所需配置</th>
            </tr> 
        </thead>
        <tbody>
            <?php if(is_array($data['env']) || $data['env'] instanceof \think\Collection || $data['env'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['env'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="<?php echo htmlentities($vo[4]); ?>">
                <td><?php echo htmlentities($vo[0]); ?></td>
                <td><?php echo htmlentities($vo[3]); ?></td>
                <td><?php echo htmlentities($vo[2]); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th>目录/文件</th>
                <th>所需权限</th>
                <th>当前权限</th>
            </tr> 
        </thead>
        <tbody>
            <?php if(is_array($data['dir']) || $data['dir'] instanceof \think\Collection || $data['dir'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['dir'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="<?php echo htmlentities($vo[4]); ?>">
                <td><?php echo htmlentities($vo[1]); ?></td>
                <td><?php echo htmlentities($vo[2]); ?></td>
                <td><?php echo htmlentities($vo[3]); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th>函数/扩展</th>
                <th>类型</th>
                <th>结果</th>
            </tr> 
        </thead>
        <tbody>
            <?php if(is_array($data['func']) || $data['func'] instanceof \think\Collection || $data['func'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['func'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="<?php echo htmlentities($vo[2]); ?>">
                <td><?php echo htmlentities($vo[0]); ?></td>
                <td><?php echo htmlentities($vo[3]); ?></td>
                <td><?php echo htmlentities($vo[1]); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="step-btns">
        <a href="?index" class="layui-btn layui-btn-primary layui-btn-big fl">返回上一步</a>

        <a href="?step=3" class="layui-btn layui-btn-big layui-btn-normal fr">进行下一步</a>
        <a target="_blank" href="http://www.maccms.com/doc/v10/faq.html" class="layui-btn layui-btn-big layui-btn-danger fr">常见问题解决办法</a>
    </div>
</div>
<div class="copyright">
    © 2018-2020 <a href="https://www.pollylee.cn" target="_blank">www.pollylee.cn</a> All Rights Reserved.
</div>
</body>
</html>