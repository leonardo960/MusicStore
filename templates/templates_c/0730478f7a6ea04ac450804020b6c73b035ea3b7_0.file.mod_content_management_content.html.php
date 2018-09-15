<?php
/* Smarty version 3.1.32, created on 2018-09-13 17:00:15
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_content_management_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a979f175c50_20910225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0730478f7a6ea04ac450804020b6c73b035ea3b7' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_content_management_content.html',
      1 => 1536651148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a979f175c50_20910225 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.menu {
	position: absolute;
	top: 35%;
	right: 45%;
}
.back-button {
		position: absolute;
		top: 18%;
		left: 5%;
	}
</style>
<form class="back-button" action="mod_panel.php">
    <input type="submit" value="Torna al Pannello Moderatore" />
</form>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><h2 style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2><?php }?>
<div class="menu">
<a style="text-decoration:none;" href="mod_insert_new_artist.php">Inserisci Nuovo Artista</a>
<br>
<a style="text-decoration:none;" href="mod_insert_new_album.php">Inserisci Nuovo Album</a>
<br>
<a style="text-decoration:none;" href="mod_insert_new_song.php">Inserisci Nuova Canzone</a>
<br>
<br>
<a style="text-decoration:none;" href="mod_modify_delete.php">Modifica/Cancella Artista/Album/Canzone</a>
</div>
<?php }
}
