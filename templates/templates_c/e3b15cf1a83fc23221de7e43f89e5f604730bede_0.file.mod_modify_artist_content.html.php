<?php
/* Smarty version 3.1.32, created on 2018-09-11 12:58:45
  from 'C:\wamp64\www\MusicStore\templates\mod_modify_artist_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97bc0571e2d0_15847609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b15cf1a83fc23221de7e43f89e5f604730bede' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_modify_artist_content.html',
      1 => 1536670723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97bc0571e2d0_15847609 (Smarty_Internal_Template $_smarty_tpl) {
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
.artist-img {
    width:100%;
	height:100%;
    max-width:200px;
	max-height:200px;
}

</style>
<div class="menu">
	<form id="artist-form" action="mod_modify_artist.php" method="POST" enctype="multipart/form-data">
		<input type="number" name="id_artista" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['id_artista'];?>
" hidden />
		Nome e Cognome Artista:<input type="text" name="nome_artista" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['nome_artista'];?>
" maxlength="30" required />
		<br>
		Genere:
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generi']->value, 'genere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
?>
		<input type="radio" name="genere" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['id_genere'];?>
" <?php if ($_smarty_tpl->tpl_vars['artista']->value['genere'] == $_smarty_tpl->tpl_vars['genere']->value['id_genere']) {?>checked<?php }?> required /> <?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<br>
		Album Pubblicati:<input type="number" name="album_pubblicati"  value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['album_pubblicati'];?>
" required />
		<br>
		Anno Inizio Attivit&agrave;:
		<input type="number" name="inizio_attivita" min="1900" max="2018"  value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['inizio_attivita'];?>
" required />
		<br>
		Fine Attivit&agrave;:
		<input id="fine-attivita-year" type="number" name="fine_attivita" min="1900" max="2018"  <?php if (isset($_smarty_tpl->tpl_vars['artista']->value['fine_attivita'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['fine_attivita'];?>
" <?php } else { ?> disabled <?php }?> required />
		In Attivit&agrave;
		<input id="checkbox-in-attivita" type="checkbox" name="fine_attivita" value="" <?php if (!isset($_smarty_tpl->tpl_vars['artista']->value['fine_attivita'])) {?>checked<?php }?>  onclick="checkbox_func_1()" />
		<br>
		Immagine Artista:
		<img class="artist-img" src="<?php echo $_smarty_tpl->tpl_vars['artista']->value['img_path'];?>
">
		Lascia Immagine Precedente: <input id="checkbox-immagine" type="checkbox" name="immagine" value="default" onclick="checkbox_func_2()" />
		<input id="image-input" type="file" name="artist-img" accept="image/x-png,image/gif,image/jpeg" required />
		<br>
	</form>
	Biografia<textarea style="resize: none;" rows="4" cols="50" name="biografia" form="artist-form" maxlength="1000" required><?php echo $_smarty_tpl->tpl_vars['artista']->value['biografia'];?>
</textarea>
	<br>
	<br>
	<input type="submit" value="Conferma Modifiche" form="artist-form" />
	<br>
	<br>
	<form action="mod_delete_artist.php" method="GET">
	<input type="hidden" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['id_artista'];?>
" />
	<input type="submit" value="Cancella Artista" />
	</form>
</div>
<form class="back-button"  action="mod_modify_delete.php">
    <input type="submit" value="Torna alla pagina di ricerca" />
</form>
<?php echo '<script'; ?>
>
	function checkbox_func_1(){
		var checkBox = document.getElementById("checkbox-in-attivita");
		var yearInput = document.getElementById("fine-attivita-year");
	
		if (checkBox.checked == true){
			yearInput.disabled = true;
		} else {
			yearInput.disabled = false;
		}
	}
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
