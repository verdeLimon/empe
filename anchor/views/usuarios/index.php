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
                            <li><a href="<?php echo Uri::to('admin/' . $menup['url']); ?>">Usuarios</a></li>
                            <li class="active">principal</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead text-right clearfix">

                    <a href="<?php echo Uri::to('admin/' . $menup['url'] . '/' . $nuevo['url']); ?>" class="btn btn-green btn-menu">
                        <i class="fa fa-plus-circle fa-15px"></i> <?php echo $nuevo['titulo']; ?>
                    </a>
                    <!--                    <a href="?m=ravance" class="btn btn-light-grey btn-menu">
                                            <i class="fa fa-mail-reply"></i> Volver a registro de avances
                                        </a>
                                        <a class="btn btn-default btn-menu">
                                            <i class="fa fa-refresh"></i> Recargar datos
                                        </a>
                    <a  href="<?php echo Uri::to('admin/' . $menup['url'] . '/papelera'); ?>" class="btn btn-default btn-menu">
                        <i class="fa fa-trash"></i> Ir a la papelera
                    </a>-->
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
                                    <table id="paginas" class="table table-striped table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Acciones</th>
                                                <th>Nombre</th>
                                                <th class="hidden-xs">Estado</th>
                                                <th class="text-center hidden-xs">ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($usuarios as $_m): ?>
                                                <tr>
                                                    <td>
                                                        <div class="btn-group btn-group-sm">
                                                            <?php $op = ($_m->status) ? '0' : '1'; ?>
                                                            <a href="<?php echo Uri::to('admin/' . $menup['url'] . '/editar/' . $op . '/' . $_m->id); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo ($_m->status) ? 'Archivar' : 'Publicar'; ?>" class="btn btn-default active">
                                                                <i class="fa <?php echo ($_m->status) ? 'fa-check color-green' : 'fa-window-close color-red'; ?>"></i>
                                                            </a>
                                                            <a href="<?php echo Uri::to('admin/' . $menup['url'] . '/editar/' . $_m->id); ?>" data-toggle="tooltip" data-placement="top" title="Editar usuario" class="btn btn-default">
                                                                <i class="fa fa-edit color-green"></i> Editar
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $_m->username; ?></td>
                                                    <td class="hidden-xs">
                                                        <a href="#" class="btn btn-default btn-xs disabled">
                                                            <i class="fa <?php echo ($_m->status) ? 'fa-check color-green' : 'fa-window-close color-red'; ?>"></i>
                                                            <?php echo ($_m->status) ? 'Publicado' : 'Archivado'; ?>
                                                        </a>
                                                    </td>
                                                    <td class="text-center hidden-xs"><?php echo $_m->id; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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
<script src="<?php echo asset('anchor/views/assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/datatables/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout-3.4.1.debug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#paginas').DataTable({
            //"pageLength": 5,
            //"dom": '<"pull-left"f><"pull-right"l>tip',
            "ordering": false,
//            responsive: true,
//            "columnDefs": [
//                {"width": "90px", "targets": 0},
//                {"width": "90px", "targets": 4}
//            ],

            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
            }
        });
        $('.o-trash').click(function () {
            return confirm("Seguro que desea enviar a la papelera?");
        })
    });
</script>
</body>
</html>