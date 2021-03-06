<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Problem-<?php echo ($data['id']); ?></title>
	<link rel="stylesheet" type="text/css" href="/Public/CSS/main.css">
    <style type="text/css">
        .context h1{ text-align: center; font-weight: bold; color: #323232; }
        .context .lab { display: inline-block; font-size: 1.1em;  color:#323232; text-align: center; padding-left:0.8em; height: 2em; line-height: 2em; border-left: 0.3em solid steelblue;}
        .context .description { font-size: 1em; background:rgba(228, 240, 248 ,0.8); line-height: 1.5em; border-radius: 0.3em; margin:0.5em 0; color:#555; border:1px solid #eee; padding: 10px;}

        .context textarea {  font-size: 1.1em; background:rgba(228, 240, 248 ,0.8);  border-radius: 0.3em; margin:0.5em 0; text-indent: 1em; color:#555; border:1px solid #eee; margin-top: 0.5em; width: 100%; padding-top:0.5em;}

        .context button {
            background: steelblue; color:#fff; font-weight: bold; text-align: center; padding: 0.8em 1.5em; border-radius: 0.3em; border:none; float: right;
        }

    </style>
</head>
<body>
	<div class="top"></div>
    <div class="main">
        <div class="pic">
            <div id="logo"><img src="/Public/Picture/Photoshop.png" style="height:100px;weight:100px;"></div>
            <div id="title">
                <h1>在线考试系统</h1>
                <h2>快乐考试，考试快乐</h2>
            </div>
            <div style="float:right;width:100px;height:100px;">
                <p><?php echo session('username'); if (session('utype') == 1): ?>
                    同学
                <?php else : ?>
                    <?php if (session('utype') == 2): ?>
                        老师
                    <?php else : ?>
                        管理员
                    <?php endif ?>
                <?php endif ?></p>
                <a href='<?php echo U('Login/loginout');?>')>退出登录</a>
            </div>
        </div>
        <div class="menu">
            <ul class="menulist">
                <li>
                    <a href="<?php echo U('Index/index');?>">首页</a>
                </li>
                <li>
                    <a href="<?php echo U('Exam/listexam');?>">在线考试</a>
                </li>
                <li>
                    <a href="<?php echo U('Exam/listexam');?>">成绩查询</a>
                </li>
                <li>
                    <a href="<?php echo U('Problem/listproblem');?>">在线练习</a>
                </li>
                <li>
                    <a href="<?php echo U('Status/status');?>">状态查询</a>
                </li>
            </ul>
        </div>
        <div class="context">
			<h1><?php echo ($data['title']); ?></h1>
			<div class="lab">题目描述</div>
			<div class="description"><?php echo ($data['content']); ?></div>
			<div class="lab">题型</div>
			<div class="description"><?php echo ($data['type']); ?></div>
			<div class="lab">你的答案</div>
			<div>
				<form name="submitForm" id="submitprb" action="<?php echo ($submiturl); ?>" method="post">
					<input name="pid" value="<?php echo ($data['id']); ?>" style="display:none;">
					<textarea rows="20" cols="20" name="answer"></textarea>
					<button type="submit">提交答案</button>
				</form>
			</div>
		</div>
		<div class="footer">
            <ul class="footer_list">
                <li class="footer_href">
                    <a href="<?php echo U('Index/index');?>">Home</a>
                    |
                    <a href="#top">Top</a>
                </li>
                <li class="footer_server">
                    <p>Online Examination System 1.0</p>
                    <p>Copyright © 2005-2016. All Rights Reserved.</p>
                    <p>Designer & Developer : ZhuXiangdong</p>
                </li>
                <li>
                    <?php if (session('utype') == 3): ?>
                        <a href="<?php echo U('Admin/administration');?>">Administration</a>
                    <?php else: ?>
                        <p>Administration</p>
                    <?php endif ?></p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>