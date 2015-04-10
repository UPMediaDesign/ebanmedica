<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<figure class="presentacion-interior">
        <?php the_post_thumbnail( array(1000,1000) ); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get('info_bajada') ?></h6>
        </article>
    </figure>

    <section class="def-actions-bar mini-menu">
        <div class="container">
            <ul class="nav navbar-nav">
                <?php query_posts(array('post_type' =>'prestadores','showposts' => 100));
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
            <section class="intro">
                <?php
	            $alt = array('alt'=>'Empresas banmedica', "class" => "img-responsive");
	            echo get_image('info_logo',1,1,1,NULL,$alt);
	            ?>
                
                <?php the_excerpt(); ?>
                
            </section>

            <div class="row">
                <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h3><?php echo get('info_bajada') ?></h5>
                    <?php echo get('seccion_texto'); ?>
                </article>

                <article class="single-picture col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <figure>
                        <?php echo get_image('seccion_imagen'); ?>
                    </figure>
                    <div class="info">
                        <?php echo get('seccion_bajada_imagen'); ?>
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
                    	<?php echo get_image('seccion_dos_imagen'); ?>
                    </figure>
                    <div class="info">
                        <?php echo get('seccion_dos_bajada_imagen'); ?>
                    </div><!--info-->   
                </article><!--pills-->

                <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <?php echo get('seccion_dos_texto'); ?>
                </article>
            </div><!--row-->
        </div><!--container-->

        <section class="bajada-detail">
            <div class="container">
                <p><?php echo get('info_invitacion'); ?></p>
            </div>
        </section>

        <p class="bajada-marca"><?php echo get('info_bajada'); ?></p>
    </div><!--break-bg-->
	<?php endwhile; else: ?>
	<p><strong>No encontrado</strong><br />
	<a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
	<?php endif; ?>

<?php get_footer(); ?>