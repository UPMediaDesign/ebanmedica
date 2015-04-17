<?php
    /*
    Template Name: Tabla
    */
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article>
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get_field('info_bajada') ?></h6>
        </article>
    </figure>
    <section class="def-actions-bar mini-menu">
        <div class="container">
        </div>
    </section>

    <section class="container nuestra-empresa-info-accionista">
        <div class="row">
            <div class="table-responsive">
                <?php the_content(); ?>
            </div>
        </div><!--row-->       
    </section> <!--container-->
    
    <?php endwhile; else: ?>
    <?php endif; ?>
    
<?php get_footer(); ?>