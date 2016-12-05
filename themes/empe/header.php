<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo page_title('pagina prinicipal'); ?> - <?php echo site_name(); ?></title>

        <meta name="description" content="<?php echo site_description(); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/css/styles.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/assets/jqwidgets/styles/jqx.base.css'); ?>">
        <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
        <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg_style_2">
        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="well pull-left">
                            <img class="img-responsive"  src="<?php echo theme_url('/assets/img/logo_GRA.png'); ?>" alt="Gobierno Regional de Ayacucho">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h1><a href="#" title="Scroll down for your viewing pleasure">Lorem ipsum</a>
                            <p class="lead">Lorem ipsum</p></h1>
                    </div>
                    <div class="col-md-4 bottom-logo">
                        <div class="well pull-right no-padding">
                            <img class="img-responsive"  src="<?php echo theme_url('/assets/img/logo_aitec.png'); ?>" alt="Gobierno Regional de Ayacucho">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Inicio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
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
                        <li><a href="../navbar/">Default</a></li>
                        <li><a href="../navbar-static-top/">Static top</a></li>
                        <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>