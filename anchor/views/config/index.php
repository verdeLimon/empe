<?php echo $header; ?>
<!-- container -->
<!-- container -->
<div class="openerp openerp_webclient_container" style="height: calc(100% - 34px);">
    <?php echo $menu; ?>
    <!-- main -->
    <div class="oe_application">
        <div class="oe-control-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="ol-md-12">
                        <ol class="breadcrumb">
                            <li><a>Inicio</a></li>
                            <li class="active">Config</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead">
                    <button type="submit" class="btn btn-green btn-menu" form="form_nuevo">
                        <i class="fa fa-save"></i> Guardar
                    </button>
                </div>
            </div>
        </div>
        <div class="oe-view-manager">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $messages; ?>
                            <form method="post" action="<?php echo Uri::to('admin/config'); ?>" id="form_nuevo" class="form-horizontal">
                                <input name="token" type="hidden" value="<?php echo $token; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Aplicación</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sistema</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                                Título del sitio:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input name="sitename" value="<?php echo Config::app("sitename"); ?>" placeholder="Título corto del sitio" id="form-field-1" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="form-field-2">
                                                                Descripcion:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input name="description" value="<?php echo Config::app("description"); ?>" placeholder="Desecripción del sitio" id="form-field-2" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="form-field-3">
                                                                Zona horaria:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <select name="timezone" class="form-control">
                                                                    <option value="0">Please, select timezone</option>
                                                                    <?php foreach (tz_list() as $t) { ?>
                                                                        <?php $selected = (Config::app("timezone") == $t['zone'] ) ? ' selected' : ''; ?>
                                                                        <option value="<?php print $t['zone'] ?>"<?php echo $selected; ?>>
                                                                            <?php print $t['diff_from_GMT'] . ' - ' . $t['zone'] ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="form-field-4">
                                                                Plantilla:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <select id="label-theme" name="theme" class="form-control">
                                                                    <?php foreach ($themes as $theme => $about): ?>
                                                                        <?php $selected = (Input::previous('theme', Config::app("theme")) == $theme) ? ' selected' : ''; ?>
                                                                        <option value="<?php echo $theme; ?>"<?php echo $selected; ?>>
                                                                            <?php echo $about['name']; ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <!--                                                            <button class="btn btn-default" type="submit">
                                                                                                                            ddd
                                                                                                                        </button>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="profile">
                                                    ...
                                                </div>
                                            </div>
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
<script>
</script>
</body>
</html>