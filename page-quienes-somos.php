<?php
    /*
    Template Name: Quiénes somos
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

    <div class="def-actions-bar mini-menu">
    </div><!--barra gris-->

    <section class="container nuestra-empresa-quienes-somos">
        <div class="row">

            <section class="intro col-sm-12 col-md-12 col-lg-12">
                <?php echo $post->post_excerpt ?>
            </section>

            <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <?php the_content(); ?>
            </article>

            <article class="single-picture col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <figure>
                	<?php $imgresumen = wp_get_attachment_image_src( get_field('imagen_resumen'), 'box' )?>
                	<img src="<?php echo $imgresumen[0]?>" class="img-responsive" alt="">
                </figure>
                <div class="info">
                    <h5>Más de 20 años de presencia nacional.</h5>
                </div><!--info-->   
            </article><!--pills-->
        </div><!--row-->       
    </section> <!--container-->
	<?php endwhile; else: ?>
	<p><strong>No encontrado</strong><br />
	<a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
	<?php endif; ?>

<?php get_footer(); ?>