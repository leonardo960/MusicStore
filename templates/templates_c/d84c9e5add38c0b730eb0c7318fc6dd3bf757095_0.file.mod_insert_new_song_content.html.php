<?php
/* Smarty version 3.1.32, created on 2018-09-16 15:34:14
  from 'C:\wamp64\www\MusicStore\templates\mod_insert_new_song_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9e77f65ca604_89060679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd84c9e5add38c0b730eb0c7318fc6dd3bf757095' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_insert_new_song_content.html',
      1 => 1537096009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e77f65ca604_89060679 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Gestione Canzoni</h1>
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
                        <strong>Inserisci : </strong> Nuova Canzone
                      </div>
                      <div class="card-body card-block">
                        <form id="song-form" action="" method="post" enctype="multipart/form-data" class="dropzone, form-horizontal">
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Titolo : </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nome_canzone" class="form-control" autocomplete="none" required></div>
                          </div>

						  <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Album : </label></div>
                            <div class="col-12 col-md-9">
                              <select name="album-info" id="select" class="form-control" required>
                                <option value=""></option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
								<option id="album-fk-option" value='{"id_album": "<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
","id_artista": "<?php echo $_smarty_tpl->tpl_vars['item']->value['id_artista'];?>
"}' ><?php echo $_smarty_tpl->tpl_vars['item']->value['nome_album'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                            </div>
                          </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Anteprima Canzone : </label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="song-file" class="form-control-file" required></div>
                          </div>
                          
						  <input id="hidden-date" type="date" name="data_inserimento" hidden />
						  
                        </form>
                      </div>
					  
                      <div class="card-footer">
                        <button id="song-submin" type="submit" class="btn btn-primary btn-sm" form="song-form">
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
                            <strong class="card-title">Canzoni Inserite</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nome <small>(Clicca per modificare)</small></th>
						<th>Artista <small>(Clicca per modificare)</small></th>
						<th>Album <small>(Clicca per modificare)</small></th> 						
                      </tr>
                    </thead>
                    <tbody>
					
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canzoni']->value, 'canzone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['canzone']->value) {
?>
						  <tr>
							<td><a href=""><?php echo $_smarty_tpl->tpl_vars['canzone']->value['nome_canzone'];?>
</a></td> <!-- link alla pagina di modifica della canzone -->
							<td><a href=""><?php echo $_smarty_tpl->tpl_vars['canzone']->value['fk_artista'];?>
</a></td> <!-- link alla pagina di modifica dell'artista -->
							<td><a href=""><?php echo $_smarty_tpl->tpl_vars['canzone']->value['fk_album'];?>
</a></td> <!-- link alla pagina di modifica dell'album -->
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
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/dropzone.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    Dropzone.options.songForm = {
        autoProcessQueue: false,
        paramName: "song-file",
        maxFilesize: 10,
		maxFiles: 1,
        uploadMultiple: false,
        accept: function (file, done) {
            done();
        }
    };
    $("#song-submit").click(function (e) {
        e.preventDefault();
        var myDropzone = Dropzone.forElement(".dropzone");
        myDropzone.processQueue();
        window.location.href = "mod_content_management.php";
    });
<?php echo '</script'; ?>
>

<?php }
}
