<div class="site-header-navigation">
    <nav id="site-navigation" class="main-navigation">
        <div id="toggle" onclick="toggle()" aria-controls="primary-menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php
        wp_nav_menu(
            array( 
                'theme_location' => 'menu-1',
                'menu_id'        => 'menu',
            )
        );
        ?>
    </nav>
</div>