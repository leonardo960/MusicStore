<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:25:20
  from 'C:\Users\Matteo\PhpstormProjects\MusicStore\templates\frame_public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e87c0e57067_99990311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54865b8cff64195c9fe3d290736d840eb9e8ee2b' => 
    array (
      0 => 'C:\\Users\\Matteo\\PhpstormProjects\\MusicStore\\templates\\frame_public.html',
      1 => 1536067520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8e87c0e57067_99990311 (Smarty_Internal_Template $_smarty_tpl) {
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
					<ul>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a href="#">CURRENCY:</a></li>
						<li>
							<select>
								<option>Dollar</option>
								<option>Euro</option>
								<option>Pound</option>
							</select>
						</li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="sub-header">
				<div class="logo">
					<a href="index.html"><img src="../images/logo.png" title="logo" /></a>
				</div>
				<div class="sub-header-center">
					<form class="search" action="search.php" type="GET">
						<input type="text" name="query" pattern="[A-Za-z0-9\s]+" title="Please use only upper-case/lower-case letters, digits and blank spaces. Thank you.""><input type="submit"  value="search" />
					</form>
				</div>
				<div class="sub-header-right">
					<ul>
						<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>

						<li><a href="account.php">Your account</a></li>
						<li><a href="cart.php"><?php echo $_smarty_tpl->tpl_vars['cart']->value;?>
<img src="../images/cart.png" title="cart" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li class="active1"><a href="index.php">Home</a></li>
					<li><a href="../favorites.html">Favourites</a></li>
					<li><a href="../artists.">Artists</a></li>
					<li><a href="../specials.html">Specials</a></li>
					<li><a href="../specials.html">Recent-albums</a></li>
					<li><a href="../contact.html">Feedback</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<!---end-top-header--->
			<!---End-header--->
			</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<div class="footer">
				<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Legal Notice</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>OUR OFFERS</h3>
					<ul>
						<li><a href="#">New products</a></li>
						<li><a href="#">top sellers</a></li>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Comments</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="#">Your Account</a></li>
						<li><a href="#">Personal info</a></li>
						<li><a href="#">Prices</a></li>
						<li><a href="#">Address</a></li>
						<li><a href="#">Locations</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="../images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="../images/twitter.png" title="Twiiter" /></a></li>
						<li><a href="#"><img src="../images/rss.png" title="Rss" /></a></li>
						<li><a href="#"><img src="../images/gpluse.png" title="Google+" /></a></li>
					</ul>
					<p>&copy; 2013 Musicstore. All Rights Reserved | Design by <a href="#">W3layouts</a></p>
				</div>
			</div>
			</div>
		</div>
		<!---End-wrap--->
	</body>
</html><?php }
}
