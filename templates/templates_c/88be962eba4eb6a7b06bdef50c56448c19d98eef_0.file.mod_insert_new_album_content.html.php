<?php
/* Smarty version 3.1.32, created on 2018-09-14 13:08:42
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_insert_new_album_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9bb2daa64695_16818457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88be962eba4eb6a7b06bdef50c56448c19d98eef' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_insert_new_album_content.html',
      1 => 1536665182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9bb2daa64695_16818457 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.menu {
	position: absolute;
	top: 35%;
	right: 35%;
}
.back-button {
	position: absolute;
	top: 18%;
	left: 5%;
}
</style>
<div class="menu">
	<form id="album-form" action="mod_insert_new_album.php" method="POST" enctype="multipart/form-data">
		Nome Album:<input type="text" name="nome_album" maxlength="30" required />
		<br>
		Genere:
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generi']->value, 'genere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
?>
		<input type="radio" name="fk_genere" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['id_genere'];?>
" required /> <?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<br>
		Artista:<select name="fk_artista">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artisti']->value, 'artista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['id_artista'];?>
"><?php echo $_smarty_tpl->tpl_vars['artista']->value['nome_artista'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
		<br>
		Prezzo:
		<input type="number" name="prezzo" value="0" required />
		<br>
		Pubblicazione:
		<input type="date" name="pubblicazione" required />
		Dischi:
		<input type="number" name="dischi" value="0" required />
		<br>
		Tracce:
		<input type="number" name="tracce" value="0" required />
		<br>
		Etichetta:
		<input type="text" name="etichetta" required />
		<br>
		Stock:
		<input type="number" name="stock" required />
		<br>
		Immagine Album:
		<input type="file" name="album-img" accept="image/x-png,image/gif,image/jpeg" required />
		<br>
		<input id="hidden-date" type="date" name="data_inserimento" hidden />
	</form>
	Descrizione:<textarea style="resize: none;" rows="4" cols="50" name="descrizione" form="album-form" maxlength="1000" required></textarea>
	<br>
	<br>
	<input type="submit" value="Conferma" form="album-form" />
</div>
<form class="back-button"  action="mod_content_management.php">
    <input type="submit" value="Torna alla Gestione Contenuti" />
</form>
<?php echo '<script'; ?>
>
	var myDate = document.getElementById("hidden-date");
	var today = new Date();
	myDate.value = today.toISOString().substr(0, 10);
<?php echo '</script'; ?>
><?php }
}
