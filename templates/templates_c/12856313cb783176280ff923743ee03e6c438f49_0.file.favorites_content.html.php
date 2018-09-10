<?php
/* Smarty version 3.1.32, created on 2018-09-10 14:37:58
  from 'C:\wamp64\www\MusicStore\templates\favorites_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9681c6d03e30_22075468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12856313cb783176280ff923743ee03e6c438f49' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\favorites_content.html',
      1 => 1536590252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9681c6d03e30_22075468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
					<!--start-cartires-page---->
					<div class="Cartires">
						<h5><span>Your</span> Favorites</h5>
						<div class="cartires-grids">
						<?php if (isset($_smarty_tpl->tpl_vars['album']->value)) {?>
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
									<a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id_album'];?>
">Go to Info</a>
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
						<?php } else { ?>
							<div class="cartire-grid">
								<h4>Your don't have any favorite album yet. Add some!</h4>
							</div>
						<?php }?>
						</div>
						
					</div>
	<!--End-cartires-page---->
</div><?php }
}
