<?php
/* Smarty version 3.1.32, created on 2018-09-16 20:19:04
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\frame_public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ebab8d53ca5_48563989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5086596fa0a79de9127225ea388477cd5cd0aed3' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\frame_public.html',
      1 => 1537128315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ebab8d53ca5_48563989 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Music Store</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/responsiveslides.css">
		<?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../js/responsiveslides.min.js"><?php echo '</script'; ?>
>
		
		  <?php echo '<script'; ?>
>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  <?php echo '</script'; ?>
>
		  
</head>
	<body>
		<!---start-wrap--->
		<div class="wrap">
			<!---start-header--->
			<div class="header">
			<!---start-top-header--->
			<div class="top-header">
				<div class="top-header-left">
				<div class="logo">
					<a href="index.php"><img src="../images/logo3.png" title="Music Store" /></a>
				</div>
				</div>
				<div class="top-header-right">
					<ul>
						<li>
							<form class="search" action="search.php" type="GET">
								<input type="text" name="query" pattern="[A-Za-z0-9\s]+" title="Please use only upper-case/lower-case letters, digits and blank spaces. Thank you."/>
								<button type="submit"  value=""><img src="../images/search_icon_small.png"></button>	
							</form>
						</li>
						<?php if (isset($_smarty_tpl->tpl_vars['logged_username']->value)) {?>
						<li id="logged-info">Profile : <a id="header-auth-info" href="account.php"><?php echo $_smarty_tpl->tpl_vars['logged_username']->value;?>
</a></li>
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
			
			<div class="clear"> </div>
			<!--start-top-nav-->
			<div class="top-nav">
				<ul>
					<li <?php if ($_smarty_tpl->tpl_vars['active_logo']->value == 'Home') {?>class="active1"<?php }?> ><a href="index.php">Home</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['active_logo']->value == 'Favorites') {?>class="active1"<?php }?>><a href="favorites.php">Favorites</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['active_logo']->value == 'Recent Albums') {?>class="active1"<?php }?>><a href="recent_albums.php">Recent albums</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['active_logo']->value == 'Specials') {?>class="active1"<?php }?>><a href="special_offers.php">Specials</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['active_logo']->value == 'Contact Us') {?>class="active1"<?php }?>><a href="contacts.php">Contact us</a></li>
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
				<div class="col_1_of_4 span_1_of_4">
					<h3>Payment</h3>
					<a href=""><img id="methods-payment-img" src="../images/methods_payment_icons.png"></a>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="../images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="../images/twitter.png" title="Twiiter" /></a></li>
						<li><a href="#"><img src="../images/rss.png" title="Rss" /></a></li>
						<li><a href="#"><img src="../images/gpluse.png" title="Google+" /></a></li>
					</ul>
				</div>
			</div>
			</div>
	</div>
		<!--end-footer-->
		<!---End-wrap--->
	</body>
</html><?php }
}
