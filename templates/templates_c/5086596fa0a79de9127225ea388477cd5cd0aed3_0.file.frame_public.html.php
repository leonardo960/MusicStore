<?php
/* Smarty version 3.1.32, created on 2018-09-09 07:52:26
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\frame_public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b94d13a873488_28254742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5086596fa0a79de9127225ea388477cd5cd0aed3' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\frame_public.html',
      1 => 1536479533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b94d13a873488_28254742 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['head']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<body>
		<!---start-wrap--->
		<div class="wrap">
			<!---start-header--->
			<div class="header">
			<!---start-top-header--->
			<div class="top-header">
				<div class="top-header-left">
				</div>
				<div class="top-header-right">
					<ul>
						<?php if (isset($_smarty_tpl->tpl_vars['logged_username']->value)) {?>
						<li>Logged in as: <a id="header-auth-info"><?php echo $_smarty_tpl->tpl_vars['logged_username']->value;?>
</a></li>
						<li><a href="account.php">Your account</a></li>
						<li><a href="logout.php">Log Out</a></li>
						<?php } else { ?>
						<li><a href="login.php">Log In</a></li>
						<?php }?>
						<li><a id="cart-text" href="cart.php"><?php echo $_smarty_tpl->tpl_vars['cart']->value;?>
<img src="../images/cart.png" title="cart" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!--end-top-header-->
			<div class="clear"> </div>
			<!--start-sub-header-->
			<div class="sub-header">
				<div class="logo">
					<a href="index.php"><img src="../images/logo2.png" title="logo" /></a>
				</div>
				<div class="sub-header-center">
					<form class="search" action="search.php" type="GET">
						<input type="text" name="query" pattern="[A-Za-z0-9\s]+" title="Please use only upper-case/lower-case letters, digits and blank spaces. Thank you.""><input type="submit"  value="search" />
					</form>
				</div>
				<div class="sub-header-right">
				</div>
				<div class="clear"> </div>
			</div>
			<!--end-sub-header-->
			<div class="clear"> </div>
			<!--start-top-nav-->
			<div class="top-nav">
				<ul>
					<li class="active1"><a href="index.php">Home</a></li>
					<li><a href="favorites.php">Favorites</a></li>
					<li><a href="recent_albums.php">Recent albums</a></li>
					<li><a href="special_offers.php">Specials</a></li>
					<li><a href="contacts.php">Contact us</a></li>
				</ul>
				<div class="clear"> </div>
			</div>
			<!--end-top-nav-->
			<!---End-header--->
			</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<!--start-footer-->
	<div class="footer">
				<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4 footer-firstgrid">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Legal Notice</a></li>
					</ul>
				</div>
				<div class="footer-divider"></div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="../images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="../images/twitter.png" title="Twiiter" /></a></li>
						<li><a href="#"><img src="../images/rss.png" title="Rss" /></a></li>
						<li><a href="#"><img src="../images/gpluse.png" title="Google+" /></a></li>
					</ul>
					<h3>Methods of Payment</h3>
					<a href=""><img id="methods-payment-img" src="../images/methods_payment_icons.png"></a>
				</div>
			</div>
			</div>
	</div>
		<!--end-footer-->
		<!---End-wrap--->
	</body>
</html><?php }
}
