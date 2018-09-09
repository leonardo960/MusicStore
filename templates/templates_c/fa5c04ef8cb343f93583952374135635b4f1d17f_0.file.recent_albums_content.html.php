<?php
/* Smarty version 3.1.32, created on 2018-09-09 08:33:40
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\recent_albums_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b94dae4bcd256_25643595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa5c04ef8cb343f93583952374135635b4f1d17f' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\recent_albums_content.html',
      1 => 1536482018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b94dae4bcd256_25643595 (Smarty_Internal_Template $_smarty_tpl) {
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
" title="artist-image" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Title: </span><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</li>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_albums_artists']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['artist']->value['id_artista'] == $_smarty_tpl->tpl_vars['album']->value['fk_artista']) {?>
												<li><span>Artist: </span><a href=""><?php echo $_smarty_tpl->tpl_vars['artist']->value['nome_artista'];?>
</a></li>
											<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
									<h3>Description</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Info Page</h4>
									<a href="">Go to Info</a>
									<h4><span>Price: </span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;</h4>
									<a href="">Add to Cart</a>
								</div>
								<div class="clear"> </div>
							</div><br />
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<div class="cartire-pagination-box">
						
							<ul>
							le info per la paginazione vanno qui
								<li><a></a></li>
							</ul>
							
						</div>
					</div>
	<!--End-cartires-page---->
</div><?php }
}
