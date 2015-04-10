<?php
    /*
    Template Name: Antecedentes de la sociedad
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

    <section class="def-actions-bar mini-menu">
        <div class="container">
        </div>
    </section>
    
    <?php endwhile; else: ?>
    <p><strong>No encontrado</strong><br />
    <a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
    <?php endif; ?>
    <!--
    <section class="container">
        <div class="prestadores-info">
            <div class="row">
                <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <?php echo get('seccion_texto'); ?>
                </article>

                <article class="single-picture col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <figure>
                        <?php echo get_image('seccion_imagen'); ?>
                    </figure>
                    <div class="info">
                        <?php echo get('seccion_bajada_imagen'); ?>
                    </div>  
                </article>
            </div>

        </div>
    </section>
    -->
    <?php query_posts(array('post_type' =>'antecedentes','showposts' => 100));
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <section class="break-bg nuestra-empresa-antecedente">
        <div class="container">
            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li>
                        <a href="#decada-80" aria-controls="home" role="tab" data-toggle="tab">1980 - 1989</a>
                    </li>
                    
                    <li>
                        <a href="#decada-90" aria-controls="profile" role="tab" data-toggle="tab">1990 - 1999</a>
                    </li>
                    
                    <li>
                        <a href="#decada-00" aria-controls="messages" role="tab" data-toggle="tab">2000 - 2009</a>
                    </li>

                    <li class="active">
                        <a href="#decada-10" aria-controls="settings" role="tab" data-toggle="tab">2010 - Actualidad</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="decada-80">
                        <ul class="timeline">
                            <?php $myEvent = get_order_group('1980_ano');
                            foreach($myEvent as $event){ ?>
                            <li>
                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                    <h5><?php echo get('1980_ano',$event); ?></h5>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                    <?php echo get('1980_texto',$event); ?>
                                </div>
                                <br class="clear">
                            </li>
                            <?php } ?>                             
                        </ul>
                    </div><!--decada-80-->



                    <div role="tabpanel" class="tab-pane" id="decada-90">
                        <ul class="timeline">
                            <?php $myEvent = get_order_group('1990_ano');
                            foreach($myEvent as $event){ ?>
                            <li>
                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                    <h5><?php echo get('1990_ano',$event); ?></h5>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                    <?php echo get('1990_texto',$event); ?>
                                </div>
                                <br class="clear">
                            </li>
                            <?php } ?> 
                        </ul>
                    </div><!--decada-90-->

                    <div role="tabpanel" class="tab-pane" id="decada-00">
                        <ul class="timeline">
                            <?php $myEvent = get_order_group('2000_ano');
                            foreach($myEvent as $event){ ?>
                            <li>
                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                    <h5><?php echo get('2000_ano',$event); ?></h5>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                    <?php echo get('2000_texto',$event); ?>
                                </div>
                                <br class="clear">
                            </li>
                            <?php } ?> 
                        </ul>
                    </div><!--decada-00-->




                    <div role="tabpanel" class="tab-pane fade in active" id="decada-10">
                        <ul class="timeline">
                            <?php $myEvent = get_order_group('2010_ano');
                            foreach($myEvent as $event){ ?>
                            <li>
                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                    <h5><?php echo get('2010_ano',$event); ?></h5>
                                </div>
                                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                    <?php echo get('2010_texto',$event); ?>
                                </div>
                                <br class="clear">
                            </li>
                            <?php } ?> 
                        </ul>
                    </div><!--decada-10-->

                </div><!--tab-content-->
            </div><!--tabpanel-->
        </div><!--container-->
    </section>
    <?php endwhile; else: ?>
    <?php endif; ?> 
	

<?php get_footer(); ?>