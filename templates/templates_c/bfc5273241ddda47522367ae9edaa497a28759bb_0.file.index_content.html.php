<?php
/* Smarty version 3.1.32, created on 2018-09-12 08:10:09
  from 'C:\wamp64\www\MusicStore\templates\index_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98c9e17a00a7_54676531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfc5273241ddda47522367ae9edaa497a28759bb' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\index_content.html',
      1 => 1536739803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98c9e17a00a7_54676531 (Smarty_Internal_Template $_smarty_tpl) {
?><!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="../images/slider1.jpg" alt=""></li>
					      <li><img src="../images/slider2.jpg" alt=""></li>
					      <li><img src="../images/slider3.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
				<div class="content">
					<div class="products-box">
					<div class="products">
						<h5><span>Recent</span> Albums</h5>
						<div class="section group">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
							<div class="grid_1_of_5 images_1_of_5 displayed-item">
								<img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
">
								<h3><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</p>
								<h4><span></span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;</h4>
								<div class="button"><span><a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">Read More</a></span></div>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<div class="viewall-button-container">
							<ul>
								<li><a class="button1" href="recent_albums.php">View all</a></li>
							</ul>
						</div>
						
						<div class="clear"> </div>
					</div>
					<div class="products products-secondbox">
						<h5><span>Big</span> Deals</h5>
						<div class="section group">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['special_offers']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
							<div class="grid_1_of_5 images_1_of_5 displayed-item">
								 <img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img_path'];?>
">
								 <h3><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</h3>
								 <p><?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
</p>
								 <h4><span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
&euro;</span><?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo_offerta'];?>
&euro;</h4>
							     <div class="button"><span><a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">Read More</a></span></div>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<div class="viewall-button-container">
							<ul>
								<li><a class="button1" href="special_offers.php">View all</a></li>
							</ul>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
			</div>
		</div><?php }
}
