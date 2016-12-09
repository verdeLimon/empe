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
                            <li class="active">principal</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead">
<!--                    <a href="<?php echo Uri::to('admin/' . $menup['url'] . '/' . $nuevo['url']); ?>" class="btn btn-green btn-menu">
                        <i class="fa fa-plus-circle fa-15px"></i> <?php echo $nuevo['titulo']; ?>
                    </a>
                                        <a href="?m=ravance" class="btn btn-light-grey btn-menu">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $messages; ?>
                            <table id="paginas" class="table table-striped table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>Acciones</th>
                                        <th>Estado</th>
                                        <th>T&iacute;tulo</th>
                                        <th class="text-center">Autor</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center col-md-2">ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($paginas as $_p): ?>
                                        <tr>
                                            <td><div class="btn-group btn-group-sm">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo ($_p->estado == 'publicado') ? 'Archivar' : 'Publicar'; ?>" class="btn btn-default active">
                                                        <i class="fa <?php echo ($_p->estado == 'publicado') ? 'fa-check color-green' : 'fa-window-close color-red'; ?>"></i>
                                                    </a>
                                                    <a href="<?php echo Uri::to('admin/' . $menup['url'] . '/editar/' . $_p->id); ?>" data-toggle="tooltip" data-placement="top" title="Editar p&aacute;gina" class="btn btn-default">
                                                        <i class="fa fa-edit color-green"></i> Editar
                                                    </a>
                                                    <a href="<?php echo Uri::to('admin/' . $menup['url'] . '/papelera/' . $_p->id); ?>" data-toggle="tooltip" data-placement="top" title="Enviar a la papelera" class="btn btn-default">
                                                        <i class="fa fa-trash color-green"></i> Papelera
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs disabled">
                                                    <i class="fa <?php echo ($_p->estado == 'publicado') ? 'fa-check color-green' : 'fa-window-close color-red'; ?>"></i>
                                                    <?php echo ($_p->estado == 'publicado') ? 'Publicado' : 'Archivado'; ?>
                                                </a>
                                            </td>
                                            <td><?php echo $_p->titulo; ?></td>
                                            <td class="text-center"><?php echo $_p->autor->username; ?></td>
                                            <td class="text-center"><?php echo $_p->created_at->format('d-m-Y'); ?></td>
                                            <td class="text-center"><?php echo $_p->id; ?></td>
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
    <!-- /main -->
</div>
<!-- /container -->
<?php echo $footer; ?>
<?php echo $indexjs; ?>
</body>
</html>