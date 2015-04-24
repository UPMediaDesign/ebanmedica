<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article class="container">
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get_field('info_bajada') ?></h6>
        </article>
    </figure>

    <?php $prestadores = get_posts(array('post_type' =>'prestadores','showposts' => -1));?> 
    <section class="def-actions-bar mini-menu hidden-xs">
        <div class="container">
            <ul class="nav navbar-nav">
                <?php foreach($prestadores as $prestador):?>
                <li><a href="<?php echo get_permalink($prestador->ID); ?>"><?php echo $prestador->post_title ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

    <section class="container">
        <div class="prestadores-info">
            <section class="intro">
                <?php /* $logocolor = wp_get_attachment_image_src( get_field('logo_color'), 'full' )?>
                <img src="<?php echo $logocolor[0]?>" class="img-responsive" alt="">
                <?php  */the_excerpt(); ?>
            </section>

            <div class="row">
                <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h3><?php echo get_field('slogan') ?></h3>
                    <?php echo apply_filters('the_content' ,  get_field('box_1')); ?>
                </article>

                <article class="single-picture col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <figure>
                        <?php $box = wp_get_attachment_image_src( get_field('imagen_box_1'), 'box' )?>
                		<img src="<?php echo $box[0]?>" class="img-responsive" alt="">
                    </figure>
                    <div class="info">
                        <?php echo get_field('bajada_box_1'); ?>
                    </div><!--info-->   
                </article><!--pills-->
            </div><!--row-->

        </div><!--prestadores-info-->
    </section> <!--container-->

    <div class="break-bg prestadores-info">
        <div class="container">
            <div class="row">
                <article class="single-picture col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <figure>
                    	<?php $box = wp_get_attachment_image_src( get_field('imagen_box_2'), 'box' )?>
                		<img src="<?php echo $box[0]?>" class="img-responsive" alt="">
                    </figure>
                    <div class="info">
                        <?php echo get_field('bajada_box_2'); ?>
                    </div><!--info-->   
                </article><!--pills-->

                <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <?php echo apply_filters('the_content' ,  get_field('box_2')); ?>
                </article>
            </div><!--row-->
        </div>

        <section class="bajada-detail">
            <div class="container">
                <?php $lg = wp_get_attachment_image_src( get_field('logo_transparente'), 'box' )?>
                		
            	<div class="col-md-2 col-md-offset-5"><a href="<?php get_field('link_prestador')?>" target="_blank"><img src="<?php echo $lg[0]?>" class="img-responsive" alt=""></a></div>
                <div class="clear"></div>
                <p><a href="<?php get_field('link_prestador')?>" target="_blank" class="btn btn-default btn-xs">Ir al sitio del prestador</a></p>
            </div>
        </section>

        <p class="bajada-marca"><?php echo get_field('info_bajada'); ?></p>
    </div><!--break-bg-->
	<?php endwhile; else: ?>
	<p><strong>No encontrado</strong><br />
	<a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
	<?php endif; ?>

<?php get_footer(); ?>