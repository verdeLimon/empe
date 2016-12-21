<?php echo $header; ?>
<!-- container -->
<!--<div class="row">
    <div class="col-md-12">
        degjdogjdo
    </div>
</div>-->
<?php
$menus = Registry::get('menus');
$menup = $menus['usuarios'];
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
                            <li><a href="<?php echo Uri::to('admin/' . $menup['url']); ?>">Usuarios</a></li>
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
                        <i class="fa fa-mail-reply"></i> Volver al listado
                    </a>
                </div>
            </div>
        </div>
        <div class="oe-view-manager">
            <div class="oe_form_sheet">
                <div class="oe_clear">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php echo $messages; ?>
                                    <form method="post" action="<?php echo Uri::to('admin/' . $menup['url'] . '/' . $nuevo['url']); ?>" id="form_nuevo">
                                        <input name="token" type="hidden" value="<?php echo $token; ?>">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="form-field-1">
                                                        <i class="fa fa-angle-double-right"></i> Nombre y apellidos
                                                    </label>
                                                    <?php
                                                    echo Form::text('real_name', Input::previous('real_name'), array(
                                                        'placeholder' => 'Nombre y apellidos',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'data-rule-required' => 'true',
                                                        'id' => 'field-1'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-field-1">
                                                        <i class="fa fa-angle-double-right"></i> Nombre de usuario
                                                    </label>
                                                    <?php
                                                    echo Form::text('username', Input::previous('username'), array(
                                                        'placeholder' => 'Nombre de usuario',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'data-rule-required' => 'true',
                                                        'id' => 'field-1'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-field-2">
                                                        <i class="fa fa-angle-double-right"></i> Contraseña
                                                    </label>
                                                    <?php
                                                    echo Form::password('password', array(
                                                        'placeholder' => 'Contraseña',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'data-rule-required' => 'true',
                                                        'id' => 'field-2'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-field-2">
                                                        <i class="fa fa-angle-double-right"></i> Repita la contraseña
                                                    </label>
                                                    <?php
                                                    echo Form::password('password2', array(
                                                        'placeholder' => 'igual que el anterior',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'data-rule-required' => 'true',
                                                        'id' => 'field-2'
                                                    ));
                                                    ?>
                                                </div>

                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="form-field-2">
                                                        <i class="fa fa-angle-double-right"></i> Correo electronico
                                                    </label>
                                                    <?php
                                                    echo Form::text('email', Input::previous('email'), array(
                                                        'placeholder' => 'Correo electronico',
                                                        'autocomplete' => 'off',
                                                        'class' => 'form-control',
                                                        'data-rule-required' => 'true',
                                                        'id' => 'field-2'
                                                    ));
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-field-22">
                                                        <i class="fa fa-check-square-o"></i> Estado
                                                    </label>
                                                    <?php
                                                    $estados = array('active' => 'Activo', 'inactive' => 'Inactivo');
                                                    echo Form::select('status', $estados, Input::previous('status'), array('class' => 'form-control'));
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-field-3">
                                                        <i class="fa fa-file-text-o"></i> Acerca del usuario
                                                    </label>
                                                    <?php
                                                    echo Form::textarea('bio', Input::previous('bio'), array(
                                                        'id' => 'field-3',
                                                        'data-rule-required' => 'true',
                                                        'class' => 'form-control',
                                                        'rows' => '4'
                                                    ));
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
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout-3.4.1.debug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout.mapping-latest.debug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {


        //$('#form_nuevo').validate();

    });
</script>
</body>
</html>