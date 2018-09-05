<?php
/* Smarty version 3.1.32, created on 2018-09-05 13:41:42
  from 'C:\wamp64\www\MusicStore\templates\cart_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8fdd1668ac89_89015050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd03ffa4daee8668153714ff457e6a06b17b817' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\cart_content.html',
      1 => 1536154899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8fdd1668ac89_89015050 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['error']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['error']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
	<div class="cart-page-container">
		<form id="cart_form" action="process_order.php" method="POST">
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
							<label for="cart-item-price">Price : EUR</label>
							<input class="cart-item-price" id="cart_item_price" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_price'];?>
" disabled></input> <!-- i numeri decimali devono essere inseriti in $item.item_price con il punto e non la virgola  -->
						</div>
								
						<div class="cart-item-input-box">
							<label for="cart-item-amount">Quantity</label>
							<input class="cart-item-amount" id="cart-item-amount" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
" type="number" max="<?php echo $_smarty_tpl->tpl_vars['item']->value['in_stock'];?>
" min="1" value="1" onchange="quantity_change(this.name, this.value, this.max)"></input>
							<a href="#">Details</a>
							<input class="cart-remove-button" type="button" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
" value="Remove" onclick="remove_item(this.name)"></input> <!-- da modificare -->
						</div>
						
						</div>
					</ul>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if (count($_smarty_tpl->tpl_vars['cart_content']->value) == 0) {?>
				<h1 style="text-align: center; color: white">No items here!</h1>
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
