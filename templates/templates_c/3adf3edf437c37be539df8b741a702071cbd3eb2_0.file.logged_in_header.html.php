<?php
/* Smarty version 3.1.32, created on 2018-09-08 14:30:31
  from 'C:\wamp64\www\MusicStore\templates\logged_in_header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b93dd073f3ab8_61324133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3adf3edf437c37be539df8b741a702071cbd3eb2' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\logged_in_header.html',
      1 => 1536417002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b93dd073f3ab8_61324133 (Smarty_Internal_Template $_smarty_tpl) {
?><li>Logged in as: <a id="header-auth-info"><?php echo $_smarty_tpl->tpl_vars['logged_username']->value;?>
</a></li>
<li><a href="account.php">Your account</a></li><?php }
}
