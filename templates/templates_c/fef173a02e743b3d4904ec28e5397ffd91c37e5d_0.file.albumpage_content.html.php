<?php
/* Smarty version 3.1.32, created on 2018-09-16 16:37:44
  from 'C:\wamp64\www\MusicStore\templates\albumpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e86d8f416b2_83603701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fef173a02e743b3d4904ec28e5397ffd91c37e5d' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\albumpage_content.html',
      1 => 1537115627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e86d8f416b2_83603701 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.add-cart-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.add-cart-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.add-cart-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.add-cart-close-button:hover {
    background-color: darkgray;
}
.add-cart-show-modal {
	position: fixed;
    left: 0;
    top: 0px;
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	transition: 0.5s;
}
.already-added-cart-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.already-added-cart-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.already-added-cart-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.already-added-cart-close-button:hover {
    background-color: darkgray;
}
.already-added-cart-show-modal {
	position: fixed;
    left: 0;
    top: 0px;
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	transition: 0.5s;
}
</style>
<div class="content">
					<div class="single-page">
						<div class="clear"> </div>
						<div class="product-info">
						
							<div class="product-image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
">
							</div>
							<div class="product-description">
								<a onclick="add_to_cart(<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
)">Add to Cart</a>
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
										<li><h2>Genres : <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value['generi'], 'genere', false, NULL, 'genres', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['total'];
echo $_smarty_tpl->tpl_vars['genere']->value;
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['last'] : null)) {?> - <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h2></li>
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
									</ul>
								</div>
								<div class="product-end-list">
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
								</div>
								
							</div>
							<div class="clear"> </div>
						</div>
					</div>
			</div>
			<div class="clear"> </div>
			<div class="add-cart-modal">
		<div class="add-cart-modal-content">
			<span class="add-cart-close-button">×</span>
			<h1>Album added to cart!</h1>
		</div>
	</div>
	<div class="already-added-cart-modal">
		<div class="already-added-cart-modal-content">
			<span class="already-added-cart-close-button">×</span>
			<h1>Album already added to cart!</h1>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="../js/cart.js"><?php echo '</script'; ?>
><?php }
}
