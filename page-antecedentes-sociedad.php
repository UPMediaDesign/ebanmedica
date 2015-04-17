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
            <h6><?php echo get_field('info_bajada') ?></h6>
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
    <?php /* <!--?>
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
    <?php --> */?>
    <?php $decadas = get_field('decadas');?>
    
    
    <section class="break-bg nuestra-empresa-antecedente">
        <div class="container">
            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php $dc = 0 ; $dd = count($decadas)?>
                    <?php foreach($decadas as $decada):?>
                    <?php $dc++?>
                    <li <?php if($dc == $dd){echo 'class="active"';}?>>
                        <a href="#decada-<?php echo $dc?>" aria-controls="home" role="tab" data-toggle="tab"><?php echo $decada['rango']?></a>
                    </li>
                    <?php endforeach?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php $dc = 0 ; $dd = count($decadas)?>
                    <?php foreach($decadas as $decada):?>
                    <?php $dc++?>
                    <div role="tabpanel" class="tab-pane fade <?php if($dc == $dd){echo 'in active';}?>" id="decada-<?php echo $dc?>">
                        <ul class="timeline">
                            <?php $antecedentes = $decada['antecedentes'];?>
                            <?php foreach($antecedentes as $antecedente): ?>
                                <li>
                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                        <h5><?php echo $antecedente['año'] ?></h5>
                                    </div>
                                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                        <?php echo $antecedente['antecedentes'] ?>
                                    </div>
                                    <br class="clear">
                                </li>
                            <?php endforeach ?> 
                        </ul>
                    </div><!--decada-10-->
					<?php endforeach?>
                    
                </div><!--tab-content-->
            </div><!--tabpanel-->
        </div><!--container-->
    </section>
	

<?php get_footer(); ?>