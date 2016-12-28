<?php theme_include('header'); ?>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <div class="inner-box category-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info pgray  alert-lg" role="alert">
                                <h1>Pagina no encontrada</h1>
                                <img src="<?php echo theme_url('/assets/img/404.png'); ?>" class="img-responsive" alt="pagina no encontrada">
                                <p>
                                    Lo sentimos pero... no encontramos la página <code>/<?php echo htmlspecialchars(current_url()); ?></code>
                                    <br>
                                </p>
                                <h3><a href="<?php echo base_url(); ?>"><span class="fa fa-home"></span> Ir a la pagina principal</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>



<?php theme_include('footer'); ?>
