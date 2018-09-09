<?php
/* Smarty version 3.1.32, created on 2018-09-08 14:14:33
  from 'C:\wamp64\www\MusicStore\templates\artists_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b93d9490ce4b8_13138647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b802d726ebf11c63f00cf1ffeb6f76273b5df6b0' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\artists_content.html',
      1 => 1536415929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b93d9490ce4b8_13138647 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
					<!--start-cartires-page---->
					<div class="Cartires">
						<h5><span>Our</span> Artists</h5>
						<div class="cartires-grids">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
							<div class="cartire-grid">
								<div class="cartire-grid-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['artist']->value['img_path'];?>
" title="artist-image" />
								</div>
								<div class="cartire-grid-info">
									<ul>
										<li><?php echo $_smarty_tpl->tpl_vars['artist']->value['nome_artista'];?>
</li>
									</ul>
									<h3>Bio:</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['artist']->value['biografia'];?>
</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>General Info</h4>
									<a href="">Go to Info</a>
									<h4>Related Albums</h4>
									<a href="">View All</a>
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
