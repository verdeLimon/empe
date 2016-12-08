<?php echo $header; ?>
<!-- container -->
<div class="openerp openerp_webclient_container" style="height: calc(100% - 34px);">
    <!-- menu left -->
    <div class="oe_leftbar hidden-xs">
        <a class="oe_logo" href="/web">
            <span class="oe_logo_edit oe_logo_edit_admin">Editar información de compañía</span>
            <img src="img/company_logo.png" alt=""/>
        </a>
        <div class="oe_secondary_menus_container">
            <div class="oe_secondary_menu">
                <div class="oe_secondary_menu_section">
                    Ventas
                </div>
                <div class="oe_secondary_menu_section">
                    Facturacion
                </div>
                <ul class="oe_secondary_submenu nav nav-pills nav-stacked">
                    <li>
                        <a href="#" class="oe_menu_leaf">
                            <span class="oe_menu_text">
                                Pedidos
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="oe_menu_leaf">
                            <span class="oe_menu_text">
                                Pedidos
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="oe_menu_leaf">
                            <span class="oe_menu_text">
                                Pedidos
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="oe_footer">
            &COPY; <a href="#" target="_blank"><span>companyname</span></a>
        </div>
    </div>
    <!--/ menu left -->
    <!-- main -->
    <div class="oe_application">
        <div class="oe-control-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="ol-md-12">
                        <ol class="breadcrumb">
                            <li><a>Productos</a></li>
                            <li class="active">2L Evian</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oe-view-manager">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Basic panel example
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