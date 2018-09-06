<?php
/* Smarty version 3.1.32, created on 2018-09-06 13:04:40
  from 'C:\Users\Matteo\PhpstormProjects\MusicStore\templates\albumpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9125e895ebc2_08139274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c04df941ac6377a5b9cd3856641f3cb4fc1638' => 
    array (
      0 => 'C:\\Users\\Matteo\\PhpstormProjects\\MusicStore\\templates\\albumpage_content.html',
      1 => 1536239077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9125e895ebc2_08139274 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
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
							<div class="product-price-info">
									<div class="product-value">
									<h4>Product-Complete Details With Value</h4>
									<ul>
										<li><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</li>
										<br>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
										<br>
										<li><?php echo $_smarty_tpl->tpl_vars['song']->value['nome_canzone'];?>
</li>
										<audio controls controlsList="nodownload">
											<source src="<?php echo $_smarty_tpl->tpl_vars['song']->value['song_path'];?>
" type="audio/mpeg">
											Your browser does not support the audio element.
										</audio>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<li><h2>Price :</h2></li>
										<li><span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
</span></li>
										<li><h5><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
</h5></li>
										<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['album']->value['stock'];?>
</a></li>
									</ul>
								</div>
								<div class="product-description">
									<h3>Description :</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</p>
									<a href="#">Adcart</a>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
			</div>
			<div class="clear"> </div>
</div><?php }
}
