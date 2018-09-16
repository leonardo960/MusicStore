<?php
/* Smarty version 3.1.32, created on 2018-09-16 15:29:10
  from 'C:\wamp64\www\MusicStore\templates\favorites_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e76c6773cc6_48656652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12856313cb783176280ff923743ee03e6c438f49' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\favorites_content.html',
      1 => 1537111387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e76c6773cc6_48656652 (Smarty_Internal_Template $_smarty_tpl) {
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
.remove-favorite-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.remove-favorite-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.remove-favorite-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.remove-favorite-close-button:hover {
    background-color: darkgray;
}
.remove-favorite-show-modal {
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
										<li><span>Title : </span><?php echo $_smarty_tpl->tpl_vars['favorite']->value['nome_album'];?>
</li>
										<li><span>Artist : </span><a href=""><?php echo $_smarty_tpl->tpl_vars['favorite']->value['nome_artista'];?>
</a></li>
									</ul>
									<h3>Description :</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['favorite']->value['descrizione'];?>
</p>
								</div>
								<div class="cartire-grid-cartinfo">
									<h4>Info Page</h4>
									<a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id_album'];?>
">Go to Info</a>
										<h4><span>Price Right Now : </span><?php echo $_smarty_tpl->tpl_vars['favorite']->value['prezzo'];?>
&euro;</h4>
									<a onclick="add_to_cart(<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id_album'];?>
)">Add to Cart</a>
									<a id="remove-from-favorites-<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id_album'];?>
" onclick="remove_from_favorites(<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id_album'];?>
)">Remove from Favorites</a>
								</div>
								<div class="clear"> </div>
							</div><br />
							
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<div class="cartire-grid">
								<h4 id="no-fav-message">Your don't have any favorite album yet. Add some!</h4>
							</div>
						<?php }?>
						</div>
						
					</div>
	<!--End-cartires-page---->
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
	<div class="remove-favorite-modal">
		<div class="remove-favorite-modal-content">
			<span class="remove-favorite-close-button">×</span>
			<h1>Album removed from favorites!</h1>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="../js/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/add_remove_favorite.js"><?php echo '</script'; ?>
><?php }
}
