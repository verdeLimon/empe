<?php echo $header; ?>
<!-- container -->
<!--<div class="row">
    <div class="col-md-12">
        degjdogjdo
    </div>
</div>-->
<?php
$menus = Registry::get('menus');
$menup = $menus['paginas'];
$nuevo = $menup['submenu']['nuevo'];
//var_dump($submenu);
?>
<div class="openerp openerp_webclient_container" style="height: calc(100% - 34px);">
    <?php echo $menu; ?>
    <!-- main -->
    <div class="oe_application">
        <div class="oe-control-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="ol-md-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo Uri::to('admin/' . $menup['url']); ?>">Paginas</a></li>
                            <li class="active">Editar</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead">
                    <button type="submit" class="btn btn-green btn-menu" form="form_nuevo">
                        <i class="fa fa-save"></i> Guardar
                    </button>
                    <!--                    <a href="?m=ravance" class="btn btn-light-grey btn-menu">
                                            <i class="fa fa-mail-reply"></i> Volver
                                        </a>-->
                    <a href="<?php echo Uri::to('admin/' . $menup['url']); ?>" class="btn btn-light-grey btn-menu">
                        <i class="fa fa-mail-reply"></i> Volver a paginas
                    </a>
                </div>
            </div>
        </div>
        <div class="oe-view-manager">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $messages; ?>
                            <form method="post" action="<?php echo Uri::to('admin/' . $menup['url'] . '/editar/' . $_pg->id); ?>" id="form_nuevo">
                                <input name="token" type="hidden" value="<?php echo $token; ?>">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="form-field-1">
                                                <i class="fa fa-angle-double-right"></i> Titulo
                                            </label>
                                            <?php
                                            echo Form::text('titulo', Input::previous('titulo', $_pg->titulo), array(
                                                'placeholder' => 'Titulo',
                                                'autocomplete' => 'off',
                                                'class' => 'form-control',
                                                'data-rule-required' => 'true',
                                                'id' => 'field-1'
                                            ));
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-field-2">
                                                <i class="fa fa-angle-double-right"></i> Descripcion
                                            </label>
                                            <?php
                                            echo Form::text('descripcion', Input::previous('descripcion', $_pg->descripcion), array(
                                                'placeholder' => 'Descripcion',
                                                'autocomplete' => 'off',
                                                'class' => 'form-control',
                                                'data-rule-required' => 'true',
                                                'id' => 'field-2'
                                            ));
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-field-3">
                                                <i class="fa fa-file-text-o"></i> Contenido
                                            </label>
                                            <?php
                                            echo Form::textarea('html', Input::previous('html', $_pg->html), array(
                                                'id' => 'field-3',
                                                'data-rule-required' => 'true',
                                                'rows' => '17'
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="form-field-22">
                                                <i class="fa fa-check-square-o"></i> Categoria
                                            </label>
                                            <?php
                                            echo Form::select('categoria_id', $categorias, Input::previous('categoria_id', $_pg->categoria_id), array('class' => 'form-control'));
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-field-22">
                                                <i class="fa fa-check-square-o"></i> Estado
                                            </label>
                                            <?php
                                            $estados = array('publicado' => 'Publicado', 'archivado' => 'Archivado', 'papelera' => 'Papelera');
                                            echo Form::select('estado', $estados, Input::previous('estado', $_pg->estado), array('class' => 'form-control'));
                                            ?>
<!--                                            <select name="estado" class="form-control">
                                                <option value="publicado">
                                                    Publicado
                                                </option>
                                                <option value="archivado">
                                                    Archivado
                                                </option>
                                                <option value="papelera">
                                                    Papelera
                                                </option>
                                            </select>-->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main -->
</div>
<!-- /container -->
<?php echo $footer; ?>
<script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jquery.blockUI.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/localization/messages_es_PE.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {

        tinymce.init({
            selector: 'textarea#field-3',
            language: 'es',
            theme: 'modern',
            relative_urls: true,
            plugins: [
                'moxiemanager advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        $('#form_nuevo').validate();

    });
</script>
</body>
</html>