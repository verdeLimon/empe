<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo __('global.manage'); ?> <?php echo Config::app('sitename'); ?></title>
        <link rel="shortcut icon" type="image/png" href="<?php echo asset('anchor/views/assets/img/favicon.png'); ?>" />
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/select2/css/select2.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/select2/css/select2-bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/css/template.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/Nestable/nestable.css'); ?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="<?php echo Auth::guest() ? 'login' : 'admin'; ?> <?php echo str_replace('_', '-', Config::app('language')); ?>">
        <!-- menu top -->
        <nav id="oe_main_menu_navbar" class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Uri::to('admin/panel'); ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </div>
            <div class="navbar-collapse collapse" id="oe_main_menu_placeholder">
                <ul class="nav navbar-nav navbar-left oe_application_menu_placeholder">
                    <?php
                    $menus = Registry::get('menus');
                    ?>
                    <?php foreach ($menus as $menu): ?>
                        <li <?php if (strpos(Uri::current(), $menu['url']) !== false) echo 'class="active"'; ?>>
                            <a href="<?php echo Uri::to('admin/' . $menu['url']); ?>">
                                <i class="fa <?php echo $menu['icon']; ?>" aria-hidden="true"></i>
                                <?php echo $menu['titulo']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <li id="menu_more_container" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más<b class="caret"></b></a>
                        <ul id="menu_more" class="dropdown-menu">
                            <li>
                                <a data-menu="settings" href="#">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    Preferencias
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right oe_user_menu_placeholder" style="">
                    <li>
                        <a href="<?php echo Uri::to(''); ?>" target="_blank">
                            <i class="fa fa-globe" aria-hidden="true"></i> Ver web
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="oe_topbar_name"><?php echo Auth::user()->username; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a data-menu="settings" href="#">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    Preferencias
                                </a>
                            </li>
                            <li>
                                <a data-menu="account" href="#">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    Mi cuenta
                                </a>
                            </li>
                            <li>
                                <a data-menu="account" href="<?php echo Uri::to('admin/logout'); ?>">
                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                    <?php echo __('global.logout'); ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
        //print_r($_SESSION);
        ?>

        <!-- /menu top -->
