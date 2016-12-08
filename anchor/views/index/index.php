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
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Ultimas p&aacute;ginas a&ntilde;adidas</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
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
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Ultimas p&aacute;ginas a&ntilde;adidas</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
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
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
                                    <tr>
                                        <td>r </td>
                                        <td> r</td>
                                        <td> r</td>
                                        <td>r </td>
                                        <td>r </td>
                                        <td>r </td>
                                    </tr>
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
<script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        language: 'es',
        theme: 'modern',
        relative_urls: true,
        plugins: [
            'moxiemanager advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true
    });
    tinymce.init({
        selector: 'textarea',
        language: 'es',
        plugins: 'moxiecut'
    });
</script>

</body>
</html>