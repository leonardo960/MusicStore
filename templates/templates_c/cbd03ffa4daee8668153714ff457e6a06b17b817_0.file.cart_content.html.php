<?php
/* Smarty version 3.1.32, created on 2018-09-11 15:54:53
  from 'C:\wamp64\www\MusicStore\templates\cart_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97e54d261976_30068300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd03ffa4daee8668153714ff457e6a06b17b817' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\cart_content.html',
      1 => 1536681290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97e54d261976_30068300 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['error']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['error']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
	<div class="cart-page-container">
		<form id="cart_form" action="cart_cashout.php" method="POST">
			<div class="cart-page-title-box">
				<a class="cartpage-title">Your Cart :</a>
			</div>
			<div class="cart-page-divider-1">
			</div>
			<div class="cart-page-list-box">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_content']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<ul>
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
							<label for="cart-item-amount">Quantity</label>
							
							 <!-- Il messaggio da visualizzare quando eccedi la quantità disponibile è dentro setCustomValidity -->
							 
							<input class="cart-item-amount" id="cart-item-amount" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
" type="number" oninvalid="setCustomValidity('Available ' + this.max)" onkeypress="return event.keyCode != 13;" max="<?php echo $_smarty_tpl->tpl_vars['item']->value['in_stock'];?>
" min="1" value="1"></input>
							<a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
" class="cart-remove-button">Details</a>
							<a href="" class="cart-remove-button" onclick="remove_item('<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
')">Remove</a>
						
						</div>
					</ul>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if (count($_smarty_tpl->tpl_vars['cart_content']->value) == 0) {?>
				<h1 style="text-align: center; color: black">No items here!</h1>
				<?php }?>
			</div>
			<div class="cart-page-divider-1">
			</div>
			<div class="cart-page-end">
				<button onclick="checkout()">Proceed to Checkout</button>
			</div>
		</form>
	</div>
	<?php echo '<script'; ?>
 src="../js/cart.js"><?php echo '</script'; ?>
>				
	
	<?php }
}
