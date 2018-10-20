<?php
/**
* Template Name: Front page
*
* This template is for the front page
*
* @package papermiint x understrap
*
*/

get_template_part( 'views/header-empty');

$container = get_theme_mod( 'understrap_container_type' ); ?>

<div class="wrapper" id="intropage-page-wrapper">

  <div class="<?php echo esc_attr( $container ); ?>" id="content">

    <div class="row">

      <div class="col-md-12 intropage" id="primary">

        <main class="site-main" id="main" role="main">

          <div class="intro-disclaimer">
            <div class="principal-text"> papermiint, <span>c'est fini</span></div>
            <div class="details-text"> c'est plutôt dommage, mais suivant l'adage très connu qui veut que toutes les bonnes choses aient une fin, il était temps de terminer cette aventure.</div>
            <img src="./screenshot.png" alt="principale image">
          </div>

          <?php get_template_part('views/intro-carrousel'); ?>

          <div class="cta-shop">
            <a href="#">voir la boutique</a>
            <a href="#">contact</a>
          </div>

        </main>

      </div>


    </div>

  </div>

</div>


<?php get_footer(); ?>
