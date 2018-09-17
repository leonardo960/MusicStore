<?php
/* Smarty version 3.1.32, created on 2018-09-16 21:34:20
  from 'C:\wamp64\www\MusicStore\templates\mod_special_offers_panel_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ecc5caca957_54611037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53be286f16cc63e0d338e587517381676f03804b' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_special_offers_panel_content.html',
      1 => 1537090574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ecc5caca957_54611037 (Smarty_Internal_Template $_smarty_tpl) {
?>		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Gestisci Offerte</h1>
                    </div>
                </div>
            </div>
            
        </div>
		
		<div class="content mt-3">
			<form id="add-offers-form" action="mod_special_offers_panel.php" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="animated fadeIn">
                <div class="row">

				
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Aggiungi alle Offerte</strong>
                        </div>
                        <div class="card-body">
                  <table class="table table-striped table-bordered bootstrap-data-table">
                    <thead>
                      <tr>
						<th>Seleziona</th>
                        <th>Prezzo Offerta</th>
                        <th>Prezzo</th>
                        <th>Album</th>
                        <th>Artista</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                      <tr>
						<td><input type="checkbox" id="checkbox-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="selezioni_offerta_add[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" class="offerte-checkbox" onclick="checkbox_func1(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
)"/></td>
						<td><input type="number" id="offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="prezzo_offerta_add[]" value="" disabled="true" step="0.01" /></td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_album'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_artista'];?>
</td>
                      </tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
				


                </div>
            </div><!-- .animated -->
			</form>
			
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="add_offers()">
                        <i class="fa fa-dot-circle-o"></i> Aggiungi
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm" onclick="reset_add_offer_table()">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            
        </div><!-- .content -->
		
		<div class="content mt-3">
			<form id="modify-offers-form" action="mod_special_offers_panel.php" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="animated fadeIn">
                <div class="row">

				
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Offerte Esistenti : </strong> Seleziona per Modificare o Rimuovere
                        </div>
                        <div class="card-body">
                  <table class="table table-striped table-bordered bootstrap-data-table">
                    <thead>
                      <tr>
						<th>Seleziona</th>
                        <th>Prezzo Offerta</th>
                        <th>Prezzo</th>
                        <th>Album</th>
                        <th>Artista</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album_scontati']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                      <tr>
						<td><input type="checkbox" id="checkbox-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="selezioni_offerta[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" class="offerte-checkbox" onclick="checkbox_func2(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
)"/></td>
						<td><input type="number" id="offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="prezzo_offerta[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo_offerta'];?>
" disabled="true" step="0.01"/></td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo'];?>
 </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_album'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_artista'];?>
</td>
                      </tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
				<input id="modify-form-submit-mode" type="hidden" name="mode" value="" />


                </div>
            </div><!-- .animated -->
			</form>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="modify_offers()" >
                        <i class="fa fa-dot-circle-o"></i> Modifica
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm" onclick="reset_modify_offer_table()" >
                        <i class="fa fa-ban"></i> Reset
                    </button>
					<button class="btn btn-danger btn-sm" onclick="delete_offers()" >
                        <i class="fa fa-times-circle"></i> Rimuovi
                    </button>
                </div>
            
        </div><!-- .content -->

<?php echo '<script'; ?>
>
	function checkbox_func1(id){
	
		var checkBox = document.getElementById("checkbox-" + id);
		var yearInput = document.getElementById("offerta-" + id);
	
		if (checkBox.checked == true){
			yearInput.disabled = false;
		} else {
			yearInput.disabled = true;
		}
	}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	function checkbox_func2(id){
	
		var checkBox = document.getElementById("checkbox-" + id);
		var yearInput = document.getElementById("offerta-" + id);
	
		if (checkBox.checked == true){
			yearInput.disabled = false;
		} else {
			yearInput.disabled = true;
		}
	}
	
	function reset_add_offer_table(){
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		$("#checkbox-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
").prop( "checked", false);
		$("#offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
").val( "" );
		$("#offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
").prop( "disabled", true );
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
	
	function reset_modify_offer_table(){
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album_scontati']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		var def_val_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
 = <?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo_offerta'];?>
;
		$("#offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
").val( <?php echo $_smarty_tpl->tpl_vars['item']->value['prezzo_offerta'];?>
 );
		$("#checkbox-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
").prop( "checked", false);
		$("#offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
").prop( "disabled", true );
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
	
	function add_offers(){
		$("#add-offers-form").submit();
	}
	
	function modify_offers(){
		$("#modify-form-submit-mode").val( "modify" ) ;
		$("#modify-offers-form").submit();
	}
	
	function delete_offers(){
		$("#modify-form-submit-mode").val( "delete" ) ;
		$("#modify-offers-form").submit();
	}
<?php echo '</script'; ?>
>
<?php }
}
