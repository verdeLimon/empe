<?php theme_include('header'); ?>
<div class="search-row-wrapper" style="background-image: url(<?php echo theme_url('/assets/images/ibg.jpg'); ?>); background-size: cover; background-position: center center;">
    <div class="container text-center" id="arriba">
        <!--        <div class="col-sm-3">
                    <select class="form-control" name="category" id="search-category">
                        <option selected="selected" value="">Todos los resultados</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" name="location" id="id-location">
                        <option selected="selected" value="">Todos los resultados</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-block btn-primary"> Buscar resultados <i class="fa fa-search"></i></button>
                </div>-->
    </div>
</div>
<div class="main-container">
    <!--    <div class="container">
            <ol class="breadcrumb pull-left">
                <li><a href="#"><i class="icon-home fa"></i></a></li>
                <li><a href="job-list.html"> Jobs </a></li>
                <li class="active">IT/Telecommunication</li>
            </ol>
            <div class="pull-right backtolist"><a href="job-list.html"> <i class="fa fa-angle-double-left"></i> Back to
                    Results</a></div>
        </div>-->
    <div class="container">
        <div class="row">
            <div class = "col-sm-3 page-sidebar col-thin-left">
                <aside>
                    <div class="panel sidebar-panel">
                        <div class="panel-heading"><i class="icon-lamp"></i> Informacion</div>
                        <div class="panel-content">
                            <div class="panel-body text-left">
                                <ul class="cat-list arrow">
                                    <li>
                                        <a href="<?php echo base_url(); ?>">Inicio</a>
                                    </li>
                                    <?php foreach (get_menu('derecha') as $_mi): ?>
                                        <li>
                                            <a href="<?php echo make_url($_mi) ?>" target="<?php echo $_mi->target; ?>"> <?php echo $_mi->texto ?> </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
<!--                                <p><a class="pull-right" href="#"> Conocer más... <i class="fa fa-angle-double-right"></i> </a></p>-->
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <!--                        <div class="categories-list  list-filter">
                                                    <h5 class="list-title"><strong><a href="#">All Categories</a></strong></h5>
                                                    <ul class=" list-unstyled">
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Electronics</span><span class="count">&nbsp;8626</span></a>
                                                        </li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Automobiles </span><span class="count">&nbsp;123</span></a></li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Property </span><span class="count">&nbsp;742</span></a></li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Services </span><span class="count">&nbsp;8525</span></a></li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">For Sale </span><span class="count">&nbsp;357</span></a></li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Learning </span><span class="count">&nbsp;3576</span></a></li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Jobs </span><span class="count">&nbsp;453</span></a></li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Cars &amp; Vehicles</span><span class="count">&nbsp;801</span></a>
                                                        </li>
                                                        <li><a href="sub-category-sub-location.html"><span class="title">Other</span><span class="count">&nbsp;9803</span></a></li>
                                                    </ul>
                                                </div>-->
                        <div class="locations-list  list-filter">
                            <h5 class="list-title"><strong><a href="#">Búsqueda</a></strong></h5>
                            <form role="form" class="form-inline ">
                                <div class="form-group col-sm-6 no-padding">
                                    <input placeholder="" id="minPrice" class="form-control" type="text">
                                </div>


                                <div class="form-group col-sm-3">
                                    <button class="btn btn-default btn-block-xs" type="submit">
                                        <i class="fa fa-search"></i> Buscar
                                    </button>
                                </div>
                            </form>
                            <div style="clear:both"></div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <!--                    <div class = "inner-box">
                                                                                            <h2 class = "title-2">Top Job Categories </h2>
                                            <div class = "inner-box-content">
                                                <ul class = "cat-list arrow">
                                                    <li>
                                                        <a href = "#">Que es <span class = "count">?</span> </a>
                                                    </li>
                                                    <li>
                                                        <a href = "#">Presentación <span class = "count"></span> </a>
                                                    </li>
                                                    <li>
                                                        <a href = "#">Objetivos<span class = "count"></span></a>
                                                    </li>
                                                    <li>
                                                        <a href = "#">Conclusiones <span class = "count"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href = "#"> <span class = "count">723</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>-->
                    <div class = "inner-box no-padding">
                        <div class = "inner-box-content"><a href = "#"><img class = "img-responsive" src = "<?php echo theme_url('/assets/images/site/app.jpg'); ?>" alt = "tv"></a>
                        </div>
                    </div>
<!--                    <div class = "inner-box no-padding"><img class = "img-responsive" src = "<?php echo theme_url('/assets/images/add2.jpg'); ?>" alt = "">
                    </div>-->
                </aside>
            </div>
            <div class="col-sm-9 page-content col-thin-right">
                <div class="inner inner-box ads-details-wrapper">
                    <h2> <?php echo $pagina->titulo; ?> </h2>
                    <span class="info-row">
<!--                        <span class="date">
                            <i class=" icon-clock"> </i> Posted: Monday, 8 February 2016
                        </span>
                        <span class=""> Full Time </span> - <span class="item-location"><i class="fa fa-map-marker"></i> New York </span>-->
                    </span>
                    <div class="Ads-Details ">
                        <?php echo $pagina->html; ?>
                        <div class="content-footer text-left">
                            <a href="#arriba" class="btn  btn-primary"> <i class="fa fa-angle-up"></i> Volver arriba </a>
<!--                            <small> or. Send your CV to: career@gmail.com</small>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style = "clear: both"></div>
        <!--        <div class = "col-lg-12 content-box ">
                    <div class = "row row-featured">
                        <div style = "clear: both"></div>
                        <div class = " relative  content  clearfix">
                            <div class = "">
                                <div class = "tab-lite">

                                    <ul role = "tablist" class = "nav nav-tabs ">
                                        <li class = "active" role = "presentation"><a data-toggle = "tab" role = "tab" aria-controls = "tab1" href = "#tab1" aria-expanded = "true"><i class = "icon-location-2"></i>Top Job Locations</a></li>
                                        <li role = "presentation" class = ""><a data-toggle = "tab" role = "tab" aria-controls = "tab2" href = "#tab2" aria-expanded = "false"><i class = "icon-briefcase"></i>Top Job Titles</a></li>
                                        <li role = "presentation" class = ""><a data-toggle = "tab" role = "tab" aria-controls = "tab3" href = "#tab3" aria-expanded = "false"><i class = "icon-commerical-building"></i>Top Companies</a></li>
                                    </ul>

                                    <div class = "tab-content">
                                        <div role = "tabpanel" class = "tab-pane active" id = "tab1">
                                            <div class = "col-lg-12 tab-inner">
                                                <div class = "row">
                                                    <ul class = "cat-list col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#">Atlanta</a></li>
                                                        <li><a href = "#"> Dallas </a></li>
                                                        <li><a href = "#"> New York </a></li>
                                                        <li><a href = "#">Santa Ana/Anaheim </a></li>
                                                        <li><a href = "#">Wichita </a></li>
                                                        <li><a href = "#"> Anchorage </a></li>
                                                        <li><a href = "#"> Miami </a></li>
                                                        <li><a href = "#">Los Angeles</a></li>
                                                    </ul>
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#">Boston </a></li>
                                                        <li><a href = "#">Houston</a></li>
                                                        <li><a href = "#">Salt Lake City </a></li>
                                                        <li><a href = "#">Virginia Beach </a></li>
                                                        <li><a href = "#"> San Diego </a></li>
                                                        <li><a href = "#">San Francisco </a></li>
                                                        <li><a href = "#">Tampa </a></li>
                                                        <li><a href = "#"> Washington DC </a></li>
                                                    </ul>
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#">Virginia Beach </a></li>
                                                        <li><a href = "#"> San Diego </a></li>
                                                        <li><a href = "#">San Francisco </a></li>
                                                        <li><a href = "#">Tampa </a></li>
                                                        <li><a href = "#"> Washington DC </a></li>
                                                        <li><a href = "#">Boston </a></li>
                                                        <li><a href = "#">Houston</a></li>
                                                        <li><a href = "#">Salt Lake City </a></li>
                                                    </ul>
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#">Salt Lake City </a></li>
                                                        <li><a href = "#">San Francisco </a></li>
                                                        <li><a href = "#">Tampa </a></li>
                                                        <li><a href = "#"> Washington DC </a></li>
                                                        <li><a href = "#">Virginia Beach </a></li>
                                                        <li><a href = "#"> San Diego </a></li>
                                                        <li><a href = "#">Boston </a></li>
                                                        <li><a href = "#">Houston</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div role = "tabpanel" class = "tab-pane" id = "tab2">
                                            <div class = "col-lg-12 tab-inner">
                                                <div class = "row">
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#">
                                                                Full Time Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Part Time Jobs
                                                                Retail Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Construction Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Marketing Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Accounting Jobs
                                                                Customer Service Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Security Jobs
                                                            </a></li>
                                                        <li><a href = "#">Engineering Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Maintenance Jobs
                                                            </a></li>
                                                    </ul>
                                                    <ul class = "cat-list col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#"> Hospitality Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Government Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Medical Assistant Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Nursing Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Pharmacy Assistant Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Data Entry Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Receptionist Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Welding Jobs
                                                            </a></li>
                                                    </ul>
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#"> Criminal Justice Jobs
                                                            </a></li>
                                                        <li><a href = "#"> HSE Manager Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Pharmaceutical Sales Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Electrician Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Pharmacy Technician Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Graphic Design Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Homeland Security Jobs
                                                            </a></li>
                                                        <li><a href = "#"> CNA Jobs
                                                            </a></li>
                                                    </ul>
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#"> Online Teaching Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Police Officer Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Federal Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Flight Attendant Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Cruise Ship Jobs
                                                            </a></li>
                                                        <li><a href = "#">Housekeeping Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Working at Home Jobs
                                                            </a></li>
                                                        <li><a href = "#"> Warehouse Work Jobs
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div role = "tabpanel" class = "tab-pane" id = "tab3">
                                            <div class = "col-lg-12 tab-inner">
                                                <div class = "row">
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#">
                                                                Aramark Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> AT&T Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Armellini Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Aflac Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Avon Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Aon Service Corporation Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> AmeriBanc National Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> ASML Jobs & Careers
                                                            </a></li>
                                                    </ul>
                                                    <ul class = "cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#"> Bankers Life Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Comcast Cable Communications Jobs &
                                                                Careers
                                                            </a></li>
                                                        <li><a href = "#"> Capgemini Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Combined Insurance Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> CNO Services Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Coca Cola Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Doherty Employment Group Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Enterprise Rent-A-Car Jobs & Careers
                                                            </a></li>
                                                    </ul>
                                                    <ul class = "cat-list col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href = "#"> General Electric Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#">Johnson Controls Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Kenan Advantage Group Jobs & Careers
                                                            </a></li>
                                                        <li><a href = "#"> Macy's Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> PepsiCo Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> Proquire LLC Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> Pilot Travel Centers Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> PPG Industries Inc Jobs & Careers
                                                            </a></li>
                                                    </ul>
                                                    <ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
                                                        <li><a href="#"> Quintiles Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> UPS Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> Uline Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> Safeway Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> Seagate Technology Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> Tenet Healthcare Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#">TruGreen Jobs & Careers
                                                            </a></li>
                                                        <li><a href="#"> UnitedHealth Group Jobs & Careers
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
    </div>
</div>

<?php theme_include('footer'); ?>
</div>
<?php theme_include('js'); ?>
<script src="<?php echo theme_url('/assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/js/jquery.matchHeight-min.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/js/hideMaxListItem.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/js/script.js'); ?>"></script>

<!-- jqxwidget chart -->
<script src="<?php echo theme_url('/assets/jqwidgets/jqxcore.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/jqwidgets/jqxdraw.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/jqwidgets/jqxchart.core.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/jqwidgets/jqxdata.js'); ?>"></script>
<!-- /jqxwidget chart -->
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function () {

    });
//]]>
</script>
</body>


</html>