<?php
    /*
    Template Name: Internacional
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
    <?php wp_reset_query(); ?>

    <section class="def-actions-bar mini-menu">
        <div class="container">
            <ul class="nav navbar-nav">
                <?php query_posts(array('post_type' =>'prestadores_1','showposts' => 100));
                if (have_posts()) : while (have_posts()) : the_post(); ?> 
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </section>

    <section class="container">
        <div class="prestadores-info">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h6><?php echo get('info_extracto'); ?></h6>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

            <?php query_posts(array('post_type' =>'prestadores_1','showposts' => 100));
            if (have_posts()) : while (have_posts()) : the_post(); ?>  

            <article class="pills col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <figure>
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        $alt = array('alt'=>'Empresas banmedica', "class" => "img-responsive");
                        echo get_image('info_logo',1,1,1,NULL,$alt);
                        ?>
                    </a>
                    <figcaption>
                        <a href="<?php the_permalink(); ?>" class="btn">Ver Más</a>
                    </figcaption>
                </figure>
                <div class="info">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div><!--info-->   
            </article><!--pills-->

            <?php endwhile; else: ?>
            <?php endif; ?>

        </div><!--prestadores-info-->
        
    </section> <!--container-->
    
<?php get_footer(); ?>