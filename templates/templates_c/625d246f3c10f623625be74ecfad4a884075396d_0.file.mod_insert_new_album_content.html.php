<?php
/* Smarty version 3.1.32, created on 2018-09-16 19:03:00
  from 'C:\wamp64\www\MusicStore\templates\mod_insert_new_album_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ea8e49ed0e7_59102849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '625d246f3c10f623625be74ecfad4a884075396d' => 
    array (
      0 => 'C:\\wamp64\\www\\MusicStore\\templates\\mod_insert_new_album_content.html',
      1 => 1537124548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ea8e49ed0e7_59102849 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Gestione Album</h1>
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
            <strong>Inserisci : </strong> Nuovo Album
        </div>
        <div class="card-body card-block">
            <form id="song-insert" action="mod_insert_new_album.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome : </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="nome_album"
                                                        class="form-control" autocomplete="none" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Artista : </label></div>
                    <div class="col-12 col-md-9">
                        <select class="js-example-basic-single" name="fk_artista">
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
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Etichetta : </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="etichetta"
                                                        class="form-control" autocomplete="none" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prezzo : </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="prezzo" class="form-control"
                                                        value="0" autocomplete="none" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dischi Contenuti
                        : </label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="dischi" class="form-control"
                                                        value="0" autocomplete="none" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tracce : </label>
                    </div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="tracce" class="form-control"
                                                        value="0" autocomplete="none" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Data di Pubblicazione
                        : </label></div>
                    <div class="col-12 col-md-9"><input type="date" id="fine-attivita-year" name="pubblicazione"
                                                        class="form-control" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descrizione
                        : </label></div>
                    <div class="col-12 col-md-9"><textarea name="descrizione" id="descrizione-edit" rows="4"
                                                           placeholder="..." class="form-control" required></textarea>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Genere : </label></div>
                    <div class="col col-md-9">
                        <div class="form-check">

                            <select class="js-example-basic-multiple" name="generi[]" multiple="multiple">
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
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock : </label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="stock" class="form-control"
                                                        value="0" autocomplete="none" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Immagine Album
                        : </label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="album-img"
                                                        class="form-control-file"
                                                        accept="image/x-png,image/gif,image/jpeg" required></div>
                </div>


            </form>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" form="song-insert">
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
                        <strong class="card-title">Album Inseriti</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome
                                    <small>(Clicca per modificare)</small>
                                </th>
                                <th>Artista
                                    <small>(Clicca per modificare)</small>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
</td>
                                <td><a href=""><?php echo $_smarty_tpl->tpl_vars['album']->value['nome_album'];?>
</a></td>
                                <!-- link alla pagina di modifica dell'album -->
                                <td><a href=""><?php echo $_smarty_tpl->tpl_vars['album']->value['fk_artista'];?>
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
    var myDate = document.getElementById("hidden-date");
    var today = new Date();
    myDate.value = today.toISOString().substr(0, 10);
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/nicEdit/nicEdit.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    
    bkLib.onDomLoaded(function () {

        new nicEditor({
            iconsPath: '../js/nicEdit/nicEditorIcons.gif',
            buttonList: ['bold', 'italic', 'link', 'unlink']
        }).panelInstance('descrizione-edit');
    });
    (function($) {
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
            $('.js-example-basic-multiple').select2();
        });
    }(jQuery));
    
<?php echo '</script'; ?>
>

<?php }
}
