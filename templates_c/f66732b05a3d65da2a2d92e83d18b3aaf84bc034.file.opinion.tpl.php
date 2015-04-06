<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 06:20:26
         compiled from "D:\xampp\htdocs\dingding\templates\pc\opinion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722855220226c3e433-61332726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66732b05a3d65da2a2d92e83d18b3aaf84bc034' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\pc\\opinion.tpl',
      1 => 1428293987,
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
      1 => 1428291319,
      2 => 'file',
    ),
    '8d83ff1d7c6a05264c6c958362ab20352e8a006a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\pc\\footer.tpl',
      1 => 1426511580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722855220226c3e433-61332726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55220226c9fec2_56150071',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55220226c9fec2_56150071')) {function content_55220226c9fec2_56150071($_smarty_tpl) {?><!DOCTYPE html>
<html id="doc" class="">
<head>
	<meta charset="UTF-8">
	<title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
	<meta content="防盗器,报警器,门磁,丁盯智能门磁" name="keywords"/>
	<meta content="全球首款低功耗 WiFi门磁，支持远程监控、忘关提醒，并可自动识别主人身份，贴心不打扰您的生活。开启您的超智能健康生活，从丁盯开始。因为丁盯，所以安心！" name="description"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	
<link rel="stylesheet" href=/static/pc/css/opinion.css>

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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("pc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tab'=>"opinion"), 0, '722855220226c3e433-61332726');
content_5522098a25eee5_28553913($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pc/header.tpl" */?>

  <div class="container">
    <div class="location">
      <span>当前位置—个人中心</span>
    </div>
    <div class="content">
      <div class="pcintro">
        <p class="avatar">
          <img src="images/temp/avatar.png" />
        </p>
        <h2>孙文媛</h2>
        <p>一个热爱生活的电子狂人</p>
        <p>积分 200分</p>
        <a href="pcmf.html" class="edit"></a>
      </div>
      <div class="show">
        <p>发表你对产品的观点吧，下一位意见领袖就是你！</p>
        <ul class="prolist">
          <li>
            <div class="p1">
              <p class="ab">
                <a href="">写写看></a>
                <span>您尚未发表观点</span>
              </p>
            </div>
            <h3>丁盯指纹锁</h3>
          </li>
          <li>
            <div class="p2">
              <p class="ab">
                <span>您已发表观点</span>
                <span class="chat">追问（300条）</span>
              </p>
            </div>
            <h3>丁盯门磁</h3>
          </li>
          <li>
            <div class="p3">
              <p class="ab">
                <a href="">了解产品></a>
                <span>此设备尚未购买或未被绑定</span>
              </p>
            </div>
            <h3>丁盯密码锁</h3>
          </li>
        </ul>
      </div>
    </div>
  </div>

<?php /*  Call merged included template "pc/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("pc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '722855220226c3e433-61332726');
content_5522098a2765e5_99817963($_smarty_tpl);
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 06:20:26
         compiled from "D:\xampp\htdocs\dingding\templates\pc\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5522098a25eee5_28553913')) {function content_5522098a25eee5_28553913($_smarty_tpl) {?><div class="header clearfix" id="headerDiv">
	<div class="logo" id = "headerLogo"><a href = "/"><img src="/static/pc/images/common/logo.png" alt="logo" width="100%"></a></div>
	<ul class="nav clearfix" id="headerNav">
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="index") {?>class="curr"<?php }?>><a href="/dingding/index.php" id = "headertextwidth">首页</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="guide") {?>class="curr"<?php }?>><a href="/dingding/index.php/guide" id = "headertextwidth">咨询中心</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="opinion") {?>class="curr"<?php }?>><a href="/dingding/index.php/opinion" id = "headertextwidth">观点</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="about") {?>class="curr"<?php }?>><a href="/dingding/index.php/about" id = "headertextwidth">关于我们</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="download") {?>class="curr"<?php }?>><a href="/dingding/index.php/download" id = "headertextwidth">APP下载</a></li>
		<li class="split">&nbsp;</li>
		<li <?php if ($_smarty_tpl->tpl_vars['tab']->value=="news") {?>class="curr"<?php }?>><a href="/dingding/index.php/news" id = "headertextwidth">口碑</a></li>
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 06:20:26
         compiled from "D:\xampp\htdocs\dingding\templates\pc\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5522098a2765e5_99817963')) {function content_5522098a2765e5_99817963($_smarty_tpl) {?><div class="footer">
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
