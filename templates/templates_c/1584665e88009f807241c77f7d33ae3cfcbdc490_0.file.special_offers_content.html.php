<?php
/* Smarty version 3.1.32, created on 2018-09-12 20:04:41
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\special_offers_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b997159d86034_88516000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1584665e88009f807241c77f7d33ae3cfcbdc490' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\special_offers_content.html',
      1 => 1536782677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b997159d86034_88516000 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
					<!--start-cartires-page---->
					<div class="Cartires">
						<h5><span>Special</span> Offers</h5>
						<div class="cartires-grids">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['special_offers']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
" title="album-image" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Title : </span><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</li>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['special_offers_artists']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['artist']->value['id_artista'] == $_smarty_tpl->tpl_vars['album']->value['fk_artista']) {?>
												<li><span>Artist : </span><a href="artistpage.php?id_artista=<?php echo $_smarty_tpl->tpl_vars['artist']->value['id_artista'];?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value['nome_artista'];?>
</a></li>
											<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
									<h3>Description : </h3>
									<p><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Info Page</h4>
									<a href="artistpage.php?id_artista=<?php echo $_smarty_tpl->tpl_vars['artist']->value['id_artista'];?>
">Go to Info</a>
									<h4><span>Special Price : </span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'];?>
&euro;</h4>
									<a onclick="add_to_cart('<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
')">Add to Cart</a>
									<a onclick="add_to_favorites('<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
')">Add to Favorites</a>
								</div>
								<div class="clear"> </div>
							</div><br />
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						
					</div>
	<!--End-cartires-page---->
</div>
<?php echo '<script'; ?>
 src="../js/add_to_cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/add_remove_favorite.js"><?php echo '</script'; ?>
><?php }
}
