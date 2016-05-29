<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="/Public/CSS/main.css">
	<link rel="stylesheet" type="text/css" href="/Public/CSS/problem.css">
	<!-- <link rel="stylesheet" type="text/css" href="/Public/CSS/input.css"> -->
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
				<a href='<?php echo U('Login/loginout');?>'>退出登录</a>
			</div>
		</div>
		<div class="menu">
			<ul class="menulist">
				<li>
					<a href="">首页</a>
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
			<div style="text-align: center;"><h1>欢迎来到考试系统</h1></div>
			<div class="lab" style="font-weight:700;">功能介绍</div>
			<div class="description">
				<h3>学生功能</h3>
				1.<a href="">在线考试</a>：选择时限内的考试并作答
				<br>
				2.<a href="">成绩查询</a>：查询考试的成绩
				<br>
				3.<a href="">考题提交状态查询</a>：查询考试中提交的答案判题状态
				<br>
				4.<a href="">在线练习</a>：进行数据库在线练习
				<br>
				5.<a href="">练习提交状态查询</a>：查询在线练习中提交答案的判题状态
				<br>
				<h3>教师功能</h3>
				1.添加考试：开展一次新的考试
				<br>
				2.考题管理：管理考试题目
				<br>
				3.题库管理：管理基本题库
			</div>
		</div>
		<div class="footer">
			<ul class="footer_list">
				<li class="footer_href">
					<a href="">Home</a>
					|
					<a href="#top">Top</a>
				</li>
				<li class="footer_server">
					<p>Online Examination System 1.0</p>
					<p>Copyright © 2005-2016. All Rights Reserved.</p>
					<p>Designer & Developer : Zhuxiangdong</p>
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