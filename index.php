<?php get_header(); ?>
	
    <style>
    .libg{  background-size: 100%;
  background-position: 50% 0%;
  background-repeat: no-repeat;}
    </style>
    
	<?php $slides = get_posts(array('post_type' =>'slides'));?>
    <section class="slide hidden-xs">
        <ul class="bxslider">
            
            <?php foreach($slides as $slide):?>
            	<?php $slimage = wp_get_attachment_image_src( get_post_thumbnail_id($slide->ID), 'full' )?>
                
            <li style="background-image:url(<?php echo $slimage[0]?>)" class="libg">
                <?php //echo get_the_post_thumbnail($slide->ID , 'full')?>
                <div class="container">
                    <article>
                        <h2><?php echo $slide->post_title?></h2>
                        <div class="clear"></div>
                        <span class="hidden-xs hidden-sm"><p><?php echo $slide->post_content?></p>
                        <?php /* ?>
                        <a href="<?php //echo get('slide_uno_url')?>" class="btn btn-default">
                            Leer Más <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                        </a>
                        <?php  */?>
                        </span>
                    </article>
                </div>
            </li>
            <?php endforeach;?>

        </ul>

        <div class="paginador hidden-xs">
        	<?php $sc = 0?>
        	<?php foreach($slides as $slide):?>
            	<?php $sc++?>
           		<a data-slide-index="<?php echo $sc-1?>" href=""><?php echo $slide->post_title?></a>
            <?php endforeach;?>
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
    
    
    <div class="clear separator"></div>

    <section class="break-bg">
        <div class="container">
            <?php $pills = get_field('cajas' , 143 ) ?>
            
            <div class="index-pills">
            <?php $pcounter = 0?>
            
            
            
            <?php foreach ($pills as $pill):?>
            <?php $pcounter++?>
            	<?php if($pcounter<=3){?>
                    <article class="pills col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="info">
                            <a href="<?php echo $pill['link']?>">
                                <h3><?php echo $pill['titulo']?></h3>
                                <span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span>
                            </a>
                            <p><?php echo $pill['descripcion']?></p>
                        </div><!--info--> 
                        <figure>
                        	<?php $img = wp_get_attachment_image_src( $pill['imagen_caja'], 'pill' ); ?> 
                            <a href="<?php echo $pill['link']?>"><img src="<?php echo $img[0] ?>" alt=""></a>
                        </figure>                    
                    </article><!--pills-->
                <?php }else{?>
                    <article class="pills pillsb col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="info">
                            <a href="<?php echo $pill['link']?>">
                                <h3><?php echo $pill['titulo']?></h3>
                                <span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span>
                            </a>
                            <p><?php echo $pill['descripcion']?></p>
                        </div><!--info--> 
                    </article>
                <?php }?>
            <?php endforeach;?>
            </div><!--index-pills-->
            
            <br class="clear">
			<?php $campanas = get_posts(array('numberposts' => 1 , 'post_type' => 'campanas' , 'orderby' => 'rand'))?>
            <section class="banner-info col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h2><?php echo $campanas[0]->post_title?></h2>
                    <p>
                        <?php echo $campanas[0]->post_content?>
                    </p>
                    <a href="<?php //echo get('pastilla_grande_url'); ?>">Leer Más <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
                </div>

                <figure class="col-sm-6 col-md-6 col-lg-6">
                    <a href="<?php //echo get('pastilla_grande_url'); ?>"><?php echo get_the_post_thumbnail($campanas[0]->ID , 'campana') ?></a>
                </figure>
            </section>
            <?php get_template_part('marcas')?>

        </div><!--container-->
    </section>
    
<?php get_footer(); ?>