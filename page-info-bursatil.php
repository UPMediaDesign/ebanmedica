<?php
    /*
    Template Name: Información Bursatil
    */
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article>
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get('info_bajada') ?></h6>
        </article>
    </figure>
    <section class="def-actions-bar mini-menu">
        <div class="container">
        </div>
    </section>

    <section class="container nuestra-empresa-info-accionista">
        <div class="row">
        	<div class="clear separator"></div>
            <div class="col-md-12">
                <iframe src="http://www.bolsadesantiago.com/theme/resumenInstrumentoExterno.aspx?nemo=BANMEDICA" class="col-md-12"></iframe>
            </div>
            <div class="clear separator"></div>
        </div><!--row-->       
    </section> <!--container-->
    
    <?php endwhile; else: ?>
    <?php endif; ?>
    
<?php get_footer(); ?>