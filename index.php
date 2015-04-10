<?php get_header(); ?>
	<?php query_posts(array('post_type' =>'home'));
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="slide hidden-xs">
        <ul class="bxslider">
            <li>
                <?php echo get_image('slide_uno_imagen')?>
                <div class="container">
                    <article>
                        <h2><?php echo get('slide_uno_titulo')?></h2>
                        <span class="hidden-xs hidden-sm"><?php echo get('slide_uno_texto')?>
                        <a href="<?php echo get('slide_uno_url')?>" class="btn btn-default">
                            Leer Más <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                        </a>
                        </span>
                    </article>
                </div>
            </li>

            <li>
                <?php echo get_image('slide_dos_imagen')?>
                <div class="container">
                    <article>
                        <h2><?php echo get('slide_dos_titulo')?></h2>
                        <span class="hidden-xs hidden-sm"><?php echo get('slide_dos_texto')?>
                        <a href="<?php echo get('slide_dos_url')?>" class="btn btn-default">
                            Leer Más <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                        </a>
                        </span>
                    </article>
                </div>
            </li>
            <li>
                <?php echo get_image('slide_tres_imagen')?>
                <div class="container">
                    <article>
                        <h2><?php echo get('slide_tres_titulo')?></h2>
                        <span class="hidden-xs hidden-sm"><?php echo get('slide_tres_texto')?>
                        <a href="<?php echo get('slide_tres_url')?>" class="btn btn-default">
                            Leer Más <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                        </a>
                        </span>
                    </article>
                </div>
            </li>
        </ul>

        <div class="paginador hidden-xs">
            <a data-slide-index="0" href=""><?php echo get('slide_uno_titulo')?></a>
            <a data-slide-index="1" href=""><?php echo get('slide_dos_titulo')?></a>
            <a data-slide-index="2" href=""><?php echo get('slide_tres_titulo')?></a>
        </div>    
    </section> <!--Slide-->
	
    
    <section class="container">
        <div class="presentacion">
		<?php /* ?> 
            <h1><?php echo get('info_bienvenida')?></h1>
            <h6><?php echo get('info_bajada')?></h6>
		<?php  */?>    
        </div>
    </section>
    
     <!--container-->
    <?php endwhile; else: ?>
    <?php endif; ?>    
    
    <div class="clear separator"></div>

    <section class="break-bg">
        <div class="container">
            <?php query_posts(array('post_type' =>'home'));
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="index-pills">
                <?php $pastillafotos = get_order_group('pastillas_foto_titulo');
                foreach($pastillafotos as $pastillafoto){ ?>
                <article class="pills col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="info">
                        <a href="<?php echo get('pastillas_foto_url',$pastillafoto); ?>">
                            <h3><?php echo get('pastillas_foto_titulo',$pastillafoto); ?></h3>
                            <span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span>
                        </a>
                        <p><?php echo get('pastillas_foto_bajada',$pastillafoto); ?></p>
                    </div><!--info--> 
                    <figure>
                        <a href="<?php echo get('pastillas_foto_url',$pastillafoto); ?>"><?php echo get_image('pastillas_foto_foto',$pastillafoto); ?></a>
                    </figure>                    
                </article><!--pills-->
                <?php } ?> 

                <!--PILSS SIN FOTO-->

                <?php $pastillas = get_order_group('pastilla_titulo');
                foreach($pastillas as $pastilla){ ?>
                <article class="pills pillsb col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="info">
                        <a href="<?php echo get('pastilla_url',$pastilla); ?>">
                            <h3><?php echo get('pastilla_titulo',$pastilla); ?></h3>
                            <span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span>
                        </a>
                        <p><?php echo get('pastilla_bajada',$pastilla); ?></p>
                    </div><!--info--> 
                </article>
                <?php } ?> 

            </div><!--index-pills-->
            
            <br class="clear">

            <section class="banner-info col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h2><?php echo get('pastilla_grande_titulo'); ?></h2>
                    <p>
                        <?php echo get('pastilla_grande_bajada'); ?>
                    </p>
                    <a href="<?php echo get('pastilla_grande_url'); ?>">Leer Más <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                </div>

                <figure class="col-sm-6 col-md-6 col-lg-6">
                    <a href="<?php echo get('pastilla_grande_url'); ?>"><?php echo get_image('pastilla_grande_foto'); ?></a>
                </figure>
            </section>
            <?php endwhile; else: ?>
            <?php endif; ?> 
            
            <?php include(TEMPLATEPATH . '/include-marcas.php'); ?>

        </div><!--container-->
    </section>
    
<?php get_footer(); ?>