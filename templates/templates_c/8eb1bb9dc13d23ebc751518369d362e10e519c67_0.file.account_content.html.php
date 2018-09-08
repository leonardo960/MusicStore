<?php
/* Smarty version 3.1.32, created on 2018-09-08 14:38:46
  from 'C:\wamp64\www\MusicStore\templates\account_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b93def666b310_01719751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb1bb9dc13d23ebc751518369d362e10e519c67' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\account_content.html',
      1 => 1536066236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b93def666b310_01719751 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
	<div class="your-account-container">
		<div class="account-box">
			<ul>
				<div class="account-title-box">
					<li>Your Account</li>
				</div>
			</ul>
			<?php if (isset($_smarty_tpl->tpl_vars['change_confirm']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['change_confirm']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?>
			
			<form id="change_info_form" action="change_info.php" method="POST">
			
				<div class="account-static-info">
					<ul>
						<li id="username_li"><input id="username_input" name="username_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" pattern="[A-Za-z0-9]{4,20}" title="The username must contain only letters or digits with a minimum of 4 and maximum 20." disabled><label for="username_input">Username</label></input></li>
						<li id="name_li"><input id="name_input" name="name_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" pattern="[A-Za-z]{1,20}" title="The name field must contain only letters up to 20." disabled><label for="name_input">Name</label></input></li>
						<li id="surname_li"><input id="surname_input" name="surname_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" pattern="[A-Za-z]{1,20}" title="The surname field must contain only letters up to 20." disabled><label for="surname_input">Surname</label></input></li>
						<li id="email_li"><input id="email_input" name="email_input" type="email"  value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled><label for="email_input">E-mail</label></input></li>
					</ul>
				</div>
				
				<div class="account-button-box-1">
					<ul>
						<li id="edit_btn" onclick="edit_click()"><a>Edit</a></li>
					</ul>
				</div>
				<div class="account-button-box-2" hidden>
					<ul>
						<li id="save_btn" onclick="save_click()" style="visibility:hidden"><a>Save</a></li>
						<li id="cancel_btn" onclick="cancel_click()"style="visibility:hidden"><a>Cancel</a></li>
					</ul>	
				</div>
				
			</form>
			<form id="logout_form" action="logout.php" method="POST">
				<div class="account-button-box-1">
					<ul>
						<li id="logout_btn"><a>Logout</a></li>
					</ul>
				</div>
			</form>
			
		</div>
	</div>
</body>
<?php echo '<script'; ?>
 src="../js/account.js"><?php echo '</script'; ?>
>

<?php }
}
