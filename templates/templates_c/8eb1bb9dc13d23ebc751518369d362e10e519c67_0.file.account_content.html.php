<?php
/* Smarty version 3.1.32, created on 2018-09-10 07:51:13
  from 'C:\wamp64\www\MusicStore\templates\account_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96227172f3e9_86565882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb1bb9dc13d23ebc751518369d362e10e519c67' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\account_content.html',
      1 => 1536565778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96227172f3e9_86565882 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
	<div class="your-account-container">
		<div class="account-box">
			
				<div class="account-title-box">
				<ul>
					<li>Profile Info</li>
				</ul>
				</div>
			
			<?php if (isset($_smarty_tpl->tpl_vars['change_confirm']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['change_confirm']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }?>
			
			<form id="change_info_form" action="change_info.php" method="POST">
			
				<div class="account-static-info account-info-profile">
					<ul>
						<li id="username_li"><input id="username_input" name="username_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" pattern="[A-Za-z0-9]{4,20}" title="The username must contain only letters or digits with a minimum of 4 and maximum 20." disabled><label for="username_input">Username</label></input></li>
						<li id="email_li"><input id="email_input" name="email_input" type="email"  value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled><label for="email_input">E-mail</label></input></li>
						</ul>
					<ul>
						<li id="name_li"><input id="name_input" name="name_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" pattern="[A-Za-z]{1,20}" title="The name field must contain only letters up to 20." disabled><label for="name_input">Name</label></input></li>
						<li id="surname_li"><input id="surname_input" name="surname_input" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
" pattern="[A-Za-z]{1,20}" title="The surname field must contain only letters up to 20." disabled><label for="surname_input">Surname</label></input></li>
					</ul>
				</div>
				
				<div class="account-button-box" >
					<ul class="account-button-box-inner" id="edit-button-box">
						<li id="edit_btn" onclick="edit_click()"><a>Edit</a></li>
					</ul>
					<ul class="account-button-box-inner" id="save-button-box">
						<li id="save_btn" onclick="save_click()" ><a>Save</a></li>
						<li id="cancel_btn" onclick="cancel_click()"><a>Cancel</a></li>
					</ul>
				</div>
				
			</form>
			
			
				<div class="account-title-box">
					<ul>
						<li>Your Addresses</li>
					</ul>
				</div>
				
				
				<?php if (isset($_smarty_tpl->tpl_vars['addresses']->value)) {?>
				<div class="account-static-info">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
					<div class="address-card">
						<ul>
							<li><h1>User: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['cognome'];?>
</h6></li>
							<li><h1>Locality: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['citta'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['provincia'];?>
</h6></li>
							<li><h1>Postal Code: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['cap'];?>
</h6></li>
							<li><h1>Country: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['paese'];?>
</h6></li>
						</ul>
						<ul>
							<li><h1>Address: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['indirizzo'];?>
</h6></li>
							<li><h1>Telephone: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['recapito'];?>
</h6></li>
							<li><h1>Payment: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['metodo_pagamento'];?>
</h6></li>
							<li><h1>Delivery: </h1><h6><?php echo $_smarty_tpl->tpl_vars['address']->value['tipo_spedizione'];?>
</h6></li>
						</ul>
						
						<ul class="address-buttons-container">
							<li class="address-box-button"><a href="">Edit</a></li>
							<li class="address-box-button"><a href="">Delete</a></li>
						</ul>
						
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
				</div>
				<?php } else { ?>
					<div class="no-addresses-card">
						<h1>No address has been added.</h1>
					</div>
				<?php }?>
				
			
			<div class="add-address-box">
				<ul>
					<li class="new-address-button"><a href="">New Address</a></li>
				</ul>
			</div>
			
			
		</div>
	</div>
</body>
<?php echo '<script'; ?>
 src="../js/account.js"><?php echo '</script'; ?>
>

<?php }
}
