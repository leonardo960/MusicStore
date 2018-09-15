<?php
/* Smarty version 3.1.32, created on 2018-09-15 15:05:57
  from 'C:\wamp64\www\MusicStore\templates\recent_albums_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9d1fd5b6af21_31516279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6789aabba0379809c4e63f9bde93ce8ca33a1cc7' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\recent_albums_content.html',
      1 => 1537023938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9d1fd5b6af21_31516279 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.add-favorite-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.add-favorite-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.add-favorite-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.add-favorite-close-button:hover {
    background-color: darkgray;
}
.add-favorite-show-modal {
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
)">Remove from Favorites</a>
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
	<div class="add-favorite-modal">
		<div class="add-favorite-modal-content">
			<span class="add-favorite-close-button">×</span>
			<h1>Album added to favorites!</h1>
		</div>
	</div>
	<div class="remove-favorite-modal">
		<div class="remove-favorite-modal-content">
			<span class="remove-favorite-close-button">×</span>
			<h1>Album removed from favorites!</h1>
		</div>
	</div>
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
>
<?php echo '<script'; ?>
 src="../js/add_remove_favorite.js"><?php echo '</script'; ?>
>

<?php }
}
