<section class="marcas col-sm-12 col-md-12 col-lg-12">
    <section class="list_carousel responsive">
        <ul class="carrousel">
            

            <?php $prestadores = get_posts(array('post_type' => array('prestadores' , 'prestadores_1') , 'numberposts' => -1 , 'orderby' => 'name' , 'orderby' => 'rand'));?>
            <?php foreach($prestadores as $prestador):?>

            <li>
                <a href="<?php echo get_permalink($prestador->ID); ?>">
                    <?php //echo get_permalink($prestador->ID) ?><img src="<?php echo wp_get_attachment_url(get_field('logo_transparente' , $prestador->ID)) ?>" class="img-responsive" alt="">
                </a>
            </li>            

            <?php endforeach;?> 
        </ul>
        <div class="control">
            <a id="prev" class="prev" href="#"><span class="glyphicon glyphicon-arrow-left pull-right" aria-hidden="true"></span></a>
            
            <a id="next" class="next" href="#"><span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span></a>
        </div><!--control-->
        
    </section>
</section>