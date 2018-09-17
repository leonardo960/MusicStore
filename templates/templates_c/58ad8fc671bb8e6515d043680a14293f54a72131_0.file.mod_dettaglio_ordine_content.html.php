<?php
/* Smarty version 3.1.32, created on 2018-09-16 21:36:01
  from 'C:\wamp64\www\MusicStore\templates\mod_dettaglio_ordine_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9eccc1b76935_85227294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58ad8fc671bb8e6515d043680a14293f54a72131' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_dettaglio_ordine_content.html',
      1 => 1537094530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9eccc1b76935_85227294 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tabella Ordine</h1>
                    </div>
                </div>
            </div>
            
        </div>
		
		<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
		
				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Informazioni</strong>
                        </div>
                        <div class="card-body">
                          <table class="table">
                          <tbody>
                          <tr>
                              <td scope="row">ID Ordine : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['id_ordine'];?>
</td>
                          </tr>
                          <tr>
                              <td scope="row">Cliente : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['cliente'];?>
</td>
                          </tr>
                          <tr>
                              <td scope="row">Album : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['nome_album'];?>
</td>
                          </tr>
						  <tr>
                              <td scope="row">Data : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['data'];?>
</td>
                          </tr>
						  <tr>
                              <td scope="row">Spedizione : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['tipo_spedizione'];?>
</td>
                          </tr>
						  
						</tbody>
						<tbody>
							<tr>
                              <th scope="column">Indirizzo</th>
							</tr>
							<tr>
                              <td scope="row">Nome : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['nome'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Cognome : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['cognome'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Paese : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['paese'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Indirizzo : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['indirizzo'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Città : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['citta'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Provincia : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['provincia'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Cap : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['cap'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Recapito : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['recapito'];?>
</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
                              <th scope="column">Metodo di Pagamento</th>
							</tr>
							
							<tr>
                              <td scope="row">Numero Carta : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['numero_carta'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Data di Scadenza : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['data_scadenza'];?>
</td>
							</tr>
							<tr>
                              <td scope="row">Proprietario : </td>
                              <td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['cognome_carta'];?>
 <?php echo $_smarty_tpl->tpl_vars['ordine']->value['nome_carta'];?>
</td>
							</tr>
							
						</tbody>
						
                  </table>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-4">
                        <div class="card border border-secondary">
                            <div class="card-header">
                                <strong class="card-title">Status Ordine</strong>
                            </div>
                            <div class="card-body">
								<div class="row form-group">
									<div class="col col-md-3"><label for="select" class=" form-control-label">Stato : </label></div>
									<div class="col-12 col-md-9">
									  <select name="select" id="select" class="form-control" onchange="change_order_status(this.value)">
									  
										<option value="Inserito" <?php if ($_smarty_tpl->tpl_vars['ordine']->value['status'] === 'Inserito') {?>selected<?php }?>>Inserito</option>
										<option value="Spedito" <?php if ($_smarty_tpl->tpl_vars['ordine']->value['status'] === 'Spedito') {?>selected<?php }?>>Spedito</option>
										<option value="Consegnato" <?php if ($_smarty_tpl->tpl_vars['ordine']->value['status'] === 'Consegnato') {?>selected<?php }?>>Consegnato</option>
										
									  </select>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
					
			</div>
		</div>
	</div>
<?php echo '<script'; ?>
>
	function change_order_status(status){
		var ordine = <?php echo $_smarty_tpl->tpl_vars['ordine']->value['id_ordine'];?>
;
		 $.post("mod_order_details.php", { new_status: status, id_ordine: ordine }).done(function(data){location.reload(true);}); 
		
	}
<?php echo '</script'; ?>
><?php }
}
