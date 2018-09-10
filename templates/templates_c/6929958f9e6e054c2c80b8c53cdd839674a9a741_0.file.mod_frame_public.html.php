<?php
/* Smarty version 3.1.32, created on 2018-09-10 15:22:06
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_frame_public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b968c1e8a7dd7_68033250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6929958f9e6e054c2c80b8c53cdd839674a9a741' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_frame_public.html',
      1 => 1536588322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b968c1e8a7dd7_68033250 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
	<style>
	.footer {
		position: absolute;
		bottom: 15px;
		left: 35%;
	}
	.header {
		position: absolute;
		top: 5%;
		right: 5%;
	}
	</style>
	<head>
		<h5 class="header">Moderatore loggato: <?php echo $_smarty_tpl->tpl_vars['logged_moderator']->value;?>
</h5>
	</head>
	<svg style="width:100%;height:100%;">
		<line x1="0%" y1="50%" x2="100%" y2="50%" style="stroke: rgb(234, 243, 234);stroke-width: 5;"></line>
	</svg>
	<body>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	</body>
	<!-- footer -->
	<h5 class="footer">Music Store Back Office Panel 2018. All rights reserved. @UNIVAQ.</h5>
</html><?php }
}
