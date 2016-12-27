<?php theme_include('header'); ?>
<div class="search-row-wrapper" style="background-image: url(<?php echo theme_url('/assets/images/jobs/ibg.jpg'); ?>); background-size: cover; background-position: center center;">
    <div class="container text-center">
        <div class="col-sm-3">
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
        </div>
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
                            <a href="#applyJob" data-toggle="modal" class="btn  btn-primary"> <i class=" icon-mail-2"></i> Apply Online </a>
                            <small> or. Send your CV to: <a class="__cf_email__" href="http://templatecycle.com/cdn-cgi/l/email-protection" data-cfemail="0162607364647341666c60686d2f626e6c">[email&#160;protected]</a>

                            </small>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-3  page-sidebar-right">
                <aside>
                    <div class="panel sidebar-panel panel-contact-seller">
                        <div class="panel-heading">Company Information</div>
                        <div class="panel-content user-info">
                            <div class="panel-body text-center">
                                <div class="seller-info">
                                    <div class="company-logo-thumb">
                                        <a><img alt="img" class="img-responsive img-circle" src="images/jobs/company-logos/17.jpg"> </a></div>
                                    <h3 class="no-margin"> Data Systems Ltd</h3>
                                    <p>Location: <strong>New York</strong></p>
                                    <p> Web: <strong>www.demoweb.com</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel sidebar-panel">
                        <div class="panel-heading"><i class="icon-lamp"></i> Successful CV Tips</div>
                        <div class="panel-content">
                            <div class="panel-body text-left">
                                <ul class="list-check">
                                    <li> Tailor a CV to a specific job</li>
                                    <li> Keep it simple</li>
                                    <li> Include key information - personal details</li>
                                    <li> Showcase achievements</li>
                                </ul>
                                <p><a class="pull-right" href="#"> Know more <i class="fa fa-angle-double-right"></i> </a></p>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
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