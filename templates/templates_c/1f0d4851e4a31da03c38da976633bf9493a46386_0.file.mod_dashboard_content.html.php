<?php
/* Smarty version 3.1.32, created on 2018-09-16 21:24:29
  from 'C:\wamp64\www\MusicStore\templates\mod_dashboard_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9eca0da86b09_71184986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f0d4851e4a31da03c38da976633bf9493a46386' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_dashboard_content.html',
      1 => 1537133066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9eca0da86b09_71184986 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Statistiche</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
		
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Utenti Registrati</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['numero_utenti']->value['numero'];?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-image text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Album Inseriti</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['numero_album']->value['numero'];?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-microphone-alt text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Artisti Inseriti</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['numero_artisti']->value['numero'];?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-music-alt text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Canzoni Inserite</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['numero_canzoni']->value['numero'];?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
			
		</div>
           
            <!--/.col-->
			
			
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pannello Ordini</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		<br><br>
		
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Profitto (Ultimi 30 Giorni)</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['profitto']->value['numero'];?>
&euro;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		
		<div class="col-xl-3 col-lg-6">
			<a style="cursor: pointer;" onclick="show_shipped_orders()"><div class="card text-white">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-truck text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Ordini in Consegna</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['in_consegna']->value['numero'];?>
</div>
                            </div>
                        </div>
                    </div>
            </a></div>
        </div>
		
		<div class="col-xl-3 col-lg-6">
            <a style="cursor: pointer;" onclick="show_toship_orders()"><div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-package text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Ordini da Spedire</div>
                                <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['da_spedire']->value['numero'];?>
</div>
                            </div>
                        </div>
                    </div>
            </a></div>
        </div>
		
		
		<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Ordini</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Utente</th>
                        <th>Album</th>
                        <th>Status</th>
						<th>Data</th>
                      </tr>
                    </thead>
                    <tbody>
					
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordini']->value, 'ordine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ordine']->value) {
?>
						  <tr>
							<td><a href="mod_order_details.php?id_ordine=<?php echo $_smarty_tpl->tpl_vars['ordine']->value['id_ordine'];?>
"><?php echo $_smarty_tpl->tpl_vars['ordine']->value['id_ordine'];?>
</a></td>
							<td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['cliente'];?>
</td>
							<td><a href=""><?php echo $_smarty_tpl->tpl_vars['ordine']->value['album'];?>
</a></td>
							<td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['status'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['ordine']->value['data'];?>
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
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<?php echo '<script'; ?>
>
	function show_toship_orders(){
		$('#bootstrap-data-table').DataTable().search('Inserito').draw();
	}
	
	function show_shipped_orders(){
		$('#bootstrap-data-table').DataTable().search('Spedito').draw();
	}
<?php echo '</script'; ?>
><?php }
}
