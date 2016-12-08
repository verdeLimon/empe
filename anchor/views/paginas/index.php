<?php echo $header; ?>
<!-- container -->
<!--<div class="row">
    <div class="col-md-12">
        degjdogjdo
    </div>
</div>-->
<div class="openerp openerp_webclient_container" style="height: calc(100% - 34px);">
    <?php echo $menu; ?>
    <!-- main -->
    <div class="oe_application">
        <div class="oe-control-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="ol-md-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo Uri::to('admin/paginas'); ?>">Paginas</a></li>
                            <li class="active">principal</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead">
                    <a class="btn btn-green btn-menu">
                        <i class="fa fa-plus-circle fa-15px"></i> Crear p&aacute;gina
                    </a>
                    <!--                    <a href="?m=ravance" class="btn btn-light-grey btn-menu">
                                            <i class="fa fa-mail-reply"></i> Volver a registro de avances
                                        </a>-->
                    <a class="btn btn-default btn-menu">
                        <i class="fa fa-refresh"></i> Recargar datos
                    </a>
                    <a class="btn btn-default btn-menu">
                        <i class="fa fa-trash"></i> Papelera
                    </a>
                </div>
            </div>
        </div>
        <div class="oe-view-manager">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table id="paginas" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>dfkgfd</th>
                                        <th>dfkgfd</th>
                                        <th>dfkgfd</th>
                                        <th>dfkgfd</th>
                                        <th>dfkgfd</th>
                                        <th>dfkgfd</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($paginas as $_p): ?>
                                        <tr>
                                            <td><?php echo $_p->id; ?></td>
                                            <td> r</td>
                                            <td> r</td>
                                            <td>r </td>
                                            <td>r </td>
                                            <td>r </td>
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
<?php echo $javascript; ?>
<?php echo $footer; ?>


</body>
</html>