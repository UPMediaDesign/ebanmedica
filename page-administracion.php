<?php
    /*
    Template Name: Administración
    */
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article class="container">
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get_field('info_bajada') ?></h6>
        </article>
    </figure>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="container">
        
        
        
        <div class="directorio col-xs-12  col-sm-12  col-md-12 col-lg-12">
            <?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>

            <h4>Administración</h4>
            <?php $administracion = get_posts(array('post_type' =>'directorio' , 'area' => 'administracion' , 'numberposts' => -1 , 'order' => 'ASC'));?>
            
            <div class="row">
            <?php $dc = 0?>
                <?php foreach($administracion as $director):?>
                <?php $dc++?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                   <article class="box-pills">
                        <h4><?php echo $director->post_title; ?></h4>
                        <p><?php echo get_field('cargo',$director->ID); ?></p>
                        <small><?php echo get_field('profesion',$director->ID); ?></small>
                        <div class="rut"><?php echo get_field('rut',$director->ID); ?></div>
                    </article> 
                </div>
                <?php endforeach ?>
            </div>
            
            
        </div>

    </section> <!--container-->
    
    <div class="break-bg">
        <div class="container">
            <?php get_template_part('marcas') ?>
        </div>
    </div>
<?php get_footer(); ?>