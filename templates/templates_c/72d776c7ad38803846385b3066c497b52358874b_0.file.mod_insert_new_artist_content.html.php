<?php
/* Smarty version 3.1.32, created on 2018-09-16 18:27:50
  from 'C:\wamp64\www\MusicStore\templates\mod_insert_new_artist_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ea0a6426ad3_85960289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d776c7ad38803846385b3066c497b52358874b' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_insert_new_artist_content.html',
      1 => 1537122439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ea0a6426ad3_85960289 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumbs">
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
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
<div class="col-sm-12">
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
         <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
<?php }?>
<div class="content mt-3">

    <div class="card">
        <div class="card-header">
            <strong>Inserisci : </strong> Nuovo Artista
        </div>
        <div class="card-body card-block">
            <form id="artist-form" action="mod_insert_new_artist.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome : </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="new-artist-name-input" name="nome_artista"
                                                        class="form-control" autocomplete="none"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Album Pubblicati
                        : </label></div>
                    <div class="col-12 col-md-9"><input type="number" id="new-artist-album-number-input" name="album_pubblicati"
                                                        class="form-control"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Inizio Attività
                        : </label></div>
                    <div class="col-12 col-md-9"><input type="number" id="new-artist-career-start-input" name="inizio_attivita"
                                                        class="form-control" min="1900" max="2018"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fine Attività
                        : </label></div>
                    <div class="col-12 col-md-9"><input type="number" id="fine-attivita-year" name="fine_attivita"
                                                        class="form-control" min="1900" max="2018"></div>
                    <div class="col col-md-3"></div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox-in-attivita" name="fine_attivita" value=""
                                           class="form-check-input" onclick="checkbox_func()">In Attività
                                </label>
                            </div
                        </div>
                    </div>
                </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Biografia : </label></div>
            <div class="col-12 col-md-9"><textarea name="biografia" id="biografia-edit" rows="4" placeholder="..."
                                                   class="form-control"></textarea></div>
        </div>


        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Genere : </label></div>
            <div class="col col-md-9">
                <div class="form-check">

                    <select id="new-artist-genres-select" class="js-example-basic-multiple" name="generi[]" multiple="multiple" form="artist-form">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generi']->value, 'genere');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genere']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>
"><?php echo $_smarty_tpl->tpl_vars['genere']->value['genere'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>


        <div class="row form-group">
            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Immagine Artista : </label>
            </div>
            <div class="col-12 col-md-9"><input type="file" id="file-input" name="artist-img" class="form-control-file">
            </div>
        </div>

        </form>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="artist-form">
            <i class="fa fa-dot-circle-o"></i> Procedi
        </button>
        <button type="reset" class="btn btn-danger btn-sm" onclick="reset_new_artist_form()">
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
                                <th>Nome
                                    <small>(Clicca per modificare)</small>
                                </th>
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
</a></td>
                                <!-- link alla pagina di modifica dell'artista -->
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
    function checkbox_func() {
        var checkBox = document.getElementById("checkbox-in-attivita");
        var yearInput = document.getElementById("fine-attivita-year");

        if (checkBox.checked == true) {
            yearInput.disabled = true;
        } else {
            yearInput.disabled = false;
        }
    }
	
	function reset_new_artist_form(){
		$('#new-artist-name-input').val('');
		$('#new-artist-album-number-input').val('');
		$('#new-artist-career-start-input').val('');
		$('#fine-attivita-year').val(null);
		$('#fine-attivita-year').prop('disabled', false);
		$('#checkbox-in-attivita').removeAttr("checked");
		nicEditors.findEditor( "biografia-edit" ).setContent('');
		//Resettare select generi
		$('#file-input').val('');
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/nicEdit/nicEdit.js" type = "text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    
    (function ($) {
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    }(jQuery));
    bkLib.onDomLoaded(function () {

        new nicEditor({
            iconsPath: '../js/nicEdit/nicEditorIcons.gif',
            buttonList: ['bold', 'italic', 'link', 'unlink']
        }).panelInstance('biografia-edit');
    });
    
<?php echo '</script'; ?>
><?php }
}
