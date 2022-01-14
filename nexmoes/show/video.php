<?php view::layout('layout')?>
<?php
$item['thumb'] = onedrive::thumbnail($item['path']);
?>
<?php view::begin('content');?>
<link class="dplayer-css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.css">
<script src="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.js"></script>
<div class="mdui-container-fluid">
	<div class="nexmoe-item">
		<div class="mdui-center" id="dplayer"></div>
	</div>
</div>
<script>
const dp = new DPlayer({
	container: document.getElementById('dplayer'),
	lang:'zh-cn',
	video: {
	    url: '<?php e($item['downloadUrl']);?>',
	    pic: '<?php @e($item['thumb']);?>',
	    type: 'auto'
	}
});
</script>
<p id='url'  copy-url=<?php e($item['downloadUrl']);?> mdui-dialog="{target: '#copy-url-alt'}" onclick='CopyUrl()' class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent mdui-fab-fixed-2">
<i class="mdui-icon material-icons">content_copy</i></p>
  <div class="mdui-dialog" id="copy-url-alt">
    <div class="mdui-dialog-title">复制成功！</div>
    <div class="mdui-dialog-content">你已经成功复制了播放链接，现在到本地播放器下粘贴播放吧！</div>
    <div class="mdui-dialog-actions">
      <button class="mdui-btn mdui-ripple" mdui-dialog-close>退出</button>
    </div>
  </div>
<a href="<?php e($url);?>" class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent"><i class="mdui-icon material-icons">file_download</i></a>
<?php view::end('content');?>