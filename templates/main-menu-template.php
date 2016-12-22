
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">                           
            <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
                <span class="sr-only">Toggle navigation</span>
                <span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
            </button>
        </div>

        <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
<?php 
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav navbar-nav',
                //'walker' => new Bp_Walker_Nav_Primary()
            ));
?>                

        </div>
    </nav>
