<?php
/* Smarty version 3.1.32, created on 2018-09-10 17:35:43
  from 'C:\wamp64\www\MusicStore\templates\mod_insert_new_artist_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96ab6f537d86_97825768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d776c7ad38803846385b3066c497b52358874b' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_insert_new_artist_content.html',
      1 => 1536600940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96ab6f537d86_97825768 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.menu {
	position: absolute;
	top: 35%;
	right: 35%;
}

</style>
<div class="menu">
	<form id="artist-form" action="mod_insert_new_artist.php" method="POST" enctype="multipart/form-data">
		Nome e Cognome Artista:<input type="text" name="nome_artista" maxlength="30" required />
		<br>
		Genere:
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generi']->value, 'genere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
?>
		<input type="radio" name="genere" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['id_genere'];?>
" required /> <?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<br>
		Album Pubblicati:<input type="number" name="album_pubblicati" required />
		<br>
		Anno Inizio Attivit&agrave;:
		<input type="number" name="inizio_attivita" min="1900" max="2018" value="2018" required />
		<br>
		Fine Attivit&agrave;:
		<input id="fine-attivita-year" type="number" name="fine_attivita" min="1900" max="2018" value="2018" required />
		In Attivit&agrave;
		<input id="checkbox-in-attivita" type="checkbox" name="fine_attivita" value="" onclick="checkbox_func()" />
		<br>
		Immagine Artista:
		<input type="file" name="artist-img" accept="image/x-png,image/gif,image/jpeg" required />
		<br>
	</form>
	Biografia<textarea style="resize: none;" rows="4" cols="50" name="biografia" form="artist-form" required></textarea>
	<br>
	<br>
	<input type="submit" value="Conferma" form="artist-form" />
</div>
<form  action="mod_content_management.php">
    <input type="submit" value="Torna alla Gestione Contenuti" />
</form>
<?php echo '<script'; ?>
>
	function checkbox_func(){
		var checkBox = document.getElementById("checkbox-in-attivita");
		var yearInput = document.getElementById("fine-attivita-year");
	
		if (checkBox.checked == true){
			yearInput.disabled = true;
		} else {
			yearInput.disabled = false;
		}
	}
<?php echo '</script'; ?>
><?php }
}
