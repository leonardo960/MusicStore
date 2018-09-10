<?php
/* Smarty version 3.1.32, created on 2018-09-10 09:53:32
  from 'C:\wamp64\www\MusicStore\templates\mod_orders_panel_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b963f1c370f93_94655414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '292f1545c100871723da9ff4bb6473ed9af06d4c' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_orders_panel_content.html',
      1 => 1536573196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b963f1c370f93_94655414 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
	.page-numbers {
		position: absolute;
		left: 40%;
	}
	.title {
		position: absolute;
		top: 15%;
		right: 42%;
	}
	.orders-tab {
		position: absolute;
		top: 30%;
		right: 37%;
		font-size: 17px;
	}
	
	.back-button {
		position: absolute;
		top: 18%;
		left: 5%;
	}
</style>
<h2 class="title">Pannello Gestione Ordini<h2>
<form class="back-button" action="mod_panel.php">
    <input type="submit" value="Torna al Pannello Moderatore" />
</form>
<div class="orders-tab">
	<?php if (isset($_smarty_tpl->tpl_vars['orders']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
			<h5 style="margin: 0;">Id Ordine: <?php echo $_smarty_tpl->tpl_vars['order']->value['id_ordine'];?>
 Cliente: <?php echo $_smarty_tpl->tpl_vars['order']->value['cliente'];?>
 Id Album: <?php echo $_smarty_tpl->tpl_vars['order']->value['album'];?>
 Data Ordine: <?php echo $_smarty_tpl->tpl_vars['order']->value['data'];?>
</h5>
			<label>Stato Ordine: </label>
			<select onchange="changeStatus(<?php echo $_smarty_tpl->tpl_vars['order']->value['id_ordine'];?>
, this.value);">
				<option value="Inserito" <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] === 'Inserito') {?>selected<?php }?>>Inserito</option>
				<option value="Spedito"  <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] === 'Spedito') {?>selected<?php }?>>Spedito</option>
				<option value="Consegnato" <?php if ($_smarty_tpl->tpl_vars['order']->value['status'] === 'Consegnato') {?>selected<?php }?>>Consegnato</option>
			</select> 
	
	
		<br>
		<br>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="page-numbers">
		<?php
$_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int) ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? $_smarty_tpl->tpl_vars['pages_needed']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages_needed']->value)+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0) {
for ($_smarty_tpl->tpl_vars['counter']->value = 1, $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++) {
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration === 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration === $_smarty_tpl->tpl_vars['counter']->total;?>
			<a style="text-decoration:none" href="mod_orders_panel.php?page=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
 </a>
		<?php }
}
?>
		</div>
	<?php }?>
</div>
<?php echo '<script'; ?>
 src="../js/jquery-1.6.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function changeStatus(ordine, status) {
   $.post( "mod_orders_panel.php", { id_ordine: ordine, new_status: status });
}
<?php echo '</script'; ?>
><?php }
}
