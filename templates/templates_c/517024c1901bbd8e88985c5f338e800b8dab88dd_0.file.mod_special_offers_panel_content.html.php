<?php
/* Smarty version 3.1.32, created on 2018-09-14 10:11:00
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_special_offers_panel_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b89341c4f54_00223180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517024c1901bbd8e88985c5f338e800b8dab88dd' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_special_offers_panel_content.html',
      1 => 1536779422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b89341c4f54_00223180 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="back-button" action="mod_panel.php">
    <input type="submit" value="Torna al Pannello Moderatore" />
</form>

<form class="search-bar" action="mod_special_offers_panel.php" method="GET">
	Cerca Album da aggiungere/rimuovere alle offerte: <input type="text" name="query" />
	<input type="submit" value="Cerca" />
</form>

<div class="results">
	<?php if (isset($_smarty_tpl->tpl_vars['albums']->value) && count($_smarty_tpl->tpl_vars['albums']->value) > 0) {?>
	Album Trovati:
	<br>
	<br>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
 
	<br>
	Prezzo di Listino: <?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;
	<?php if (isset($_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'])) {?>
	<div>
		Prezzo Offerta: <?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'];?>
&euro;
		<button id="show-offer-change-button-<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" type="button" onclick="show_offer_change(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)" style="display: block;">Modifica</button>
		<form action="mod_special_offers_panel.php" method="POST">
			<input type="submit" value="Rimuovi Offerta" />
			<input type="hidden" name="mode" value="delete" />
			<input type="hidden" name="id_album" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" />
		</form>
		<form id="offer-change-form-<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" style="display: none;" action="mod_special_offers_panel.php" method="POST">
			<input  type="number" step="0.01" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'];?>
" name="prezzo_offerta" /> 
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" name="id_album" />
			<input type="hidden" name="mode" value="change" />
			<input type="submit" value="Conferma Modifica" />
			<button type="button" onclick="cancel_offer_change(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)" >Cancella</button>
		</form>
	</div>
	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'])) {?>
	<div id="offerta-assente-<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">
		Nessun prezzo offerta impostato al momento.
		<button id="insert-offer-button-<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" type="button" onclick="show_offer_input(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)" style="display: block;">Imposta</button>
		<form id="offer-insert-form-<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" style="display: none;" action="mod_special_offers_panel.php" method="POST">
			Prezzo Offerta da impostare: <input  type="number" step="0.01" value="0" name="prezzo_offerta" /> 
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" name="id_album" />
			<input type="submit" value="Conferma" />
			<input type="hidden" name="mode" value="insert" />
			<button type="button" onclick="cancel_offer_input(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)" >Cancella</button>
		</form>
	</div>
	<?php }?>
	<br>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	<br>
</div>
<div class="page-numbers">
	<?php
$_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int) ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? $_smarty_tpl->tpl_vars['page_counter']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page_counter']->value)+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0) {
for ($_smarty_tpl->tpl_vars['counter']->value = 1, $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++) {
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration === 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration === $_smarty_tpl->tpl_vars['counter']->total;?>
		<a href="mod_special_offers_panel.php?page_id=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a>
	<?php }
}
?>
</div>
<?php echo '<script'; ?>
>
	function show_offer_change(album_id){
		document.getElementById("show-offer-change-button-"+album_id).style.display = "none";
		document.getElementById("offer-change-form-"+album_id).style.display = "block";
	}
	
	function cancel_offer_change(album_id){
		document.getElementById("show-offer-change-button-"+album_id).style.display = "block";
		document.getElementById("offer-change-form-"+album_id).style.display = "none";
	}
	
	function show_offer_input(album_id){
		document.getElementById("insert-offer-button-"+album_id).style.display = "none";
		document.getElementById("offer-insert-form-"+album_id).style.display = "block";
	}
	
	function cancel_offer_input(album_id){
		document.getElementById("insert-offer-button-"+album_id).style.display = "block";
		document.getElementById("offer-insert-form-"+album_id).style.display = "none";
	}
	
	
<?php echo '</script'; ?>
>
<?php }
}
