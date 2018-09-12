<?php
/* Smarty version 3.1.32, created on 2018-09-11 15:54:18
  from 'C:\wamp64\www\MusicStore\templates\albumpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97e52a862138_29650854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fef173a02e743b3d4904ec28e5397ffd91c37e5d' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\albumpage_content.html',
      1 => 1536681036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97e52a862138_29650854 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
					<div class="single-page"><br />
						<div class="clear"> </div>
						<div class="product-info">
						
							<div class="product-image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
">
							</div>
							<div class="product-price-info">
									<div class="product-value">
									<h4><label>Title : </label><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</h4>
									<ul>
										
										<li><h2>Artist : <a href="artistpage.php?id_artista=<?php echo $_smarty_tpl->tpl_vars['album']->value['id_artista'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_artista'];?>
</a></h2></li>
										<br>
										<li><h2>Genre : <?php echo $_smarty_tpl->tpl_vars['album']->value['genere'];?>
</h2></li>
										<br>
										<li><h2>Label : <?php echo $_smarty_tpl->tpl_vars['album']->value['etichetta'];?>
</h2></li>
										<br>
										<li><h2>Disks : <?php echo $_smarty_tpl->tpl_vars['album']->value['dischi'];?>
</h2></li>
										<br>
										<li><h2>Tracks : <?php echo $_smarty_tpl->tpl_vars['album']->value['tracce'];?>
</h2></li>
										<br>
										<li><h2>Description : </h2><h5><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
<h5></li>
										<br>
										<li><h2>Published on : <?php echo $_smarty_tpl->tpl_vars['album']->value['pubblicazione'];?>
</h2></li>
										<br>
										<?php if (isset($_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'])) {?>
										<li><h2>Price :</h2></li>
										<li><span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;</span></li>
										<li><a><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'];?>
&euro;</a></li>
										<?php } else { ?>
										<li><h2>Price :</h2></li>
										<li><a><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;</a></li>
										<?php }?>
										<br>
										<li><a>In stock : <?php echo $_smarty_tpl->tpl_vars['album']->value['stock'];?>
</a></li>
										
										<br>
										<br>
										<h4><label>Songs: </label></h4>
										<?php if (count($_smarty_tpl->tpl_vars['songs']->value[0]) > 0) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
											<div class="album-song-card">
												<li><h3>Title : <a><?php echo $_smarty_tpl->tpl_vars['song']->value['nome_canzone'];?>
</a></h3></li>
												
												<audio controls controlsList="nodownload">
													<source src="<?php echo $_smarty_tpl->tpl_vars['song']->value['song_path'];?>
" type="audio/mp3">
													Your browser does not support the audio element.
												</audio>
											</div>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php } else { ?>
										<h3>We have no previews for this album yet. Check back in the future!</h3>
										<?php }?>
										
									</ul>
								</div>
								<div class="product-description">
									<a onclick="add_to_cart(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)">Add to Cart</a>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
			</div>
			<div class="clear"> </div>
</div>
<?php echo '<script'; ?>
 src="../js/add_to_cart.js"><?php echo '</script'; ?>
><?php }
}
