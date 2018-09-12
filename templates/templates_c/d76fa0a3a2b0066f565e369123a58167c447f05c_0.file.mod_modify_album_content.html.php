<?php
/* Smarty version 3.1.32, created on 2018-09-11 20:54:12
  from 'C:\wamp64\www\MusicStore\templates\mod_modify_album_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b982b74862434_84221835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76fa0a3a2b0066f565e369123a58167c447f05c' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_modify_album_content.html',
      1 => 1536699212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b982b74862434_84221835 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.menu {
	position: absolute;
	top: 17%;
	left: 28%;
}
.back-button {
	position: absolute;
	top: 18%;
	left: 5%;
}
.album-img {
    width:100%;
	height:100%;
    max-width:200px;
	max-height:200px;
}
</style>

<div class="menu">
	<form id="album-form" action="mod_modify_album.php" method="POST" enctype="multipart/form-data">
		<input type="number" name="id_album" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" hidden />
		Nome Album:<input type="text" name="nome_album" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
" maxlength="30" required />
		<br>
		Genere:
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generi']->value, 'genere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
?>
		<input type="radio" name="fk_genere" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['id_genere'];?>
" <?php if ($_smarty_tpl->tpl_vars['album']->value['fk_genere'] == $_smarty_tpl->tpl_vars['genere']->value['id_genere']) {?>checked<?php }?> required /> <?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<br>
		Prezzo:
		<input type="number" name="prezzo" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
" required />
		<br>
		Pubblicazione:
		<input type="date" name="pubblicazione" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['pubblicazione'];?>
" required />
		Dischi:
		<input type="number" name="dischi" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['dischi'];?>
" required />
		<br>
		Tracce:
		<input type="number" name="tracce" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['tracce'];?>
" required />
		<br>
		Etichetta:
		<input type="text" name="etichetta" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['etichetta'];?>
" required />
		<br>
		Stock:
		<input type="number" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['stock'];?>
" required />
		<br>
		Immagine Album:
		<img class="album-img" src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
">
		Lascia Immagine Precedente: <input id="checkbox-immagine" type="checkbox" name="immagine" value="default" onclick="checkbox_func_2()" />
		<input id="image-input" type="file" name="album-img" accept="image/x-png,image/gif,image/jpeg" required />
		<br>
	</form>
	Descrizione:<textarea style="resize: none;" rows="4" cols="50" name="descrizione" form="album-form" maxlength="1000" required><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</textarea>
	<br>
	<br>
	<input type="submit" value="Conferma Modifiche" form="album-form" />
	<br>
	<br>
	<form action="mod_delete_album.php" method="GET">
	<input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" />
	<input type="submit" value="Cancella Album" />
	</form>
</div>
<form class="back-button"  action="mod_modify_delete.php">
    <input type="submit" value="Torna alla pagina di ricerca" />
</form>
<?php echo '<script'; ?>
>
	function checkbox_func_2(){
		var checkBox = document.getElementById("checkbox-immagine");
		var fileInput = document.getElementById("image-input");
	
		if (checkBox.checked == true){
			fileInput.disabled = true;
		} else {
			fileInput.disabled = false;
		}
	}
<?php echo '</script'; ?>
><?php }
}
