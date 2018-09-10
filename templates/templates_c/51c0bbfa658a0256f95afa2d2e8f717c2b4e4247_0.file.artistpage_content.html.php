<?php
/* Smarty version 3.1.32, created on 2018-09-10 15:46:09
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\artistpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9691c17e6769_76828714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c0bbfa658a0256f95afa2d2e8f717c2b4e4247' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\artistpage_content.html',
      1 => 1536594367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9691c17e6769_76828714 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
	<!-- TODO completare -->
					<div class="single-page"><br />
						<div class="clear"> </div>
						<div class="product-info">
						
							<div class="product-image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['artista']->value['img_path'];?>
">
							</div>
							<div class="product-price-info">
								<div class="product-value">
								<h4><label>Artist : </label><?php echo $_smarty_tpl->tpl_vars['artista']->value['nome_artista'];?>
</h4>
									<ul>
										<li><h2>Genre : <?php echo $_smarty_tpl->tpl_vars['artista']->value['genere'];?>
</h2></li>
										<br>
										<li><h2>Years active : <?php echo $_smarty_tpl->tpl_vars['artista']->value['inizio_attivita'];?>
 - <?php echo $_smarty_tpl->tpl_vars['artista']->value['fine_attivita'];?>
</h2></li>
										<br>
										<li><h2>Bio : </h2><h5><?php echo $_smarty_tpl->tpl_vars['artista']->value['biografia'];?>
<h5></li>
										
										<br>
										<h4><label>Albums Published: </label></h4>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'published');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['published']->value) {
?>
											<div class="album-card">
											<ul>
												<li><h3>Title : </h3><a href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['published']->value['id_album'];?>
"><?php echo $_smarty_tpl->tpl_vars['published']->value['nome_album'];?>
</a></li>
											</ul>
											</div>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										
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
