<?php
    /*
    Template Name: Quiénes somos
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

    <div class="def-actions-bar mini-menu">
    </div><!--barra gris-->

    <section class="container nuestra-empresa-quienes-somos">
        <div class="row">

            <section class="intro col-sm-12 col-md-12 col-lg-12">
                
                <?php echo get('info_extracto') ?>
                
            </section>

            <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <?php the_content(); ?>
            </article>

            <article class="single-picture col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <figure>
                	<?php
                	$otros = array("h" => 350, "w" => 500, "zc" => 1, "q" =>100);
                	$alt = array('alt'=>'Empresas banmedica', "class" => "img-responsive");
   					echo get_image('info_imagen',1,1,1,NULL,$otros,$alt);
                	?>
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