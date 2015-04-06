<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 05:36:14
         compiled from "D:\xampp\htdocs\dingding\templates\mobile\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44935521fd87d2f8f9-56507656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb91c596c8d9f02d1cd6c44440ff515f51e6d534' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\mobile\\contact.tpl',
      1 => 1428289250,
      2 => 'file',
    ),
    '54fdb77829ccb4cd693245c22e9de135d7900291' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\mobile\\layout.tpl',
      1 => 1428289432,
      2 => 'file',
    ),
    'efce15a5102c7d1dc3b80ab91ce25d27e9415d7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\mobile\\header.tpl',
      1 => 1428291366,
      2 => 'file',
    ),
    '848e4df676c05afeef87c7ad57b9b7ef825ecea2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dingding\\templates\\mobile\\footer.tpl',
      1 => 1426511580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44935521fd87d2f8f9-56507656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5521fd87d91383_91447406',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5521fd87d91383_91447406')) {function content_5521fd87d91383_91447406($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>丁盯智能门磁 联系方式</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	
<link rel="stylesheet" href=/static/mobile/css/contact-c7004144edf98514a6ec878ebf82d435.css>

</head>
<body>

<?php /*  Call merged included template "mobile/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("mobile/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '44935521fd87d2f8f9-56507656');
content_5521ff2e832586_75644604($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "mobile/header.tpl" */?>
<div class="wrapper"> 
	<h1>联系方式</h1>
	<div class="sep"></div> 
	<ul class="main">
		<li><span>公司名称：</span>云丁网络技术(北京)有限公司</li>
		<li class="addr"><span>邮寄地址：</span>北京市海淀区西二旗路领秀新硅谷C区21号楼1-1201</li>
		<li><span>公司电话：</span><a href="tel:4006-414-123">4006-414-123</a></li>
   		<li><span>公司固话：</span><a href="tel:010-61779325">010-61779325</a></li>
		<li><span>邮政编码：</span>100085</li>
		<li><span>加入我们：</span>hr@dding.net</li>
		<li><span>媒体合作：</span>media@dding.net</li>
		<li><span>商务合作：</span>bd@dding.net</li>
	</ul>
</div>
<?php /*  Call merged included template "mobile/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("mobile/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '44935521fd87d2f8f9-56507656');
content_5521ff2e836417_20883434($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "mobile/footer.tpl" */?>


<?php echo '<script'; ?>
 type="text/javascript" src=/static/mobile/js/common-6647f0b55a6b576b12b7a23f96898594.js><?php echo '</script'; ?>
>


<div class="hide">
<?php echo '<script'; ?>
 type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9d8d43d99ad1e48c0faa87b90acfc184' type='text/javascript'%3E%3C/script%3E"));
<?php echo '</script'; ?>
>
</div>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 05:36:14
         compiled from "D:\xampp\htdocs\dingding\templates\mobile\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5521ff2e832586_75644604')) {function content_5521ff2e832586_75644604($_smarty_tpl) {?><header class="h">
	<div class="logo"><a href="/"><img src="/static/mobile/images/logo.png" width="63"></a></div>
	<div class="nav">
		<div class="bar"></div>
		<div class="bar"></div>
		<div class="bar"></div>
		<ul class="panel" id="navPanel">
			<li><a href="/dingding/index.php">首页</a></li>
			<li><a href="/dingding/index.php/contact">联系方式</a></li>
			<li><a href="/dingding/index.php/about">关于我们</a></li>
			<li><a href="/dingding/index.php/download">下载APP</a></li>
		</ul>
	</div>
</header>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 05:36:14
         compiled from "D:\xampp\htdocs\dingding\templates\mobile\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5521ff2e836417_20883434')) {function content_5521ff2e836417_20883434($_smarty_tpl) {?><div class="f border-box">
	<a href="http://weibo.com/u/5206002138"><img src="/static/mobile/images/weibo.png" height="12">&nbsp;新浪微博</a>&nbsp;&nbsp;
	<span class="copy">Copyright &copy; 2014 丁盯智能 京ICP备14039007号-1</span>
</div><?php }} ?>
