<?php
/* Smarty version 3.1.32, created on 2018-09-10 13:27:33
  from 'C:\wamp64\www\MusicStore\templates\mod_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b967145f1c8d0_22379185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db159d09ed95ea3ef061590dc5a1483568ef77b4' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_login.html',
      1 => 1536585773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b967145f1c8d0_22379185 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<style>
div {
	width: 300px;
	height: 200px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -100px;
	margin-left: -100px;
}
.header {
	position: absolute;
	top: 25%;
	left: 35%;
	margin-top: -100px;
	margin-left: -100px;
}

.login_button {
	position: absolute;
	top: 115%;
	left: 70%;
	margin-top: -100px;
	margin-left: -100px;
}
</style>
	<body>
	<b class="header"><h1>Pagina di Login per i Moderatori di Music Store</h1></b>
	<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['message']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
	<div>
	<br>
	<br>
	<form action="mod_login.php" method=POST>
	<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Inserisci lo username" name="username" required>
	<br>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Inserisci la password" name="password" required>
	<br>
    <br>
    <button class="login_button" type="submit">Login</button>
	</form>
	</div>
	</body>
</html><?php }
}
