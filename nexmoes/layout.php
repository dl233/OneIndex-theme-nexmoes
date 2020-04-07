<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name'));?> - 私人云服务</title>
	<link rel="shortcut icon" href="//localhost/theme/favicon.ico">
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<link rel="stylesheet" href="//localhost/theme/style.css">
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
	
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
			<a href="/"><img class="avatar" src="https://s1.ax1x.com/2020/04/05/GD4fr4.jpg" /></a>
			<div class="navRight">
				<ul class="navul">
					<li class="navli"><a href="//sjdnsadq.xg2.leapidc.xyz" target="_blank">博客</a></li>
					<li class="navli"><a href="/login">登陆</a></li>
				</ul>
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
  	</div>
	<script src="//localhost/theme/personjs.js"></script>
</body>
</html>