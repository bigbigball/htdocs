<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 09:29:22
         compiled from "D:\xampp\htdocs\dingding\templates\pc\download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165645521f4841518e0-08050359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f5f7f651baf66a0c25fcbe2e78dc9843cc3bda' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\pc\\download.tpl',
      1 => 1428288642,
      2 => 'file',
    ),
    '9f67696afcaa3878e653a2fa47f4e8d438383ffd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\pc\\layout.tpl',
      1 => 1428289398,
      2 => 'file',
    ),
    '0cc7a7752d99de086439e02ae08a73911f919252' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\pc\\header.tpl',
      1 => 1428305349,
      2 => 'file',
    ),
    '8d83ff1d7c6a05264c6c958362ab20352e8a006a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\pc\\footer.tpl',
      1 => 1426511580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165645521f4841518e0-08050359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5521f4841b3382_16200088',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5521f4841b3382_16200088')) {function content_5521f4841b3382_16200088($_smarty_tpl) {?><!DOCTYPE html>
<html id="doc" class="">
<head>
	<meta charset="UTF-8">
	<title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
	<meta content="防盗器,报警器,门磁,丁盯智能门磁" name="keywords"/>
	<meta content="全球首款低功耗 WiFi门磁，支持远程监控、忘关提醒，并可自动识别主人身份，贴心不打扰您的生活。开启您的超智能健康生活，从丁盯开始。因为丁盯，所以安心！" name="description"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	
<link rel="stylesheet" href=/static/pc/css/download-3dd3586324ce79d26d3c3e9a85f80c9d.css>

</head>
<body id="" class=" ">
	<!--[if IE ]>
		<!--[if lt IE 7]><div class="page __page is-ie lt-ie9 lt-ie8 lt-ie7"><![endif]-->
		<!--[if IE 7]><div class="page __page is-ie lt-ie9 lt-ie8"><![endif]-->
		<!--[if IE 8]><div class="page __page is-ie lt-ie9"><![endif]-->
		<!--[if gt IE 8]><div class="page __page is-ie"><!--<![endif]-->
	<!--<![endif]-->
	<!--[if ! IE ]><!--><div class="page __page"><!--<![endif]-->


<?php /*  Call merged included template "pc/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("pc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tab'=>"download"), 0, '165645521f4841518e0-08050359');
content_552235d2a842b1_26584322($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pc/header.tpl" */?>

	<div>
		<img src="/static/pc/images/download/qrcode.png" class="down-qrcode" align ="left">
	</div>
<div class="main">

	<div class="btn-list">
		<a class="down-btn-ios" target="_blank" href="https://itunes.apple.com/cn/app/ding-ding-zhi-neng/id918361877?mt=8&uo=4"><span>下载 iOS 版</span></a>
	</div>
	<div class="btn-list">
		<a class="down-btn-android" target="_blank" href="http://bcs.duapp.com/android-release/yunding/dingding_yunding.apk"><span>下载 Android 版</span></a>
	</div>


</div>

<?php /*  Call merged included template "pc/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("pc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '165645521f4841518e0-08050359');
content_552235d2a9f846_14468421($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pc/footer.tpl" */?>


</div>

<div class="hide">
<?php echo '<script'; ?>
 type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9d8d43d99ad1e48c0faa87b90acfc184' type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
</div>


<?php echo '<script'; ?>
 type="text/javascript" src=/static/pc/js/lib/require-75e6d0132deb386b88774eb44091150d.js><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
require.config({
	baseUrl: '/static/pc/js',
	paths: {
		jquery: 'lib/jquery',
		underscore: 'lib/underscore'
	}
});
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 09:29:22
         compiled from "D:\xampp\htdocs\dingding\templates\pc\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_552235d2a842b1_26584322')) {function content_552235d2a842b1_26584322($_smarty_tpl) {?><div class="header clearfix" id="headerDiv">
	<div class="logo" id = "headerLogo"><a href = "/"><img src="/static/pc/images/common/logo.png" alt="logo" width="100%"></a></div>
	<ul class="nav clearfix" id="headerNav">
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="index") {?>class="curr"<?php }?>><a href="/dingding" id = "headertextwidth">首页</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="guide") {?>class="curr"<?php }?>><a href="/dingding/guide" id = "headertextwidth">咨询中心</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="opinion") {?>class="curr"<?php }?>><a href="/dingding/opinion" id = "headertextwidth">观点</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="about") {?>class="curr"<?php }?>><a href="/dingding/about" id = "headertextwidth">关于我们</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="download") {?>class="curr"<?php }?>><a href="/dingding/download" id = "headertextwidth">APP下载</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="news") {?>class="curr"<?php }?>><a href="/dingding/news" id = "headertextwidth">口碑</a></li>
	</ul>
</div>
<?php echo '<script'; ?>
  type="text/javascript">
function adjustHeader() {
	var clientWidth = document.body.clientWidth;
	var zoomRatio = clientWidth / 1920;
	var navHeight = zoomRatio * 98;
	var logoMarginTop = zoomRatio * 31;
	var navItemWidth = zoomRatio * 114;
	document.getElementById('headerNav').style.cssText = 'height:' + navHeight + 'px;line-height:' + navHeight + 'px';
	document.getElementById('headerLogo').style.marginTop = logoMarginTop + 'px';
}
adjustHeader();
window.onresize = adjustHeader;
<?php echo '</script'; ?>
 >
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 09:29:22
         compiled from "D:\xampp\htdocs\dingding\templates\pc\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_552235d2a9f846_14468421')) {function content_552235d2a9f846_14468421($_smarty_tpl) {?><div class="footer">
	<div class="body clearfix">
		<ul class="tools clearfix">
			<li><a class="download" href="/download" target="_blank">APP下载</a></li>
			<li><a class="weixin" href="javascript:void(0);">微信</a><span class="weixin"></span></li>
			<li><a class="qq" href="javascript:void(0);">qq</a><span class="qq"></span></li>
			<li><a class="weibo" href="javascript:void(0);">微博</a><span class="weibo"></span></li>
		</ul>
		<span class="block">
			<a href="/guide#kefu" title="">咨询中心</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		</span>
		<span class="block">
			<a href="/guide#shouhou" title="">售后服务</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		</span>
		<span class="block">
			<a href="/guide#kefu" title="">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
		</span>
		<span class="block last-link yijianfankui-link">
			<a href="mailto:feedback@dding.net" title=""><span>服务邮箱：</span><u>service@dding.net</u></a>
		</span>
		<span class="right-block china">
			Copyright&copy;2014 dding 京ICP备 14039007号-1
		</span>
	</div>
</div><?php }} ?>
