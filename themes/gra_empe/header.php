<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo page_title(' bbb '); ?> - <?php echo site_name(); ?></title>
        <meta name="description" content="<?php echo site_description(); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/css/owl.carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/css/owl.theme.css'); ?>">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            paceOptions = {
                elements: true
            };
        </script>
        <script src="<?php echo theme_url('/assets/js/pace.min.js'); ?>"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
                <nav class="navbar  navbar-site navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img src="<?php echo theme_url('/assets/img/logo_GRA.png'); ?>" class="img-responsive" alt="Responsive image">
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="active"><a href="#">Inicio</a></li>
                                <li><a href="#about">Objetivos</a></li>
                                <li><a href="#contact">Resultados</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="job-login.html">Contactos</a></li>
                                <li><a href="job-signup.html">...</a></li>
                                <li><img src="<?php echo theme_url('/assets/images/site/Logo_Ministerio.png'); ?>" class="img-responsive" alt="Responsive image"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

<!--            <div class="intro jobs-intro hasOverly" style="background-image: url(<?php echo theme_url('/assets/images/jobs/1.jpg'); ?>); background-position: center center;">
                <div class="dtable hw100">
                    <div class="dtable-cell hw100">
                        <div class="container text-center">
                            <h1 class="intro-title animated fadeInDown"> Find the Right Job </h1>
                            <p class="sub animateme fittext3 animated fadeIn"> Find the latest jobs available in your area. </p>
                            <div class="row search-row animated fadeInUp">
                                <div class="col-lg-4 col-sm-4 search-col relative locationicon">
                                    <i class="icon-location-2 icon-append"></i>
                                    <input type="text" name="country" id="autocomplete-ajax" class="form-control locinput input-rel searchtag-input has-icon" placeholder="city, state, or zip" value="">
                                </div>
                                <div class="col-lg-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                                    <input type="text" name="ads" class="form-control has-icon" placeholder="job title, keywords or company" value="">
                                </div>
                                <div class="col-lg-4 col-sm-4 search-col">
                                    <button class="btn btn-primary btn-search btn-block"><i class="icon-search"></i><strong>Find
                                            Jobs</strong></button>
                                </div>
                            </div>
                            <div class="resume-up">
                                <a><i class="icon-doc-4"></i></a> <a><b>Upload your CV</b></a> and easily apply to jobs from any
                                device!
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
