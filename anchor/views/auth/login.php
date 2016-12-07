<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar sesi&oacute;n - <?php echo Config::app('sitename'); ?></title>
        <link rel="shortcut icon" type="image/png" href="<?php echo asset('anchor/views/assets/img/favicon.png'); ?>" />
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('anchor/views/assets/css/login.css'); ?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="authenty">
        <section id="signin_alt" class="signin-alt">
            <div class="section-content">
                <div class="wrap">
                    <div class="container">
                        <div class="row animated fadeInUp">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <div class="normal-signin">
                                    <div class="title">
                                        <h3>
                                            <i class="fa fa-lock" aria-hidden="true"></i>    Ingresar al sistema
                                        </h3>
                                    </div>
                                    <!--                                    <div class="form-header">
                                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                                        </div>-->
                                    <?php if ($messages): ?>
                                        <div class="alert alert-warning">
                                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                            <?php echo $messages; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php $user = filter_var(Input::previous('user'), FILTER_SANITIZE_STRING); ?>
                                    <form method="post" action="<?php echo Uri::to('admin/login'); ?>">
                                        <input name="token" type="hidden" value="<?php echo $token; ?>">
                                        <div class="form-main">
                                            <div class="form-group">
                                                <div class="un-wrap">
                                                    <i class="fa fa-user"></i>
                                                    <?php
                                                    echo Form::text('user', $user, array(
                                                        'class' => 'form-control',
                                                        'autocapitalize' => 'off',
                                                        'autofocus' => 'true',
                                                        'placeholder' => __('users.username')
                                                    ));
                                                    ?>
<!--                                                    <input type="text" class="form-control" placeholder="Username" required="required">-->
                                                </div>
                                                <div class="pw-wrap">
                                                    <i class="fa fa-lock"></i>
                                                    <?php
                                                    echo Form::password('pass', array(
                                                        'class' => 'form-control',
                                                        'placeholder' => __('users.password'),
                                                        'autocomplete' => 'off'
                                                    ));
                                                    ?>
<!--                                                    <input type="password" class="form-control" placeholder="Password" required="required">-->
                                                </div>


                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Recordarme
                                                    </label>
                                                </div>


                                                <div class="row top-buffer">
                                                    <div class="col-md-4 col-md-offset-8">
                                                        <button type="submit" class="btn btn-block signin">
                                                            <?php echo __('global.login'); ?> <i class="fa fa-arrow-circle-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <!--                        <div class="row top-buffer bottom-wrap">
                                                    <div class="col-xs-6 col-md-2 col-md-offset-1">
                                                        <a href="#password_recovery" id="forgot_from_2">need help?</a>
                                                    </div>
                                                    <div class="col-xs-6 col-md-2">
                                                        <a href="#signup_wizard" id="signup_from_2">Create an account</a>
                                                    </div>
                                                </div>-->
                    </div>
                </div>
            </div>
        </section>
        <script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    </body>
</html>
