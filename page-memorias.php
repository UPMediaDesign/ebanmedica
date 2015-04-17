<?php
    /*
    Template Name: Memorias
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

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="break-bg nuestra-empresa-memorias">
        <div class="container">
			<?php $documentos = get_posts(array('post_type' =>'documentos' , 'order' => 'ASC' , 'showposts'=> -1)); ?>
            
            <h3>Memorias</h3>
            <div class="row">
            <?php $cm = 0;?>
            <?php foreach($documentos as $documento):?>
                <?php $memorias = get_field('memorias' , $documento->ID);?>
                <?php if($memorias){?>
                
                <?php foreach($memorias as $memoria): ?>
                	<?php $cm++?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                       <article class="box-pills ">
                            <a href="<?php echo wp_get_attachment_url($memoria['archivo']) ?>" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
                                <div class="info">
                                    <?php $date = DateTime::createFromFormat('Ymd', $memoria['fecha_de_publicacion']);?>
                                    <small><?php echo $date->format('d-m-Y'); ?></small>
                                    <h4><?php echo $memoria['nombre']; ?></h4>
                                    <?php $filesize = filesize( get_attached_file( $memoria['archivo'] ) );$filesize = size_format($filesize, 2);?>
                                    <small><?php echo $filesize;?></small>
                                </div>
                            </a>
                        </article> 
                    </div>
                    <?php if($cm % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
                <?php endforeach; ?>
                <?php }?>
            <?php endforeach;?> 
           </div><!-- row --> 
        </div>
    </section>

    <?php endwhile; else: ?>
    <p><strong>No encontrado</strong><br />
    <a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
    <?php endif; ?>
    
<?php get_footer(); ?>