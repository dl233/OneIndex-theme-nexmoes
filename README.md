# Nexmoes
OneIndex 自带主题 nexmoe 的美化修改 基于Zisbusy制作的 [nexmoe主题](https://github.com/Zisbusy/OneIndex-theme) 的二次修改

## 更新了什么(2022-1-14)

1. 视频页面增加复制地址到本地视频播放器url播放。
2. 修改演示地址。

## 如何使用

1. 将`nexmoes`文件夹放在网站根目录下的`view`文件夹里。
2. 进去oneindex管理页面，在网站主题选择 `nexmoes`，保存即可。
3. 头像可通过替换`picture`文件夹下的`logo.jpg`实现，博客地址及歌单根据需要修改`layout.php`。

## 演示效果
![](https://s1.ax1x.com/2020/04/07/G2dci8.png)

## 演示地址
1. [http://dl233.ml/demo](http://dl233.ml/demo)
2. [http://dl233.ml/](http://dl233.ml/)

## 调用
 [二次元图库](http://api.mtyqx.cn/) 。
 1. APlayer
 2. metingJS

## 你需要知道的东西
1. 视频播放过慢，建议使用多线程播放器PotPlayer或者QQ影音，右键视频页面下载按钮后复制下载链接到播放器里，选择打开URL的方式播放。
2. 同理下载大型文件缓慢可以使用多线程下载工具IDM或者FDM。
3. 因主题精简了对于图片和视频的展示，更专注于视频和图片内容的展示，引用连接部分已删除，引用链接直接复制下载按钮即可。
4. QQ浏览器下请禁用或删除 【图片查看编辑器 via QQ浏览器】 插件，已知该插件会破坏部分样式，目前已知干扰是图片浏览页面不能滑动等异常。
5. 开启伪静态环境时，请注意在OneIndex的后台管理-基本设置-需要隐藏的目录中添加 `view` 关键词，以防止在网盘根目录下出现view目录时与本地资源相冲突的情况。

## OneIndex
1. [下载地址](http://dl233.ml/demo/?/soft/oneindex-master.zip)