<?php
/* Smarty version 3.1.32, created on 2018-09-16 08:05:12
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_special_offers_panel_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e0eb8b25cc0_53385496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517024c1901bbd8e88985c5f338e800b8dab88dd' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_special_offers_panel_content.html',
      1 => 1537014560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e0eb8b25cc0_53385496 (Smarty_Internal_Template $_smarty_tpl) {
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
			<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
" name="selezioni_offerta[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" class="offerte-checkbox" onclick="checkbox_func1(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
)"/></td>
						<td><input type="number" id="offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="prezzo_offerta[]" value="" disabled="true"/></td>
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
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Aggiungi
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            
        </div><!-- .content -->
		
		<div class="content mt-3">
			<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                      <tr>
						<td><input type="checkbox" id="checkbox-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="selezioni_offerta[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" class="offerte-checkbox" onclick="checkbox_func2(<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
)"/></td>
						<td><input type="number" id="offerta-<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" name="prezzo_offerta[]" value="" disabled="true"/></td>
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
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Modifica
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
					<button class="btn btn-danger btn-sm">
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
<?php echo '</script'; ?>
>
<?php }
}
