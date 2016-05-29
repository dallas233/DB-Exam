<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Problem Set</title>
	<link rel="stylesheet" type="text/css" href="/Public/CSS/pagelist.css">
	<link rel="stylesheet" type="text/css" href="/Public/CSS/main.css">
	<link rel="stylesheet" type="text/css" href="/Public/CSS/table.css">
    <link rel="stylesheet" type="text/css" href="/Public/CSS/input.css">
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
            <div class="lab-full" style="margin-bottom:10px;font-weight:700;">
                在线练习
                <?php if (session('utype') == 2): ?>
                    <a href="<?php echo U('add');?>" style="float:right;margin-right:30px;">添加题目</a>
                <?php else: ?>
                <?php endif ?></p>
            </div>
			<table class="bordered">
				<thead>
					<tr>
						<th style="width:50px;">题目id</th>
                        <th>标题</th>
						<th style="width:50px;">题型</th>
                        <?php if (session('utype') == 2): ?>
                            <th style="width:50px;">操作</th>
                        <?php else: ?>
                        <?php endif ?></p>
						
						<!-- <th style="width:75px;">通过率</th> -->
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($vo["id"]); ?></td>
                            <td>
                                <a href="<?php echo U('showproblem?pid='.$vo['id']);?>"><?php echo ($vo["title"]); ?></a>
                            </td>
							<td>
								<?php switch($vo['typeid']): case "1": ?>查找题<?php break;?>
									<?php case "2": ?>插入题<?php break;?>
									<?php case "3": ?>删除题<?php break;?>
									<?php case "4": ?>更新题<?php break;?>
                                    <?php case "5": ?>建表题<?php break; endswitch;?>
							</td>
                            <?php if (session('utype') == 2): ?>
                                <td><a href="<?php echo U('update?pid='.$vo['id']);?>">更新</a></td>
                            <?php else: ?>
                            <?php endif ?></p>
							<!-- <td>待完善</td> -->
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
		</div>
		<div class="pagelist"><?php echo ($page); ?></div>
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