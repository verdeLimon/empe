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
                            <li class="active">media</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead">
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
                            <div id="elfinder"></div>
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
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/elFinder/js/elfinder.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/elFinder/js/i18n/elfinder.es.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {

        $('#elfinder').elfinder({
            url: '<?php echo asset('anchor/views/assets/elFinder/php/connector.minimal.php'); ?>', // connector URL (REQUIRED)
            lang: 'es'                    // language (OPTIONAL)
        });

    });
</script>
</body>
</html>