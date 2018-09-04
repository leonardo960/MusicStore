<?php
/* Smarty version 3.1.32, created on 2018-09-04 15:24:56
  from 'C:\Users\Matteo\PhpstormProjects\MusicStore\templates\albumpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8ea3c8c65035_38838971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c04df941ac6377a5b9cd3856641f3cb4fc1638' => 
    array (
      0 => 'C:\\Users\\Matteo\\PhpstormProjects\\MusicStore\\templates\\albumpage_content.html',
      1 => 1536074685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8ea3c8c65035_38838971 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
	<!-- TODO completare -->
					<div class="single-page"><br />
						<div class="clear"> </div>
						<div class="product-info">
						
							<div class="product-image">
								<div id="container">
							<div class="flexslider">
									<div class="clearfix"></div>
								<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-313px, 0px, 0px);"><li data-thumb="../images/triumph_big1.jpg" class="clone" aria-hidden="true" style="width: 313px; float: left; display: block;">
								   <div class="thumb-image"> <img src="../images/triumph_small1.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<li data-thumb="../images/triumph_big1.jpg" class="flex-active-slide" style="width: 313px; float: left; display: block;">
									<div class="thumb-image"> <img src="../images/triumph_small1.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<li data-thumb="../images/triumph_big1.jpg" class="" style="width: 313px; float: left; display: block;">
									 <div class="thumb-image"> <img src="../images/triumph_small1.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<li data-thumb="../images/triumph_big1.jpg" class="" style="width: 313px; float: left; display: block;">
									 <div class="thumb-image"> <img src="../images/triumph_small1.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								
							  </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul>
							</div>	
						</div>
							</div>
							<audio controls controlsList="nodownload">
								<source src="../music/test.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
							<?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
							<?php echo $_smarty_tpl->tpl_vars['song']->value['nome_canzone'];?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<div class="product-price-info">
								<div class="product-catrgory-pagenation">
									<ul>
										<li><h3>Categories :</h3></li>
										<li class="active3"><a href="#">Productname</a></li>
										<li><a href="#">Product2</a></li>
										<li><a href="#">Product3</a></li>
									</ul>
								</div>
									<div class="product-value">
									<h4>Product-Complete Details With Value</h4>
									<ul>
										<li><h2>Price :</h2></li>
										<li><span>$350</span></li>
										<li><h5>$500</h5></li>
										<li><a href="#">Instock</a></li>
									</ul>
									<ul>
										<li><h3>Not rated</h3></li>
										<li><h5>No reviews</h5></li>
									</ul>
								</div>
								<div class="product-shipping">
									<span>Shipping :</span>
									<p><lable>FREE</lable> - Flat Rate Courier - Delivery anywhere in the world</p>
									<div class="clear"> </div>
								</div>
								<div class="product-payments">
									<span>Payments: :</span>
									<p><lable>paypal</lable> - (Credit card, EMI, Debit card, Online Bank Transfer), PaisaPay COD  </p>
									<div class="clear"> </div>
								</div>
								<div class="product-description">
									<h3>Description :</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<a href="#">Addcart</a>
								</div>
								<div class="product-share">
									<h3>share on:</h3>
									<ul>
										<li><a href="#"><img src="../images/facebook.png" title="facebook" />Facebook</a></li>
										<li><a href="#"><img src="../images/twitter.png" title="Twitter" />Twitter</a></li>
										<li><a href="#"><img src="../images/rss.png" title="Rss" />Rss</a></li>
										<li><a href="#"><img src="../images/gpluse.png" title="Googlepluse" />Google+</a></li>
									</ul>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
			</div>
			<div class="clear"> </div>
</div><?php }
}
