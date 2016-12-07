<?php theme_include('header'); ?>
<!-- Begin Body -->
<div class="container">
    <!--    <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>-->
    <div class="no-gutter row">
        <?php theme_include('menu'); ?>
        <!-- right content column-->
        <div class="col-md-9" id="content">
            <div class="panel">
                <div class="panel-heading" style="background-color:#111;color:#fff;">
                    <!--                    Top Stories-->
                </div>
                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="well well-sm oe_form_sheetbg">
                                <strong>Provincia:</strong>
                                <select data-bind="options: ubicaciones,optionsText: 'provincia',value: lugarSeleccionado,optionsCaption: '-- SELECCIONE --'">
                                </select>
                                <strong>Distrito:</strong>
                                <div data-bind="with: lugarSeleccionado" style="display: inline">
                                    <select data-bind="options: distritos, optionsText: 'distrito',value: $root.distritoSeleccionado,optionsCaption: '-- SELECCIONE --'">
                                    </select>
                                </div>
                                <!--                                <button  class="btn btn-success btn-menu btn-sm">
                                                                    <i class="fa fa-save"></i> Balance
                                                                </button>-->
                                <a data-bind="click:$root.reload" href="javascript:;" class="btn btn-default btn-menu btn-sm">
                                    <i class="fa fa-refresh"></i> Recargar
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id='chartContainer' style="width: 100%;height:  380px;" class="center-block">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    abc
                                </div>
                            </div>
                            negocio nombre::<?php echo $data->nombrenegocio; ?><br>
                            :::<?php echo $data->ubicacion->distrito; ?>
                            <br>
                            <h2><?php echo var_dump($se2->encuestado->nombrenegocio); ?></h2>
                            ::::<?php echo ActiveRecord\Utils::results_to_json($se); ?>
                            <?php
                            foreach ($se as $dato) {
                                echo $dato->formalizacion . " :: " . $dato->total . "<br>";
                            }
                            ?>
                            <div class="alert alert-warning">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="center"></th>
                                            <th class="center" style="width:85px"><small>Fecha</small></th>
                                            <th class="center"><small><small>N° de Org´s participantes</small></small></th>
                                            <th class="center"><small><small>Total de hombres</small></small></th>
                                            <th class="center"><small><small>Total de Mujeres</small></small></th>
                                            <th class="center"><small><small>Total Participantes</small></small></th>
                                            <th class="center"><small><small>N° veces re- programado</small></small></th>
                                            <th class="center" style="width:80px"><small>Logros de aprendizaje</small></th>
                                            <th class="center" style="width:80px"><small>Logros de calidad de servicio</small></th>

<!--                                            <th style="padding: 0 30px;" class="center">Fecha programada </th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
        <!--                                        <tr>
                                            <td><strong><small><small>PLANIFICADO</small></small></strong></td>
                                            <td class="text-center">
                                                <span data-bind="text:formatDMY(fechap2())">12-12-2015</span>
                                                <small data-bind="html:reprogramadolbl"></small>
                                            </td>
                                            <td class="text-center"><span data-bind="text:organizaciones">0</span></td>
                                            <td class="text-center"><span data-bind="text:hombres">0</span></td>
                                            <td class="text-center"><span data-bind="text:mujeres">15</span></td>
                                            <td class="text-center"><span data-bind="text:thm">15</span></td>
                                            <td class="text-center" rowspan="2"><span data-bind="text:nreporgramado">0</span></td>
                                            <td class="text-center" rowspan="2">
                                                <div class="input-group">
                                                    <input data-bind="value:p_ajustado" class="form-control" disabled="disabled" type="text">
                                                    <span class="input-group-btn">
                                                        <button data-bind="click:$root.o_aprendisaje,disable:$parent.suspendido,tooltip:{title:'Ingresar Logros de aprendizaje'}" class="btn btn-default" style="padding:6px" data-original-title="" title="">
                                                            <i class="fa fa-calculator"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-center" rowspan="2">
                                                <div class="input-group">
                                                    <input data-bind="value:p_servicio" class="form-control" disabled="disabled" type="text">
                                                    <span class="input-group-btn">
                                                        <button data-bind="click:$root.o_servicio,disable:$parent.suspendido,tooltip:{title: 'Ingresar Logros de calidad de servicio' }" class="btn btn-default" style="padding:6px" data-original-title="" title="">
                                                            <i class="fa fa-calculator"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong><small><small>EJECUTADO</small></small></strong></td>
                                            <td class="text-center"><span data-bind="text:formatDMY(fechap_e())">12-12-2015</span></td>
                                            <td class="text-center"><span data-bind="text: organizaciones_e"></span></td>
                                            <td class="text-center"><span data-bind="text: hombres_e">0</span></td>
                                            <td class="text-center"><span data-bind="text: mujeres_e">18</span></td>
                                            <td class="text-center"><span data-bind="text: thm_e">18</span></td>
                                        </tr>

                                        <tr>
                                            <td><strong><small><small>PLANIFICADO</small></small></strong></td>
                                            <td class="text-center">
                                                <span data-bind="text:formatDMY(fechap2())">20-02-2016</span>
                                                <small data-bind="html:reprogramadolbl"></small>
                                            </td>
                                            <td class="text-center"><span data-bind="text:organizaciones">0</span></td>
                                            <td class="text-center"><span data-bind="text:hombres">0</span></td>
                                            <td class="text-center"><span data-bind="text:mujeres">15</span></td>
                                            <td class="text-center"><span data-bind="text:thm">15</span></td>
                                            <td class="text-center" rowspan="2"><span data-bind="text:nreporgramado">0</span></td>
                                            <td class="text-center" rowspan="2">
                                                <div class="input-group">
                                                    <input data-bind="value:p_ajustado" class="form-control" disabled="disabled" type="text">
                                                    <span class="input-group-btn">
                                                        <button data-bind="click:$root.o_aprendisaje,disable:$parent.suspendido,tooltip:{title:'Ingresar Logros de aprendizaje'}" class="btn btn-default" style="padding:6px" data-original-title="" title="">
                                                            <i class="fa fa-calculator"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-center" rowspan="2">
                                                <div class="input-group">
                                                    <input data-bind="value:p_servicio" class="form-control" disabled="disabled" type="text">
                                                    <span class="input-group-btn">
                                                        <button data-bind="click:$root.o_servicio,disable:$parent.suspendido,tooltip:{title: 'Ingresar Logros de calidad de servicio' }" class="btn btn-default" style="padding:6px" data-original-title="" title="">
                                                            <i class="fa fa-calculator"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong><small><small>EJECUTADO</small></small></strong></td>
                                            <td class="text-center"><span data-bind="text:formatDMY(fechap_e())">20-02-2016</span></td>
                                            <td class="text-center"><span data-bind="text: organizaciones_e"></span></td>
                                            <td class="text-center"><span data-bind="text: hombres_e">0</span></td>
                                            <td class="text-center"><span data-bind="text: mujeres_e">13</span></td>
                                            <td class="text-center"><span data-bind="text: thm_e">13</span></td>
                                        </tr>-->
                                    </tbody>
                                    <tfoot>
        <!--                                        <tr class="info">
                                            <td class="text-center"><strong><small>% Logro promedio</small></strong></td>
                                            <td class="text-center"></td>
                                            <td class="text-center"><strong data-bind="text:p_orgs">0%</strong></td>
                                            <td class="text-center"><strong data-bind="text:p_hs">0%</strong></td>
                                            <td class="text-center"><strong data-bind="text:p_ms">103.33%</strong></td>
                                            <td class="text-center"><strong data-bind="text:p_hms">103.33%</strong></td>
                                            <td class="text-center"><strong data-bind="text:p_nrep">0</strong></td>
                                            <td class="text-center"><strong data-bind="text:tp_aprendisaje">7.01</strong></td>
                                            <td class="text-center"><strong data-bind="text:tp_servicio">12.88</strong></td>
                                        </tr>-->
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="//placehold.it/900x500/EEEEEE" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            <div class="item">
                                <img src="//placehold.it/900x500/EEEEEE" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://conceptodefinicion.de/wp-content/uploads/2011/10/CENSO05.jpg" width="900" height="500" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                            ...
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2>The Year of Responsive Design.</h2>
                            2013 was marked as the year of Responsive Web Design (RWD). The Web is filled with big brands, galleries and magical examples that media queries demonstrate the glory of responsive design.
                            <br><br>
                            <button class="btn btn-default">More</button>
                        </div>
                        <div class="col col-sm-4">
                            <a href="#"><img src="//placehold.it/300x120/77CCDD/66BBCC" class="img-responsive"></a>
                            <div class="text-muted"><small>Aug 15 / John Pierce</small></div>
                            <p>
                                Web design has come a long way since 1999.
                            </p>
                            <hr>
                            <a href="#"><img src="//placehold.it/300x120/77CCDD/66BBCC" class="img-responsive"></a>
                            <div class="text-muted"><small>Aug 15 / Wilson Traiker</small></div>
                            <p>
                                The "flat" look was a big trend this year.
                            </p>
                        </div>
                    </div>
                    <hr>
                    "Mobile first" and "unobtrusive JavaScript" (AKA: "progressive enhancement") are strategies for when a new site design is being considered. These are related concepts that predated RWD: browsers of basic mobile phones do not understand JavaScript or media queries, so the recommended practice is to create a basic web site then enhance it for smart phones and PCs—rather than try "graceful degradation" to make a complex, image-heavy site work on the most basic mobile phones.
                    <br><br>
                    Media Queries is a CSS3 module allowing content rendering to adapt to conditions such as screen resolution (e.g. smartphone vs. high definition screen). It became a W3C recommended standard in June 2012.[1] and is a cornerstone technology of Responsive Web Design.
                    <hr>
                    <div class="well text-center">
                        <h1>Centered Text</h1>
                        This was a 2.x challenge that seems a little easier in 3.
                        <br><br>
                        <div style="font-size:70pt">
                            <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                            <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                            <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                        </div>
                    </div>
                    <hr>
                    <h2>CSS3</h2>
                    <img src="//placehold.it/150x100/EEEEEE" class="img-responsive pull-right">
                    To understand the RWD approach, you must first understand CSS - the basis of responsive design. CSS enables the developer to use percentage-based (AKA fluid or proportion-based) grids, CSS3 media queries. The web site then adapts to multiple devices (desktop, laptop, tablet, smartphone) and display conditions such as browser size and screen resolution.
                    <br><br>
                    <button class="btn btn-default">More</button>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h1>There is still a lot to be said about the Responsive Web.</h1>
                        </div>
                    </div>
                    <hr>
                    <h2>Responsive Text</h2>
                    Have you ever seen large text blocks overflow their container, or get cut-off? One way to handle this is to ensure
                    the text content wraps inside the container. But the more "responsive" way is to scale font-sizes accordingly as the size of the viewing area
                    (viewport) changes. Creators of <a href="http://fittextjs.com/">FitText</a> have mastered this in the form of a plugin.
                    <hr>
                    <div class="well">
                        <h1>Well..</h1>
                        Does anyone know why <a href="#">@mdo</a> or <a href="#">@fat</a> would name this element a "well"?
                    </div>
                    <hr>
                    <h2>Responsive Images</h2>
                    The sizing "grid" is not the only aspect of responsive design. Making images and media object scale correctly is another consideration for responsive developers.
                    <span class="hidden-sm">Go ahead and shrink your browser's width to see how the HTML elements and images respond as the width of the viewport changes.</span>
                    <h1><a href="#"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a></h1>
                    <hr>
                    Bootstrap 3 is the latest "Mobile-first" release of the Bootstrap framework that offers a starter foundation for Web designers and developers.
                    Bootstrap consists of a CSS and JavaScript library. To use Bootstrap, you simply include (reference) in the HTML of your Web page. There is also a CDN for
                    Bootstrap that serves pages faster.
                    <hr>
                    This theme was made at Bootply. Bootply is a HTML, JavaScript and CSS editor app built just for Bootstrap. Bootply enables developers to easily apply the Bootstrap Framework to their projects using a beautiful hand-coding interface. The browser-based Bootply editor lets developers select and paste Bootstrap friendly code snippets. Bootply can be used to test, manage and share any Bootstrap code, from small snippets to entire Bootstrap-ready themes. Find it at http://bootply.com
                    <hr>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/EDEDED" class="img-responsive"></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/DDDDDD" class="img-responsive"></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/555555/EEE" class="img-responsive"></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/F3F3F3" class="img-responsive"></a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/999999/DDD" class="img-responsive"></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/CCCCCC" class="img-responsive"></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/EDEDED" class="img-responsive"></a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="#"><img src="//placehold.it/600X200/E0E0E0" class="img-responsive"></a>
                        </div>
                    </div>
                    <hr>
                    <h4><a href="http://bootply.com/69913">Edit on Bootply</a></h4>
                    <hr>
                </div><!--/panel-body-->
            </div><!--/panel-->
            <!--/end right column-->
        </div>
    </div>
</div>
<?php theme_include('../header'); ?>
<?php include('../js.php'); ?>
</body>
</html>