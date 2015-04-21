<?php get_header(); ?>

	<?php $var = get_queried_object()?>
    <?php $url = wp_get_attachment_url( get_field('encabezado', 'category_9') ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article>
            <h2><?php echo $var->name?></h2>
            <h6><?php //echo get_field('info_bajada') ?></h6>
        </article>
    </figure>
    
    <section class="nuestra-empresa-info-accionista noticias">
    
    
    
        <section class="documentos">

            <div role="tabpanel">
                <span class="separation">
                    <div class="container">
                        <section class="list_carousel responsive">
                            <ul class="carrousel-time" role="tablist">
                            	
                            <?php $anos = get_terms('category' , array('child_of' => 9 , 'hide_empty' => false))?>
                            <?php foreach($anos as $ano):?>
                                <li>
                                    <a href="<?php echo get_category_link( $ano->term_id )?>"><?php echo $ano->name?></a>
                                </li>
                            <?php endforeach;?>
                            
                            </ul>

                            <div class="control">
                                <a id="prev" class="prev" href="#"><span class="glyphicon glyphicon-arrow-left pull-right" aria-hidden="true"></span></a>
                                
                                <a id="next" class="next" href="#"><span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span></a>
                            </div><!--control-->
                        </section>
                    </div><!--container-->
                </span>
                                                
                <div class="container">
                    <!-- Tab panes -->
                            <div class="row noticias">
                                <?php $ncount = 0?>
								<?php foreach($posts as $post):?>
                                <?php $ncount++?>
                                
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                   <article class="box-pills ">
                                        <a data-toggle="modal" data-target="#post-<?php echo $post->ID?>">
                                        <div style="" class="imagen-noticia">
                                            <?php echo get_the_post_thumbnail($post->ID , 'box')?>
                                        </div>
                                            <div class="info">
                                                <small><?php echo get_the_date('d \d\e F \d\e Y' , $post->ID)?></small>
                                                <h4><?php echo $post->post_title;?></h4>
                                            </div><!--info-->
                                            <br />
                                        </a>
                                    </article> 
                                </div>
                                
                                <?php  ?>
                                <!-- Modal -->
                                <div class="modal fade modal-wide" id="post-<?php echo $post->ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><?php echo $post->post_title?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php echo apply_filters('the_content' , $post->post_content)?>
                                      </div>
                                      <div class="modal-footer">
                                        <a href="<?php echo get_field('link_externo' , $post->ID)?>" target="_blank" class="btn btn-primary">Ver Noticia original</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php if($ncount % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
                                
								<?php endforeach?>
                                
                                
                            <br class="clear">
                            </div><!-- row -->
                        </div><!--11-->

                </div>
        </section><!-- documentos -->

    </section>
    
<?php get_footer(); ?>