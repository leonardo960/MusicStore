<?php
/* Smarty version 3.1.32, created on 2018-09-11 15:48:16
  from 'C:\wamp64\www\MusicStore\templates\mod_modify_delete_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97e3c0379081_53310988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8426b7f43eac06c6385ac7eff4a54a6110f556b' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_modify_delete_content.html',
      1 => 1536680848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97e3c0379081_53310988 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.search-bar {
	position: absolute;
	top: 35%;
	right: 35%;
}
.back-button {
		position: absolute;
		top: 18%;
		left: 5%;
	}
.results {
		position: absolute;
		top: 40%;
		left: 25%;
}
.page-numbers{
		position: absolute;
		bottom: 15%;
		left: 50%;
}

</style>
<form class="back-button" action="mod_content_management.php">
    <input type="submit" value="Torna alla Gestione Contenuti" />
</form>

<form class="search-bar" action="mod_modify_delete.php" method="GET">
	Cerca Album, Artisti o Canzoni da modificare: <input type="text" name="query" />
	<input type="submit" value="Cerca" />
</form>

<div class="results">
	<?php if (isset($_smarty_tpl->tpl_vars['artists']->value) && count($_smarty_tpl->tpl_vars['artists']->value) > 0) {?>
	Artisti Trovati:
	<br>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['artist']->value['nome_artista'];?>
 <form style="display: inline-block;" action="mod_modify_artist.php" method="GET"><input type="hidden" name="artist_id" value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['id_artista'];?>
" /><input type="submit" value="Modifica questo Artista" /></form>
	<br>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	<br>
	<br>
	<?php if (isset($_smarty_tpl->tpl_vars['albums']->value) && count($_smarty_tpl->tpl_vars['albums']->value) > 0) {?>
	Album Trovati:
	<br>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
 <form style="display: inline-block;" action="mod_modify_album.php" method="GET"><input type="hidden" name="album_id" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" /><input type="submit" value="Modifica questo Album" /></form>
	<br>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	<br>
	<br>
	<?php if (isset($_smarty_tpl->tpl_vars['songs']->value) && count($_smarty_tpl->tpl_vars['songs']->value) > 0) {?>
	Canzoni Trovate:
	<br>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['song']->value['nome_canzone'];?>
 <form style="display: inline-block;" action="mod_modify_song.php" method="GET"><input type="hidden" name="song_id" value="<?php echo $_smarty_tpl->tpl_vars['song']->value['id_canzone'];?>
" /><input type="submit" value="Modifica questa Canzone" /></form>
	<br>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<div class="page-numbers">
	<?php
$_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int) ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? $_smarty_tpl->tpl_vars['page_counter']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page_counter']->value)+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0) {
for ($_smarty_tpl->tpl_vars['counter']->value = 1, $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++) {
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration === 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration === $_smarty_tpl->tpl_vars['counter']->total;?>
		<a href="mod_modify_delete.php?page_id=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
	<?php }
}
?>
</div>



<?php }
}
