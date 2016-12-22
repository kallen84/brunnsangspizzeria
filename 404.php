<?php
/**
 * The template used for displaying page "404" content 
 *
 * @package Brunnsäng Pizzeria
 */
 
get_header(); ?>

<main id="<?php echo $post->post_name; ?>" class="main--error-page container-fluid" title="Light Background picture">
    <section class="section--error container">

        <section class="section--error-header row">
            <header class="section--header">
                <h1 class="text-center">404 Error</h1>
            </header>
        </section>

        <article class="article--error">
            <div class="row">
                <h1 class="text-center">Hoppsan, nu blev det lite fel!</h1>
                <p class="text">Innehållet du sökte på kan tyvärr ej hittas. Var god tryck på länken för att gå tillbaka till startsidan.</p>
                
                <div class="col-md-6 col-md-offset-3 error--content">
                    <p><a href="<?php echo home_url(); ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Startsidan</a></p>
                </div>
            </div> <!-- .row -->
        </article>
    </section>
</main>
