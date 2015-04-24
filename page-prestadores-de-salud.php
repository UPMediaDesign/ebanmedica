<?php
    /*
    Template Name: Prestadores de salud
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
    <?php wp_reset_query(); ?>
	
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
            <h6><?php echo $post->post_excerpt; ?></h6>
			<?php $pcount = 0 ?>
            <div class="row">
            <?php foreach($prestadores as $prestador):?> 
			<?php $pcount++?>
            <article class="pills col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <figure>
                    <a href="<?php the_permalink(); ?>">
                        
                        <?php $logocolor = wp_get_attachment_image_src( get_field('logo_transparente' , $prestador->ID), 'full' )?>
                		<img src="<?php echo $logocolor[0]?>" class="img-responsive" alt="">
                    </a>
                    <figcaption>
                        <a href="<?php echo get_permalink($prestador->ID); ?>" class="btn">Ver Más</a>
                    </figcaption>
                </figure>
                <div class="info">
                    <h3><a href="<?php echo get_permalink($prestador->ID); ?>"><?php echo $prestador->post_title; ?></a></h3>
                </div><!--info-->   
            </article><!--pills-->
				<?php if($pcount % 2 == 0){echo '<div class="clear hidden-md hidden-sm hidden-lg"></div>';}?>
                <?php if($pcount % 3 == 0){echo '<div class="clear hidden-md hidden-xs hidden-lg"></div>';}?>
                <?php if($pcount % 4 == 0){echo '<div class="clear hidden-xs hidden-sm"></div>';}?> 
            <?php endforeach ?>

        </div><!--prestadores-info-->
        </div>
    </section> <!--container-->
    
<?php get_footer(); ?>