<?php
    /*
    Template Name: Directorio
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
    <?php endif; ?>

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="container">
        
        
        
        <div class="directorio col-xs-12  col-sm-12  col-md-12 col-lg-12">
            <?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>

            <h4>Directorio</h4>
            <?php query_posts(array('post_type' =>'directorio','posts_per_page' => 1));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <?php $myEvent = get_order_group('directorio_nombre');
				$dc = 0;
                foreach($myEvent as $event){
				$dc++; ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                   <article class="box-pills" <?php if($dc == 1){echo 'style="background-color:#012b5d"';}?>>
                        <h4><?php echo get('directorio_nombre',$event); ?></h4>
                        <p><?php echo get('directorio_cargo',$event); ?></p>
                        <small><?php echo get('directorio_profesion',$event); ?></small>
                        <div class="rut"><?php echo get('directorio_rut',$event); ?></div>
                    </article> 
                </div>
                <?php } ?>
            </div>

            <h4>Comité</h4>
            <div class="row">
                <?php $myEvent = get_order_group('comite_nombre');
                foreach($myEvent as $event){ ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                   <article class="box-pills">
                        <h4><?php echo get('comite_nombre',$event); ?></h4>
                        <p><?php echo get('comite_cargo',$event); ?></p>
                        <small><?php echo get('comite_informacion',$event); ?></small>
                    </article> 
                </div>
                <?php } ?>
            </div>
            <?php endwhile; else: ?>
            <?php endif; ?> 
            
        </div>

    </section> <!--container-->
    
    <div class="break-bg">
        <div class="container">
            <?php include(TEMPLATEPATH . '/include-marcas.php'); ?>
        </div>
    </div>
<?php get_footer(); ?>