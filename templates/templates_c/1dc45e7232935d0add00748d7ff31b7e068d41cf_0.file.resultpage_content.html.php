<?php
/* Smarty version 3.1.32, created on 2018-09-11 16:10:50
  from 'C:\wamp64\www\MusicStore\templates\resultpage_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97e90a20c6e1_03451097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc45e7232935d0add00748d7ff31b7e068d41cf' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\resultpage_content.html',
      1 => 1536668808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97e90a20c6e1_03451097 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
	<div class="resultpage-box">
		<ul>	
						<div class="resultpage-filter-box">
				<form class="advanced-search-form" action="search.php" method=GET>
					<ul>
						<li><label id="first-resultpage-label" for="resultpage-filters">Advanced Search:</label></li>
						<li><input type="search" name="query" <?php if (isset($_smarty_tpl->tpl_vars['query']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"<?php }?> placeholder="Search..."/></li>
					</ul>
					<ul>
						<li><label for="resultpage-filters">Show only:</label></li>
						<li><div id="resultpage-filters" class="resultpage-filters">
							<input type="radio" name="filter" value="artists" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value) && $_smarty_tpl->tpl_vars['filter']->value == "artists") {?> checked <?php }?>>artists
							<input type="radio" name="filter" value="songs" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value) && $_smarty_tpl->tpl_vars['filter']->value == "songs") {?> checked <?php }?>>songs
							<input type="radio" name="filter" value="albums" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value) && $_smarty_tpl->tpl_vars['filter']->value == "albums") {?> checked <?php }?>>albums
						</div></li>
					</ul>
					<ul>
						<li><label for="resultpage-price-filter">Price:</label></li>
						<li><div id="resultpage-price-filter" class="resultpage-price-filter">
							<input type="number" name="MIN" min="0" max="1000" pattern="[0-9]+" title="Please use only digits." <?php if (isset($_smarty_tpl->tpl_vars['min']->value)) {?>value=<?php echo $_smarty_tpl->tpl_vars['min']->value;
}?> placeholder=<?php if (!isset($_smarty_tpl->tpl_vars['min']->value)) {?>"Min"<?php }?>>
							<input type="number" name="MAX" min="0" max="1000" pattern="[0-9]+" title="Please use only digits." <?php if (isset($_smarty_tpl->tpl_vars['max']->value)) {?>value=<?php echo $_smarty_tpl->tpl_vars['max']->value;
}?> placeholder=<?php if (!isset($_smarty_tpl->tpl_vars['max']->value)) {?>"Max"<?php }?>>
						</div></li>
					</ul>
					
					<div class="resultpage-search-button">
						<button>Search</button>
					</div>
				
				</form>
			</div>
		</ul>
		<ul>
			<div class="resultpage-title">
				<li>Results</li>
			</div>
		</ul>
		<ul>	
			<div class="resultpage-divider">
						<!-- this is a divider -->
			</div>
		</ul>	
		<ul>	
			<div class="results-artists-box">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
					<div class="single-artist-result">
						<div class="single-artist-result-image">
							<img src="../images/result_artist_icon.png" title="result-artist-image"/>
						</div>
						<div class="single-artist-result-info">
							<li class="artist-name-result"><?php echo $_smarty_tpl->tpl_vars['artist']->value['nome_artista'];?>
</li>
							<a class="result-artist-detail-button" href="artistpage.php?id_artista=<?php echo $_smarty_tpl->tpl_vars['artist']->value['id_artista'];?>
"><li>See Details</li></a>
						</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</ul>
		<ul>	
			<div class="results-songs-box">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
					<div class="single-song-result">
						<div class="single-song-result-image">
						
							<img src="../images/result_song_icon.png" title="result-song-image"/>
						</div>
						<div class="single-song-result-info">
							<li class="song-name-result"><?php echo $_smarty_tpl->tpl_vars['song']->value['nome_canzone'];?>
</li>
							<a class="result-song-detail-button" href="albumpage?id_album=<?php echo $_smarty_tpl->tpl_vars['song']->value['fk_album'];?>
"><li>Go to Album</li></a>
						</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</ul>
		<ul>	
			<div class="results-albums-box">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
					<div class="single-album-result">
						<div class="single-album-result-image">
							<img src="../images/result_album_icon.png" title="result-album-image"/>
						</div>
						<div class="single-album-result-info">
							<li class="album-name-result"><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</li>
							<li class="album-price-result">EUR: <?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
</li>
							<a class="result-album-detail-button" href="albumpage.php?id_album=<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
"><li>See Details</li></a>
							<a onclick="add_to_cart('<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
')" class="result-album-addcart-button"><li>Add to Cart</li></a>
						</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</ul>		
		<ul>	
			<div class="resultpage-endpage">
			
					<div class="result-endpage-box">
					<?php
$_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['counter']->step = 1;$_smarty_tpl->tpl_vars['counter']->total = (int) ceil(($_smarty_tpl->tpl_vars['counter']->step > 0 ? $_smarty_tpl->tpl_vars['page_counter']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page_counter']->value)+1)/abs($_smarty_tpl->tpl_vars['counter']->step));
if ($_smarty_tpl->tpl_vars['counter']->total > 0) {
for ($_smarty_tpl->tpl_vars['counter']->value = 1, $_smarty_tpl->tpl_vars['counter']->iteration = 1;$_smarty_tpl->tpl_vars['counter']->iteration <= $_smarty_tpl->tpl_vars['counter']->total;$_smarty_tpl->tpl_vars['counter']->value += $_smarty_tpl->tpl_vars['counter']->step, $_smarty_tpl->tpl_vars['counter']->iteration++) {
$_smarty_tpl->tpl_vars['counter']->first = $_smarty_tpl->tpl_vars['counter']->iteration === 1;$_smarty_tpl->tpl_vars['counter']->last = $_smarty_tpl->tpl_vars['counter']->iteration === $_smarty_tpl->tpl_vars['counter']->total;?>
						<li><a class="result-endpage-link" href="search.php?page_id=<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&MIN=<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
&MAX=<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</a></li>
						<li class="result-endpage-separator"> - </li>
					<?php }
}
?>
					</div>
			</div>
		</ul>
	</div>
</body>
<?php echo '<script'; ?>
 src="../js/add_to_cart.js"><?php echo '</script'; ?>
><?php }
}
