<?php
/* Smarty version 3.1.32, created on 2018-09-10 08:34:28
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\favorites_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b962c94bdbb23_68633279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '104afc6fdea1aeb1b6f4ee686e3f7cf2fe62aad5' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\favorites_content.html',
      1 => 1536568466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b962c94bdbb23_68633279 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
					<!--start-cartires-page---->
					<div class="Cartires">
						<h5><span>Your</span> Favorites</h5>
						<div class="cartires-grids">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'favorite');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['favorite']->value) {
?>
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['favorite']->value['img_path'];?>
" title="album-image" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><span>Title: </span><?php echo $_smarty_tpl->tpl_vars['favorite']->value['nome_album'];?>
</li>
										<li><span>Artist: </span><a href=""><?php echo $_smarty_tpl->tpl_vars['favorite']->value['nome_artista'];?>
</a></li>
									</ul>
									<h3>Description</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['favorite']->value['descrizione'];?>
</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Info Page</h4>
									<a href="">Go to Info</a>
										<h4><span>Price Right Now: </span><?php echo $_smarty_tpl->tpl_vars['favorite']->value['prezzo_offerta'];?>
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
						
							<ul> <!-- sarebbe per la paginazione -->
								<li><a></a></li>
							</ul>
							
						</div>
					</div>
	<!--End-cartires-page---->
</div><?php }
}
