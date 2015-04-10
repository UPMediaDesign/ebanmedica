<?php
    /*
    Template Name: Documentos descargables
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

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="break-bg nuestra-empresa-memorias">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <?php $myEvent = get_order_group('descargables_fecha');
                    foreach($myEvent as $event){ ?>
                    <article class="box-pills ">
                        <a href="<?php echo get('descargables_pdf',$event); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
                            <div class="info">
                                <small><?php echo get('descargables_fecha',$event); ?></small>
                                <h4><?php echo get('descargables_nombre',$event); ?></h4>
                                <small><?php echo get('descargables_peso',$event); ?></small>
                            </div><!--info-->
                        </a>
                    </article> 
                    <?php } ?> 
                </div>                
            </div>
        </div>
    </section>

    <?php endwhile; else: ?>
    <p><strong>No encontrado</strong><br />
    <a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
    <?php endif; ?>
    
<?php get_footer(); ?>