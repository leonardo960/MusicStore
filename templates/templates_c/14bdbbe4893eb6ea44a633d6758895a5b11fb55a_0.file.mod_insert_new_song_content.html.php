<?php
/* Smarty version 3.1.32, created on 2018-09-14 13:25:28
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_insert_new_song_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9bb6c8234e20_49604760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14bdbbe4893eb6ea44a633d6758895a5b11fb55a' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_insert_new_song_content.html',
      1 => 1536665182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9bb6c8234e20_49604760 (Smarty_Internal_Template $_smarty_tpl) {
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
	<form id="song-form" action="mod_insert_new_song.php" method="POST" enctype="multipart/form-data">
		Nome Canzone:<input type="text" name="nome_canzone" maxlength="30" required />
		<br>
		Album:<select id="album-fk" name="album-info">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<option id="album-fk-option" value='{"id_album": "<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
","id_artista": "<?php echo $_smarty_tpl->tpl_vars['item']->value['id_artista'];?>
"}' ><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_album'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
		<br>
		<input type="number" hidden />
		Preview Canzone:
		<input type="file" name="song-file" required />
		<br>
	</form>
	<br>
	<br>
	<input type="submit" value="Conferma" form="song-form" />
</div>
<form class="back-button"  action="mod_content_management.php">
    <input type="submit" value="Torna alla Gestione Contenuti" />
</form>
<?php }
}
