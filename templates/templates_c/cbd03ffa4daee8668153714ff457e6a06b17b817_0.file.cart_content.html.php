<?php
/* Smarty version 3.1.32, created on 2018-09-16 20:21:01
  from 'C:\wamp64\www\MusicStore\templates\cart_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ebb2d352938_43900986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd03ffa4daee8668153714ff457e6a06b17b817' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\cart_content.html',
      1 => 1537126418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ebb2d352938_43900986 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.delete-cart-modal {
    position: fixed;
    left: 0;
    top: 50px;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);	
}
.delete-cart-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.delete-cart-close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.delete-cart-close-button:hover {
    background-color: darkgray;
}
.delete-cart-show-modal {
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
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['error']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
	<div class="cart-page-container">
		<form id="cart_form" action="cart_cashout.php" method="POST">
			<div class="cart-page-title-box">
				<a class="cartpage-title">Your Cart</a>
			</div>
			<div class="cart-page-list-box">
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_content']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					
					<div class="single-cart-item-container">
					<div class="single-cart-item">
							
						<div class="cart-item-image-box">
							<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_image_path'];?>
" title="cart-item-image"/>
						</div>
								
						<div class="cart-item-description-box">
							<div class="cart-item-description-box-head">
								<label for="cart-item-name">Product :</label>
								<a class="cart-item-name" id="cart-item-name"><?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
</a> <!-- max 30 caratteri -->
							</div>
							<div class="cart-item-description-box-body">
								<label for="cart-item-description">Description :</label>
								<textarea class="cart-item-description" id="cart-item-description" disabled><?php echo $_smarty_tpl->tpl_vars['item']->value['item_description'];?>
</textarea>
							</div>
						</div> 
								
						<div class="cart-item-price-box">
							<label>Price :</label>
							<br>
							<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['item_price'];?>
 &euro;</h3>
							
							<!-- L'input con il prezzo non viene visualizzato (display: none) ma viene usato solo per la post del form -->
							<input id="cart-item-price" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_price'];?>
" disabled></input><h3></h3> <!-- i numeri decimali devono essere inseriti in $item.item_price con il punto e non la virgola  -->
						</div>
								
						<div class="cart-item-input-box">
							<label for="cart-item-amount">Quantity : </label>
							
							 <!-- Il messaggio da visualizzare quando eccedi la quantità disponibile è dentro setCustomValidity -->
							 
							<input class="cart-item-amount" id="cart-item-amount" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
" type="number" oninvalid="setCustomValidity('Available ' + this.max)" onkeypress="return event.keyCode != 13;" max="<?php echo $_smarty_tpl->tpl_vars['item']->value['in_stock'];?>
" min="1" value="1"></input>
							<a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
" class="cart-remove-button">Details</a>
							<a id="remove-from-cart-<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
" style="cursor: pointer;" class="cart-remove-button" onclick="remove_item(<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
)">Remove</a>
						
						</div>
					</div>
					</div>
					
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if (count($_smarty_tpl->tpl_vars['cart_content']->value) == 0) {?>
				<h1 style="text-align: center; color: black">No items here!</h1>
				<?php }?>
				</ul>
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['cart_content']->value) != 0) {?>
			<div class="cart-page-end">
				<button style="cursor: pointer;" onclick="checkout()">Proceed to Checkout</button>
			</div>
			<?php }?>
		</form>
		
	</div>
	<div class="delete-cart-modal">
		<div class="delete-cart-modal-content">
			<span onclick="location.reload(true)" class="delete-cart-close-button">×</span>
			<h1>Album deleted from cart!</h1>
		</div>
	</div>
<?php echo '<script'; ?>
 src="../js/cart.js"><?php echo '</script'; ?>
>				
	
	<?php }
}
