<?php get_header(); ?>
	<?php $var = get_queried_object()?>
    <?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php //$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article>
            <h2><?php echo $var->labels->name ?></h2>
            <h6><?php //echo get_field('info_bajada') ?></h6>
        </article>
    </figure>

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="break-bg nuestra-empresa-memorias">
        <div class="container">
			<?php $documentos = get_posts(array('post_type' =>'documentos' , 'order' => 'ASC' , 'showposts'=> -1)); ?>
            
            <h3>Prácticas</h3>
            <div class="row">
            
                <?php foreach($posts as $memoria): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                       <article class="box-pills ">
                            <a href="<?php echo wp_get_attachment_url(get_field('archivo' , $memoria->ID)) ?>" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
                                <div class="info">
                                    <?php //$date = DateTime::createFromFormat('Ymd', $memoria['fecha_de_publicacion']);?>
                                    <small><?php //echo $date->format('d-m-Y'); ?></small>
                                    <h4><?php echo $memoria->post_title; ?></h4>
                                    <?php $filesize = filesize( get_attached_file( get_field('archivo' , $memoria->ID) ) );$filesize = size_format($filesize, 2);?>
                                    <small><?php echo $filesize;?></small>
                                </div><!--info-->
                            </a>
                        </article> 
                    </div>
                <?php endforeach; ?>
           </div><!-- row --> 
        </div>
    </section>

<?php get_footer(); ?>