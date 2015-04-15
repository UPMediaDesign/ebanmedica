<section class="marcas col-sm-12 col-md-12 col-lg-12">
    <section class="list_carousel responsive">
        <ul class="carrousel">
            

            <?php query_posts(array('post_type' =>'home'));
            if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php $logos = get_order_group('logos_url');
            foreach($logos as $logo){ ?>
            <li>
                <a href="<?php echo get('logos_url',$logo); ?>">
                    <?php echo get_image('logos_imagen',$logo); ?>
                </a>
            </li>            
            <?php } ?> 

            <?php endwhile; else: ?>
            <?php endif; ?> 
        </ul>
        <div class="control">
            <a id="prev" class="prev" href="#"><span class="glyphicon glyphicon-arrow-left pull-right" aria-hidden="true"></span></a>
            
            <a id="next" class="next" href="#"><span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span></a>
        </div><!--control-->
        
    </section>
</section>