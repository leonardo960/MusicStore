<?php
/* Smarty version 3.1.32, created on 2018-09-10 15:22:10
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_content_management_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b968c22771ab8_88825874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0730478f7a6ea04ac450804020b6c73b035ea3b7' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_content_management_content.html',
      1 => 1536588322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b968c22771ab8_88825874 (Smarty_Internal_Template $_smarty_tpl) {
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
