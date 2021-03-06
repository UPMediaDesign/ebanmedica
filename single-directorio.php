<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID , 'head') ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article class="container">
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get_field('cargo') ?></h6>
            
        </article>
    </figure>

    <?php $directores = get_posts(array('post_type' =>'directorio' , 'area' => 'directorio' , 'numberposts' => -1 , 'order' => 'ASC'));?> 
    <section class="def-actions-bar mini-menu">
        <div class="container">
            <ul class="nav navbar-nav">
                <?php foreach($directores as $prestador):?>
                <li><a href="<?php echo get_permalink($prestador->ID); ?>"><?php echo $prestador->post_title ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

    <section class="container">
        <div class="prestadores-info">
            <section class="intro">
                
            </section>

            <div class="row directoress">
                <article class="empresa col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                	
                    <h3><?php echo get_field('slogan') ?></h3>
                    <?php echo apply_filters('the_content' ,  $post->post_content); ?>
                </article>
            </div><!--row-->

        </div><!--prestadores-info-->
    </section> <!--container-->

    <div class="break-bg prestadores-info">
        <section class="bajada-detail">
            <div class="container">
                <p><?php echo get_field('invitacion'); ?></p>
            </div>
        </section>

        <p class="bajada-marca"><?php echo get_field('info_bajada'); ?></p>
    </div><!--break-bg-->
	<?php endwhile; else: ?>
	<p><strong>No encontrado</strong><br />
	<a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
	<?php endif; ?>

<?php get_footer(); ?>