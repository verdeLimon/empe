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
                            <li class="active">Nuevo</li>
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
                            <form method="post" action="<?php echo Uri::to('admin/' . $menup['url'] . '/' . $nuevo['url']); ?>" id="form_nuevo">
                                <input name="token" type="hidden" value="<?php echo $token; ?>">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="form-field-1">
                                                <i class="fa fa-angle-double-right"></i> Titulo
                                            </label>
                                            <?php
                                            echo Form::text('titulo', Input::previous('titulo'), array(
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
                                            echo Form::text('descripcion', Input::previous('descripcion'), array(
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
                                            echo Form::textarea('html', Input::previous('html'), array(
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
                                                <i class="fa fa-check-square-o"></i> Estado
                                            </label>
                                            <select name="estado" class="form-control">
                                                <option value="publicado">
                                                    Publicado
                                                </option>
                                                <option value="archivado">
                                                    Archivado
                                                </option>
                                                <option value="papelera">
                                                    Papelera
                                                </option>
                                            </select>
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
<?php echo $nuevojs; ?>
</body>
</html>