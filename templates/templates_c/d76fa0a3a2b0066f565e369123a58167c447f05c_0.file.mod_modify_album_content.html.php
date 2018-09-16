<?php
/* Smarty version 3.1.32, created on 2018-09-16 21:26:37
  from 'C:\wamp64\www\MusicStore\templates\mod_modify_album_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9eca8df1bef0_32484312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76fa0a3a2b0066f565e369123a58167c447f05c' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_modify_album_content.html',
      1 => 1537132693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9eca8df1bef0_32484312 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Modifica Album</h1>
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
		
			<div class="card">
                      <div class="card-header">
                        <strong>Modifica :</strong> Album
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome : </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nome_artista" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nome_album']->value;?>
" autocomplete="none" required></div>
                          </div>
                          
						  <div class="row form-group">l
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Artista : </label></div>
                            <div class="col-12 col-md-9">
                              <select name="fk_artista" id="select" class="form-control" required>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['nome_artista']->value;?>
"></option> <!-- contiene il nome dell'artista dell'album selezionato -->
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artisti']->value, 'artista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['artista']->value['id_artista'];?>
"><?php echo $_smarty_tpl->tpl_vars['artista']->value['nome_artista'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                            </div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Etichetta : </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="etichetta" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['etichetta'];?>
" autocomplete="none" required></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prezzo : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="prezzo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['prezzo'];?>
" autocomplete="none" required></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dischi Contenuti : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="dischi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['dischi'];?>
" autocomplete="none" required></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tracce : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="tracce" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['tracce'];?>
" autocomplete="none" required></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Data di Pubblicazione : </label></div>
                            <div class="col-12 col-md-9"><input type="date" id="fine-attivita-year" name="pubblicazione" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['pubblicazione'];?>
" required></div>
						  </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descrizione : </label></div>
                            <div class="col-12 col-md-9"><textarea name="biografia" id="descrizione-edit" rows="4" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['descrizione'];?>
" class="form-control" required></textarea></div>
                          </div>
                          
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Genere : </label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generi']->value, 'genere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
?>
                                <label for="checkbox" class="form-check-label">
									<?php if (($_smarty_tpl->tpl_vars['genere']->value['genere'] == $_smarty_tpl->tpl_vars['fk_genere']->value)) {?>
									<input type="checkbox" id="checkbox" name="fk_genere" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>
" class="form-check-input" checked><?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

									<?php } else { ?>
									<input type="checkbox" id="checkbox" name="fk_genere" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>
" class="form-check-input"><?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

									<?php }?>
                                </label>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								
                              </div>
                            </div>
                          </div>
                          
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="stock" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['stock'];?>
" autocomplete="none" required></div>
                          </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Immagine Album : </label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="album-img" class="form-control-file" accept="image/x-png,image/gif,image/jpeg" value="<?php echo $_smarty_tpl->tpl_vars['album_img_path']->value;?>
" required></div>
                          </div>
                          
						  <input id="hidden-date" type="date" name="data_inserimento" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['data_inserimento'];?>
" hidden />
						  
                        </form>
                      </div>
					  
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Procedi
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						<button class="btn btn-danger btn-sm">
                          <i class="fa fa-times-circle"></i> Cancella
                        </button>
                      </div>
                    </div>

		</div><?php }
}
