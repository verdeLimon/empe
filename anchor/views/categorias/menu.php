<!-- menu left -->
<div class="oe_leftbar hidden-xs">
    <a class="oe_logo" href="/web">
        <span class="oe_logo_edit oe_logo_edit_admin">Editar información de compañía</span>
        <img src="<?php echo asset('anchor/views/assets/img/company_logo.png'); ?>" alt=""/>
    </a>
    <div class="oe_secondary_menus_container">
        <div class="oe_secondary_menu">
            <?php
            $menus = Registry::get('menus');
            $menu = $menus['categorias'];
            ?>
            <div class="oe_secondary_menu_section">
                <?php echo ($menu['titulo']); ?>
            </div>
            <ul class="oe_secondary_submenu nav nav-pills nav-stacked">
                <?php foreach ($menu['submenu'] as $sub): ?>
                    <li>
                        <a href="<?php echo Uri::to('admin/' . $menu['url'] . '/' . $sub['url']); ?>">
                            <i class="fa <?php echo $sub['icon']; ?>" aria-hidden="true"></i>
                            <?php echo $sub['titulo']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="oe_footer">
        &COPY; <a href="#" target="_blank"><span>companyname</span></a>
    </div>
</div>
<!--/ menu left -->