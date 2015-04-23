<?php get_header(); ?>

    <figure class="presentacion-interior" style="background-image:url(/wp-content/uploads/2015/01/empresas-banmedica.jpg)">
        <article>
            <h2>Resultados de Búsqueda</h2>
            <h6></h6>
        </article>
    </figure>

    <div class="def-actions-bar mini-menu"></div><!--barra gris-->

    <section class="break-bg nuestra-empresa-memorias">
        <div class="container">
            
            <div class="row">
            <?php $rs = 0;?>
            
            
            <?php if($posts){?>
            <?php foreach($posts as $post): ?>
                	
                    
                    <?php if($post->post_type == ('page')){?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a href="<?php echo get_permalink($post->ID)?>" target="_blank">
                                    
                                    <div class="info">
                                        <small>Página</small>
                                        <h4><?php echo $post->post_title ?></h4>
                                        
                                        <small>Ver resultado</small>
                                    </div>
                                </a>
                            </article> 
                        </div>
                    <?php }elseif($post->post_type == ('post')){ ?>
                    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a data-toggle="modal" data-target="#post-<?php echo $post->ID?>">
                                
                                    <div class="info">
                                        <small>Noticia - <?php echo get_the_date('d \d\e F \d\e Y' , $post->ID)?></small>
                                        <h4><?php echo $post->post_title;?></h4>
                                        <small>Ver noticia</small>
                                    </div><!--info-->
                                </a>
                            </article> 
                            
                             <div class="modal fade modal-wide" id="post-<?php echo $post->ID?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><?php echo substr($post->post_title , 0 , 70)?></h4>
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
                            
                        </div>
                        
                       
                    <?php }elseif($post->post_type == ('seguros_de_salud')){?>
                    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a href="<?php echo get_permalink($post->ID)?>" target="_blank">
                                    
                                    <div class="info">
                                        <small>Seguro de salud</small>
                                        <h4><?php echo $post->post_title ?></h4>
                                        
                                        <small>Ver Seguro</small>
                                    </div>
                                </a>
                            </article> 
                        </div>
                    <?php }elseif($post->post_type == ('directorio')){?>
                    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a href="<?php echo get_page_link(42)?>" target="_blank">
                                    
                                    <div class="info">
                                        <small>Directorio</small>
                                        <h4><?php echo $post->post_title ?></h4>
                                        
                                        <small>Ver Directorio</small>
                                    </div>
                                </a>
                            </article> 
                        </div>
                    <?php }elseif($post->post_type == ('documentos')){?>
                    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a href="<?php echo get_page_link(68)?>" target="_blank">
                                    
                                    <div class="info">
                                        <small>Estados Financieros y documentos</small>
                                        <h4><?php echo $post->post_title ?></h4>
                                        
                                        <small>Ver documentos</small>
                                    </div>
                                </a>
                            </article> 
                        </div>
                    <?php }elseif($post->post_type == ('attachment') && $post->post_mime_type == 'image/png' || $post->post_type == ('attachment') && $post->post_mime_type == 'image/jpeg'){?>
                    	<?php /* ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a href="<?php echo get_page_link(68)?>" target="_blank">
                                    
                                    <div class="info">
                                        <small>Documentos y adjuntos, Aparece en:</small>
                                        <h4>hola! soy una imagen</h4>
                                        
                                        <small>Ver documentos</small>
                                    </div>
                                </a>
                            </article> 
                        </div>
                        <?php  */?>
                    <?php }elseif($post->post_type == ('attachment') && $post->post_mime_type == 'application/pdf'){?>
                    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <article class="box-pills ">
                                <a href="<?php echo get_page_link(68)?>" target="_blank">
                                    
                                    <div class="info">
                                        <small>Documentos y adjuntos, Aparece en:</small>
                                        <h4><?php echo get_the_title($post->post_parent) ?></h4>
                                        
                                        <small>Ver documentos</small>
                                    </div>
                                </a>
                            </article> 
                        </div>
                    <?php }?>
                    
                    <?php $rs++?>
                    <?php if($rs % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
                <?php endforeach; ?>
                <?php }else{?>
                	<h3>No hay resultados para la búsqueda ingresada, intente nuevamente</h3>
                <?php }?>
           </div><!-- row --> 
        </div>
    </section>

    
    
<?php get_footer(); ?>