<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name'));?> - 私人云服务</title>
	<link rel="shortcut icon" href="//<?php print($_SERVER['HTTP_HOST']) ?>/view/nexmoes/theme/favicon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/css/mdui.min.css">
	<link rel="stylesheet" href="//<?php print($_SERVER['HTTP_HOST']) ?>/view/nexmoes/theme/style.css">
	<script src="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/js/mdui.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">
	<script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/meting@2/dist/Meting.min.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
			<a href="/"><img class="avatar" src="//<?php print($_SERVER['HTTP_HOST']) ?>/view/nexmoes/picture/logo.jpg" /></a>
			<div class="navRight">
				<ul class="navul">
					<li class="navli"><a href="//bilibili2233.cf" target="_blank">博客</a></li>
					<li class="navli"><a href="//<?php print($_SERVER['HTTP_HOST']) ?>/?/login">登陆</a></li>
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
	<meting-js
		server="netease"
		type="playlist"
		id="2485662712"
		fixed="true">
	</meting-js>
	<!-- id改成自己的歌单号 -->
	<script src="//<?php print($_SERVER['HTTP_HOST']) ?>/view/nexmoes/theme/personjs.js"></script>
</body>
</html>