<?php
/* Smarty version 3.1.32, created on 2018-09-11 13:53:54
  from 'C:\wamp64\www\MusicStore\templates\mod_modify_song_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97c8f2905688_86743768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd44a861710e8ea79a34213ceb689cc9801533a97' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_modify_song_content.html',
      1 => 1536673864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97c8f2905688_86743768 (Smarty_Internal_Template $_smarty_tpl) {
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


</style>
<div class="menu">
	<form id="song-form" action="mod_modify_song.php" method="POST" enctype="multipart/form-data">
		<input type="number" name="id_canzone" value="<?php echo $_smarty_tpl->tpl_vars['canzone']->value['id_canzone'];?>
" hidden />
		Nome Canzone:<input type="text" name="nome_canzone" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['canzone']->value['nome_canzone'];?>
" required />
		<br>
		<input type="number" hidden />
		Preview Canzone:
		<audio controls controlsList="nodownload">
			<source src="<?php echo $_smarty_tpl->tpl_vars['canzone']->value['song_path'];?>
" type="audio/mp3">
			Your browser does not support the audio element.
		</audio>
		Lascia Preview Precedente: <input id="checkbox-canzone" type="checkbox" name="canzone" value="default" onclick="checkbox_func_2()" />
		<input id="song-input" type="file" name="song-preview" required />
		<br>
	</form>
	<br>
	<br>
	<input type="submit" value="Conferma Modifiche" form="song-form" />
</div>
<form class="back-button"  action="mod_modify_delete.php">
    <input type="submit" value="Torna alla pagina di ricerca" />
</form>
<?php echo '<script'; ?>
>
function checkbox_func_2(){
		var checkBox = document.getElementById("checkbox-canzone");
		var fileInput = document.getElementById("song-input");
	
		if (checkBox.checked == true){
			fileInput.disabled = true;
		} else {
			fileInput.disabled = false;
		}
	}
<?php echo '</script'; ?>
><?php }
}
