<?php
/* Smarty version 3.1.32, created on 2018-09-08 14:10:23
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\logged_in_header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b93d84fdf7722_55473151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f45749dceef8b8edf4cf22e6eae8923a9f9315' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\logged_in_header.html',
      1 => 1536415764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b93d84fdf7722_55473151 (Smarty_Internal_Template $_smarty_tpl) {
?><li>Logged in as: <a id="header-auth-info"><?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
</a></li>
<li><a href="account.php">Your account</a></li><?php }
}
