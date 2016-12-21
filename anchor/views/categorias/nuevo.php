<?php echo $header; ?>
<!-- container -->
<!--<div class="row">
    <div class="col-md-12">
        degjdogjdo
    </div>
</div>-->
<?php
$menus = Registry::get('menus');
$menup = $menus['categorias'];
$nuevo = $menup['submenu']['nuevo'];
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
                            <li><a href="<?php echo Uri::to('admin/' . $menup['url']); ?>">Categorias</a></li>
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
                        <i class="fa fa-mail-reply"></i> Volver a categorias
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
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="form-field-22">
                                                <i class="fa fa-check-square-o"></i> Estado
                                            </label>
                                            <?php
                                            $estados = array('publicado' => 'Publicado', 'archivado' => 'Archivado');
                                            echo Form::select('estado', $estados, Input::previous('estado'), array('class' => 'form-control'));
                                            ?>
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

<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {


        //$('#form_nuevo').validate();

    });
</script>
</body>
</html>