<?php
/* Smarty version 3.1.32, created on 2018-09-14 10:30:08
  from 'C:\wamp64\www\MusicStore\templates\recent_albums_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b8db03d2d09_06481990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6789aabba0379809c4e63f9bde93ce8ca33a1cc7' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\recent_albums_content.html',
      1 => 1536921004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b8db03d2d09_06481990 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
					<!--start-cartires-page---->
					<div class="Cartires">
						<h5><span>Recent</span> Albums</h5>
						<div class="cartires-grids">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Title : </span><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</li>
										<li><span>Artist : </span><a href="artistpage.php?id_artista=<?php echo $_smarty_tpl->tpl_vars['album']->value['id_artista'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_artista'];?>
</a></li>
									</ul>
									<h3>Description : </h3>
									<p><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Info Page</h4>
									<a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">Go to Info</a>
									<h4><span>Price Right Now : </span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;</h4>
									<a onclick="add_to_cart(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)">Add to Cart</a>
									<?php if ($_smarty_tpl->tpl_vars['user_logged']->value == true) {?>
										<?php if ($_smarty_tpl->tpl_vars['album']->value['preferito'] == true) {?>
											<a onclick="remove_from_favorites(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
, true)">Remove from Favorites</a>
										<?php } else { ?>
											<a onclick="add_to_favorites(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)">Add to Favorites</a>
										<?php }?>
									<?php } else { ?>
										<a href="login.php">Add to Favorites</a>
									<?php }?>
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
