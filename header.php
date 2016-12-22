<!doctype html>
<html>
    <head>
        <title>Brunnsängs Pizzeria</title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Pizzeria Restaurang i Södertälje som har funnits i 25 år. Vi erbjuder allt från kötträtter, fisk, pasta och givetvis goda och stora pizzor! Se vår meny här: " />
        <!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
		<![endif]-->
        <?php wp_head(); ?>
</head>

    <body id="body" <?php body_class(); ?>>

        <header id="head" class="header main-header">
                     
            <a class="navLogo" href="<?php echo home_url(); ?>" alt="Black menu logo svg"></a>
            <?php get_template_part('templates/main-menu-template'); ?>
        </header>

        <section class="section--hero">
            <div class="container--heroLogo">
                <a class="heroLogo" href="<?php echo home_url(); ?>" alt="Red menu logo svg"></a>

                <div class="slogan">
                    <div class="container--text">
                        <p><i>Vi står för kvalité.</i></p>
                        <p><i>Alltid goda och stora pizzor.</i></p>
                    </div>    
               </div>     
            </div>

            <nav class='slider'>
                <li class='slide1' title="Close up picture of a pizza"></li>
                <li class='slide2' title="Close up picture of a pizza 2"></li>
                <li class='slide3' title="Picture of a pizza from above on a white table"></li>
            </nav> 
        </section>
