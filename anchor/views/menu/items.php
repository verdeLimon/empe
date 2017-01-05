<?php echo $header; ?>
<!-- container -->
<!--<div class="row">
    <div class="col-md-12">
        degjdogjdo
    </div>
</div>-->
<?php
$menus = Registry::get('menus');
$menup = $menus['menu'];
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
                            <li><a href="<?php echo Uri::to('admin/' . $menup['url']); ?>">Men&uacute;</a></li>
                            <li class="active">items</li>
                        </ol>
                    </div>
                </div>
                <div class="subhead clearfix">
                    <!--                    <button type="button" class="btn btn-green btn-menu">
                                            <i class="fa fa-plus-circle fa-15px"></i>
                                            A&ntilde;adir nuevo elemento de menu
                                        </button>-->
                    <a href="<?php echo Uri::to('admin/' . $menup['url']); ?>" class="btn btn-light-grey btn-menu">
                        <i class="fa fa-mail-reply"></i> Volver al listado
                    </a>
                    <a data-bind="click: $root.reload" class="btn btn-default btn-menu">
                        <i class="fa fa-refresh"></i> Recargar datos
                    </a><!--
<a  href="<?php echo Uri::to('admin/' . $menup['url'] . '/papelera'); ?>" class="btn btn-default btn-menu">
    <i class="fa fa-trash"></i> Ir a la papelera
</a>-->
                </div>
            </div>
        </div>
        <div class="oe-view-manager clearfix">
            <div class="oe_form_sheet">
                <div class="oe_clear">

                    <?php echo $messages; ?>
                    <!-- Tab panes -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab">
                                <span class="glyphicon glyphicon-inbox"></span>
                                <strong data-bind="text: item.nombre"></strong>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                <i class="fa fa-sort"></i>
                                <strong>Ordenar</strong>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                            <ul class="list-group" style="margin-bottom: 0;border-bottom:1px solid #ddd;">
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <i class="fa fa-arrows-v"></i>
                                    </div>
<!--                                    <span class="glyphicon glyphicon-star-empty"></span>-->
                                    &nbsp;
                                    <span  class="name" style="min-width: 120px; display: inline-block;">
                                        <strong>Titulo</strong>
                                    </span>
                                    <span class="hidden-sm hidden-xs"><strong>Tipo</strong></span>
                                    <span class="text-muted hidden-sm hidden-xs" style="font-size: 11px;"></span>
                                    <strong class="pull-right">
                                        operaciones
                                    </strong>
                                </li>
                            </ul>
                            <ul data-bind="foreach:item.menuitems_o" class="list-group">
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <i class="fa fa-arrows"></i>
                                    </div>
<!--                                    <span class="glyphicon glyphicon-star-empty"></span>-->
                                    <span data-bind="text:texto" class="name" style="min-width: 120px; display: inline-block;">
                                    </span>
                                    <span data-bind="text:tipo2" class="hidden-sm hidden-xs"></span>
                                    <span data-bind="html:url2" class="text-muted hidden-sm hidden-xs" style="font-size: 11px;"></span>
                                    <div class="btn-group btn-group-xs pull-right">
                                        <a data-bind="click:$parent.operar" href="#" class="btn btn-default active">
                                            <i data-bind="css:icono" class="fa"></i>
                                        </a>
                                        <a data-bind="click:$parent.editar" href="#" class="btn btn-default">
                                            <i class="fa fa-edit color-green"></i> Editar
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <button data-bind="click:nuevo" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-plus-square"></i>
                                Agregar nuevo item
                            </button>
<!--                            <pre data-bind="text: ko.toJSON(item.menuitems_o)"></pre>-->
                            <!-- modal nuevo -->
                            <form id="koform" method="post">
                                <div data-bind="with:$root.ne" id="mymodal" class="modal fade" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <!--                                            <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                            <h4 class="modal-title">Modal title</h4>
                                                                                        </div>-->
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="selectmodal"> Menu Padre </label>
                                                    <select data-bind="options: $parent.item.menuitems_o,
                                                                        optionsText: 'texto',
                                                                        optionsValue: 'id',
                                                                        value: parent_menuitem_id,
                                                                        optionsCaption: '-- SELECCIONE --',
                                                                        select2: { }" style="width:100%" id="selectmodal2" name="padre" class="form-control">

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ietitulo">Titulo </label>
                                                    <input data-bind="textInput:texto " type="text" class="form-control" id="ietitulo" placeholder="Titulo" data-rule-required="true">
                                                </div>
                                                <div class="form-group">
                                                    <label for="selectmodal">Tipo </label>
                                                    <div class="radio">
                                                        <label>
                                                            <input data-bind="checked: tipo" type="radio" name="tipo" value="pagina" data-rule-required="true">
                                                            P&aacute;gina
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input data-bind="checked: tipo" type="radio" name="tipo" value="url" data-rule-required="true">
                                                            Url externa
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- ko if: tipo()=='url' -->
                                                <div class="form-group">
                                                    <label for="idurl">URL </label>
                                                    <input data-bind="textInput: url" type="text" name="optionsRadios" class="form-control" id="idurl" data-rule-required="true">
                                                </div>
                                                <!-- /ko -->
                                                <!-- ko if: tipo()=='pagina' -->
                                                <div class="form-group">
                                                    <label for="selectmodal">Pagina </label>
                                                    <select data-bind="options: $parent.paginas,
                                                                        optionsText: 'titulo',
                                                                        optionsValue: 'id',
                                                                        value: url,
                                                                        optionsCaption: '-- SELECCIONE --',
                                                                        select2: { }" style="width:100%" id="selectmodal" name="tipoooo" class="form-control" data-rule-required="true">

                                                    </select>
                                                </div>
                                                <!-- /ko -->
                                                <div class="form-group">
                                                    <label for="selectmodal">Abrir en: </label>
                                                    <div class="radio">
                                                        <label>
                                                            <input data-bind="checked: target" type="radio" name="target" value="_self" data-rule-required="true">
                                                            Misma Ventana
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input data-bind="checked: target" type="radio" name="target" value="_blank" data-rule-required="true">
                                                            Nueva ventana
                                                        </label>
                                                    </div>
                                                </div>
<!--                                                <pre data-bind="text: ko.toJSON($root.ne)"></pre>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button data-bind="click: $parent.cancelar" type="button" class="btn btn-danger" data-dismiss="modal">
                                                    <i class="fa fa-close"></i> Cancelar
                                                </button>
                                                <button data-bind="click: $parent.guardar" type="button" class="btn btn-success">
                                                    <i class="fa fa-floppy-o"></i> Guardar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /modal nuevo -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="dd" id="nestable3">
                                <ol class="dd-list">
                                    <?php foreach ($menuu->sorted_items() as $key => $_mi): ?>
                                        <li class="dd-item dd3-item" data-id="<?php echo $_mi->id; ?>">
                                            <div class="dd-handle dd3-handle"></div><div class="dd3-content"><?php echo $_mi->texto; ?></div>
                                            <?php if (count($_mi->childrens)): ?>
                                                <ol class="dd-list">
                                                    <?php foreach ($_mi->childrens as $__mi): ?>
                                                        <li class="dd-item dd3-item" data-id="<?php echo $__mi->id; ?>">
                                                            <div class="dd-handle dd3-handle"></div><div class="dd3-content"><?php echo $__mi->texto; ?></div>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ol>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                                <br>
                                <button id="ordenar"  type="button" class="btn btn-success btn-sm">
                                    <i class="fa fa-save"></i>
                                    Guardar orden
                                </button>
                            </div>
                            <input type="hidden" id="nestable2-output">
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
<script>var base = '<?php echo Uri::to(''); ?>';</script>
<script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/jquery-ui-1.12.1/jquery-ui.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jquery.ui.touch-punch.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jquery.blockUI.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/noty/jquery.noty.packaged.min.js'); ?>" type="text/javascript"></script>

<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/localization/messages_es.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/select2/js/select2.full.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout-3.4.1.debug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout-sortable.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout-select2.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/ko.editables.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout.mapping-latest.debug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/Nestable/jquery.nestable.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $.fn.select2.defaults.set("theme", "bootstrap");
        var id = <?php echo $id; ?>;
        function Item(options) {
            var self = this;
            ko.mapping.fromJS(options, {}, self);
            self.tipo2 = ko.computed(function () {
                return self.tipo() == "url" ? "Enlace externo:" : "Pagina interna:";
            });
            self.url2 = ko.computed(function () {
                return self.tipo() == "url" ? '<a href="' + self.url() + '" target="_blank">' + self.url() + '</a>' : "Enlace a pagina interna";
            });
            self.icono = ko.computed(function () {
                return self.estado() == 0 ? 'fa-window-close color-red' : 'fa-check color-green';
            });
        }
        function ViewModel(data) {
            var mapping = {'menuitems_o': {create: function (options) {
                        return new Item(options.data);
                    }}};
            var self = this;
            self.item = ko.mapping.fromJS(data, mapping);
            self.paginas = ko.mapping.fromJS([]);
            self.ne = ko.observable(); //contenedor editar o nuevo
//ordenar
            self.callback = function () {
                $.post(base + "admin/api/menu/ordenar/" + id, {data: ko.toJSON(self.item.menuitems_o)}, function (data) {
                    try {
                        var res = JSON.parse(data);
                        //alert(res.msg);
                        self.reload();
                        noty2(res.msg, 'success');
                    } catch (e) {
                        self.reload();
                        alert("error:" + e);
                    }
                });
            };
            self.guardar = function () {
                $frm = $("#koform");
                if ($frm.valid()) {
                    $.post(base + "admin/api/menu/guardar/" + id, {data: ko.toJSON(self.ne)}, function (data) {
                        try {
                            var res = JSON.parse(data);
                            noty2(res.msg, 'success');
                            self.reload();
                        } catch (e) {
                            alert("error:" + e);
                        }
                    });
                    $('#mymodal').modal('hide');
                }
            };
            self.operar = function (item) {
                //alert(ko.toJSON(item));
                $.post(base + "admin/api/menu/operar", {data: ko.toJSON(item)}, function (data) {
                    try {
                        var res = JSON.parse(data);
                        noty2(res.msg, 'success');
                        self.reload();
                    } catch (e) {
                        alert("error:" + e);
                    }
                });
            }
            self.nuevo = function () {
                self.loadpg();//actualizar paginas
                var nuevo = new Item({"id": null, "texto": "", "url": "", "tipo": "pagina", "estado": 1, "orden": 1, "target": "_self", "parent_menuitem_id": null, "menu_id": id});
                ko.editable(nuevo);
                nuevo.beginEdit();
                self.ne(nuevo);
                $('#mymodal').modal({
                    keyboard: false
                });
            }
            self.editar = function (item) {
                self.loadpg();//actualizar paginas
                ko.editable(item);
                item.beginEdit();
                self.ne(item);
                $('#mymodal').modal({
                    keyboard: false
                });
            }
            self.cancelar = function () {
                self.ne().rollback();
                self.ne(undefined);
                $('#mymodal').modal('hide');
            };
            self.loadpg = function () {
                $.getJSON(base + "admin/api/paginas", function (data) {
                    ko.mapping.fromJS(data, mapping, self.paginas);
                });
            }
            self.loadmenu = function () {
                $.getJSON(base + "admin/api/menu/items/" + id, function (data) {
                    ko.mapping.fromJS(data, mapping, self.item);
                });
            }
            self.reload = function () {
                self.loadmenu();
                self.loadpg();
            };
        }
        $.getJSON(base + "admin/api/menu/items/" + id, function (data) {
            var vm = new ViewModel(data);
            ko.applyBindings(vm);
            vm.loadpg();
        });
        $("#ordenar").click(function () {
            // alert("Handler for .click() called.");
            var json = $("#nestable2-output").val();
            $.post(base + "admin/api/menu/ordenar/" + id, {data: json}, function (data) {
                try {
                    var res = JSON.parse(data);
                    noty2(res.msg, 'success');
                } catch (e) {
                    alert("error:" + e);
                }
            });
        });

        var updateOutput = function (e)
        {
            var list = e.length ? e : $(e.target),
                    output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };
        $('#nestable-menu').on('click', function (e)
        {
            var target = $(e.target),
                    action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });
        var $nestable = $('#nestable3').nestable({
            maxDepth: 2
//            expandBtnHTML: '<i class="icon-collapse-alt" data-action="expand"></i> <button data-action="expand">Expand</button>',
//            collapseBtnHTML: '<button data-action="collapse"><i class="icon-collapse-alt"></i> Collapse</button>'
        });
        $nestable.on('change', updateOutput);
        updateOutput($('#nestable3').data('output', $('#nestable2-output')));
    });
</script>
</body>
</html>