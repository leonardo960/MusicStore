<?php
/* Smarty version 3.1.32, created on 2018-09-16 08:04:53
  from 'C:\wamp64\www\MusicStore\MusicStore\templates\mod_insert_new_artist_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e0ea53a8b02_14024549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085b7cdb26bb251cdef82ce69659afba968a8271' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\MusicStore\\templates\\mod_insert_new_artist_content.html',
      1 => 1537003570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e0ea53a8b02_14024549 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Gestione Artisti</h1>
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
                        <strong>Inserisci : </strong> Nuovo Artista
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome : </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nome_artista" class="form-control" autocomplete="none"></div>
                          </div>
                          
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Album Pubblicati : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="album_pubblicati" class="form-control"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Inizio Attività : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="inizio_attivita" class="form-control" min="1900" max="2018"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fine Attività : </label></div>
                            <div class="col-12 col-md-9"><input type="number" id="fine-attivita-year" name="fine_attivita" class="form-control" min="1900" max="2018"></div>
							<div class="col col-md-3"></div>
                            <div class="col col-md-9">
							<div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox-in-attivita" name="fine_attivita" value="" class="form-check-input" onclick="checkbox_func()">In Attività
                                  </label>
                                </div
								</div>
								</div>
                            </div>
						  </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Biografia : </label></div>
                            <div class="col-12 col-md-9"><textarea name="biografia" id="textarea-input" rows="4" placeholder="..." class="form-control"></textarea></div>
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
                                  <input type="checkbox" id="checkbox" name="genere[]" value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['id_genere'];?>
" class="form-check-input" required><?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>

                                </label>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								
                              </div>
                            </div>
                          </div>
                          
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Immagine Artista : </label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="artist-img" class="form-control-file"></div>
                          </div>
                          
                        </form>
                      </div>
					  
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Procedi
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>

		</div>
           
            <!--/.col-->
		
		<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Artisti Inseriti</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome <small>(Clicca per modificare)</small></th> 
                      </tr>
                    </thead>
                    <tbody>
					
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artisti']->value, 'artista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artista']->value) {
?>
						  <tr>
							<td><?php echo $_smarty_tpl->tpl_vars['artista']->value['id_artista'];?>
</td>
							<td><a href=""><?php echo $_smarty_tpl->tpl_vars['artista']->value['nome_artista'];?>
</a></td> <!-- link alla pagina di modifica dell'artista -->
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
			function checkbox_func(){
				var checkBox = document.getElementById("checkbox-in-attivita");
				var yearInput = document.getElementById("fine-attivita-year");
			
				if (checkBox.checked == true){
					yearInput.disabled = true;
				} else {
					yearInput.disabled = false;
				}
			}
		<?php echo '</script'; ?>
>
		<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/nicEdit/nicEdit.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
bkLib.onDomLoaded(function() {
        new nicEditor({iconsPath: '../js/nicEdit/nicEditorIcons.gif', buttonList: ['bold', 'italic', 'link', 'unlink']}).panelInstance('biografia-edit');
});
<?php echo '</script'; ?>
><?php }
}
