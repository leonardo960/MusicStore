<?php
/* Smarty version 3.1.32, created on 2018-09-17 07:36:06
  from 'C:\wamp64\www\MusicStore\templates\artistpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9f5966379350_74924945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5191bdf77ed244427db03a8e98c8625dca4c6d8b' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\artistpage_content.html',
      1 => 1537115674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f5966379350_74924945 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
	<!-- TODO completare -->
					<div class="single-page">
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
										<li><h2>Genres : <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artista']->value['generi'], 'genere', false, NULL, 'genres', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['total'];
echo $_smarty_tpl->tpl_vars['genere']->value;
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_genres']->value['last'] : null)) {?> - <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h2></li>
										<br>
										<li><h2>Years active : <?php echo $_smarty_tpl->tpl_vars['artista']->value['inizio_attivita'];?>
 - <?php if (strlen($_smarty_tpl->tpl_vars['artista']->value['fine_attivita']) > 0) {
echo $_smarty_tpl->tpl_vars['artista']->value['fine_attivita'];
} else { ?>Active<?php }?></h2></li>
										<br>
										<li><h2>Bio : </h2><h5><?php echo $_smarty_tpl->tpl_vars['artista']->value['biografia'];?>
</h5></li>
										
									</ul>
								</div>
								<div class="product-end-list">
									<h4><label>Albums We Have: </label></h4>
									<?php if (count($_smarty_tpl->tpl_vars['album']->value[0]) > 0) {?>
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
									<?php } else { ?>
									<h5>We have no albums in store from this artist yet. Check back in the near future!</h5>
									<?php }?>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
			</div>
			<div class="clear"> </div>
</div><?php }
}
