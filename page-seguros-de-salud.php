<?php
    /*
    Template Name: Seguros de salud
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
    <?php endwhile; else: ?>
    <p><strong>No encontrado</strong><br />
    <a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
    <?php endif; ?>

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="container seguros-salud">
        
        <?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>

        <section class="intro col-sm-12 col-md-12 col-lg-12">
            <?php echo get('info_extracto') ?>
        </section>
        
        <?php $myEvent = get_order_group('seguros_titulo');
        foreach($myEvent as $event){ ?>
        <article class="empresa col-sm-12 col-md-12 col-lg-12">
            <figure class="logo">
                <?php echo get_image('seguros_logo',$event); ?>
            </figure>

            <h3><?php echo get('seguros_titulo',$event); ?></h3>
            <figure class="banner-salud">
                <?php echo get_image('seguros_imagen',$event); ?>
            </figure>
            <?php echo get('seguros_texto',$event); ?>
        </article>
        <?php } ?> 
    </section> <!--container-->
    <div class="break-bg">
        <div class="container">
            <?php include(TEMPLATEPATH . '/include-marcas.php'); ?>
        </div>
    </div>
<?php get_footer(); ?>