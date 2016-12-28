<div class="footer" id="footer">
    <div class="container">
        <ul class=" pull-left navbar-link footer-nav">
            <li class="active">
                <a href="<?php echo base_url(); ?>">Inicio</a>
                <?php foreach (get_menu('pie') as $_mi): ?>
                    <a href="<?php echo make_url($_mi) ?>" target="<?php echo $_mi->target; ?>"> <?php echo $_mi->texto ?> </a>
                <?php endforeach; ?>
            </li>
        </ul>
        <ul class=" pull-right navbar-link footer-nav">
            <li> &copy; <?php echo date('Y'); ?> Gobierno Regional de Ayacucho</li>
        </ul>
    </div>
</div>
