<?php
/* Smarty version 3.1.32, created on 2018-09-16 21:10:09
  from 'C:\wamp64\www\MusicStore\templates\cart_cashout_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ec6b1252d48_81858204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85df0ac819c99d8dde41318c19e816c80b2e469' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\cart_cashout_content.html',
      1 => 1537132163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ec6b1252d48_81858204 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cart-page-container">
	<form id="cart_form" action="cart_cashout.php" method="POST">
		<div class="cart-page-title-box">
				<a class="cartpage-title">Checkout</a>
		</div>
		
		<div class="checkout-list-box">
		
		
			<div class="checkout-right-panel" id="checkout-right-panel">
				<label>Order Summary</label>
				<div class="right-panel-inner">
					<h1>Items : <a>&euro;</a><a id="right-panel-items"></a></h1>
					<h1>Shipping : <a>&euro;</a><a id="right-panel-shipping"></a></h1>
				</div>
				<label>Order Total : <a>&euro;</a><a id="right-panel-total"></a></label>
			</div>
		
		
			<div class="checkout-left-panel">
				<ul>
				
					<li>
					<section class="collapsible">
						<header aria-controls="shipping-address-box" aria-expanded="true">
						<label>Shipping Address</label>
						</header>
						<div class="checkout-left-box" id="shipping-address-box">
							<?php if (isset($_smarty_tpl->tpl_vars['addresses']->value)) {?>
							<div class="left-box-inner">
							<label>Chose your address : </label>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
									<div class="left-box-single-address">
										<input type="radio" name="indirizzo" value="<?php echo $_smarty_tpl->tpl_vars['address']->value['id_indirizzo'];?>
"/>
										<div class="address-radio-info">
											<ul>
												<li>Costumer : <?php echo $_smarty_tpl->tpl_vars['address']->value['cognome'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['nome'];?>
</li><br>
												<li><?php echo $_smarty_tpl->tpl_vars['address']->value['indirizzo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['address']->value['cap'];?>
</li><br>
												<li><?php echo $_smarty_tpl->tpl_vars['address']->value['citta'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['provincia'];?>
</li><br>
												<li><?php echo $_smarty_tpl->tpl_vars['address']->value['paese'];?>
</li><br>
												<li><?php echo $_smarty_tpl->tpl_vars['address']->value['recapito'];?>
</li><br>
											</ul>
										</div>
									</div>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
							</div>
							<?php } else { ?>
							<div class="left-box-inner">
							<label>No addresses associated with your account! <br> Please, insert one before proceeding with checkout.</label>
							<br> 
							<br> 
							<a id="no-address-profile-link" href="account.php">Go to Profile</a>
							<br> 
							<br> 
							</div>
							<?php }?>
						
						</div>
					</section>
					</li>
					
					<li>
					<section class="collapsible">
						<header aria-controls="payment-method-box" aria-expanded="false">
						<label>Payment Method</label>
						</header>
						<div class="checkout-left-box" id="payment-method-box">
							<div class="left-box-inner">
								<label>Credit Card :</label><br>
								<h1>Costumer Name</h1><input type="text" name="nome_carta" value=""/><br>
								<h1>Costumer Surname</h1><input type="text" name="cognome_carta" value=""/><br>
								<h1>Card Number</h1><input type="number" name="numero_carta" value=""/><br>
								<h1>Expiration Date</h1><input type="date" name="data_scadenza" value=""/><br>
								<input type="hidden" name="metodo_pagamento" value="carta" />
							</div>
						</div>
					</section>
					</li>
					
					<li>
					<section class="collapsible">
						<header aria-controls="checkout-review-box" aria-expanded="false">
						<label>Review Items and Shipping</label>
						</header>
						<div class="checkout-left-box" id="checkout-review-box">
							<div class="left-box-inner">
								
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_content']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<div class="checkout-item-box">
									<label>Album : <a><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_album'];?>
</a></label><br>
									<h1>Price : </h1><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo'];?>
" readonly />&euro;<br>
									<h1>Quantity : </h1><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_quantity'];?>
" readonly /><br>
								</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
								<div class="checkout-shipping-box">
									<label>Shipping :</label><br>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_methods']->value, 'method');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
?>
									<input type="radio" id="shipping-method-<?php echo $_smarty_tpl->tpl_vars['method']->value['nome'];?>
" onclick="updateTotal()" name="tipo_spedizione" class="shipping-radiobutton" value="<?php echo $_smarty_tpl->tpl_vars['method']->value['nome'];?>
"/><label><?php echo $_smarty_tpl->tpl_vars['method']->value['nome'];?>
 : <a><?php echo $_smarty_tpl->tpl_vars['method']->value['prezzo'];?>
 &euro;</a></label>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
								
								<div class="checkout-total-box">
									<label>Total : <input type="number" title="Total" id="checkout-total-input" name="totale" value="0" readonly />&euro;</label><br>
								</div>
							</div>
						</div>
					</section>
					</li>
					
				</ul>
			</div>
			
		</div>

<style>		
.sticky {
  position: fixed;
  top: 0;
  width: calc(25% - 30px);
}

.sticky + .content {
  padding-top: 60px;
}
</style>

<?php echo '<script'; ?>
 src="../js/jquery.collapsible.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
window.onscroll = function() { addSticky() };

var right_panel = document.getElementById("checkout-right-panel");
var sticky = right_panel.offsetTop;

function addSticky() {
  if (window.pageYOffset >= sticky) {
    right_panel.classList.add("sticky")
  } else {
    right_panel.classList.remove("sticky");
  }
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
window.onload = updateTotal;
function updateTotal(){
	var total = 0;
	var items_total = 0;
	var shipping = 0;
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_content']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		total += (Number(<?php echo $_smarty_tpl->tpl_vars['item']->value['item_quantity'];?>
) * Number(<?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo'];?>
));
		items_total += (Number(<?php echo $_smarty_tpl->tpl_vars['item']->value['item_quantity'];?>
) * Number(<?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo'];?>
));
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_methods']->value, 'method');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
?>
		if($("#shipping-method-<?php echo $_smarty_tpl->tpl_vars['method']->value['nome'];?>
").is(':checked')){
			total += <?php echo $_smarty_tpl->tpl_vars['method']->value['prezzo'];?>
;
			shipping = <?php echo $_smarty_tpl->tpl_vars['method']->value['prezzo'];?>
;
		}
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	total = total.toFixed(2);
	$('#right-panel-items').text(items_total);
	$('#right-panel-shipping').text(shipping);
	$('#right-panel-total').text(total);
	$('#checkout-total-input').val(total);
}
<?php echo '</script'; ?>
>
		<div class="cart-page-end">
				<button style="cursor: pointer;" type="submit" form="cart_form">Place your order</button>
		</div>
	</form>
</div><?php }
}
