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
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="uno">
                            
                            

                        </div><!--1-->

                        <div role="tabpanel" class="tab-pane" id="dos">
                           2
                        </div><!--2-->

                        <div role="tabpanel" class="tab-pane" id="tres">
                            3
                        </div><!--3-->

                        <div role="tabpanel" class="tab-pane" id="cuatro">
                            4
                        </div><!--4-->

                        <div role="tabpanel" class="tab-pane" id="cinco">
                            5
                        </div><!--5-->

                        <div role="tabpanel" class="tab-pane" id="seis">
                            6
                        </div><!--6-->

                        <div role="tabpanel" class="tab-pane" id="siete">
                            7
                        </div><!--7-->

                        <div role="tabpanel" class="tab-pane" id="ocho">
                            8
                        </div><!--8-->

                        <div role="tabpanel" class="tab-pane" id="nueve">
                            9
                        </div><!--9-->

                        <div role="tabpanel" class="tab-pane" id="diez">
                            10
                        </div><!--10-->

                        <div role="tabpanel" class="tab-pane fade in active" id="once">
                            <div class="row">
                                
								<?php foreach($posts as $post):?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                   <article class="box-pills ">
                                        <a href="http://impresa.elmercurio.com/Pages/NewsDetail.aspx?dt=2014-04-08&dtB=08-04-2014%200:00:00&PaginaId=9&bodyid=2" target="_blank">
                                        <div style="" class="imagen-noticia">
                                            <img src="http://www.empresasbanmedica.cl/images/noticias/2014/abril/citacionBM08-04-2014.gif" />
                                        </div>
                                            <div class="info">
                                                <small>8/4/2014</small>
                                                <h4><?php echo $post->title;?></h4>
                                            </div><!--info-->
                                            <br />
                                        </a>
                                    </article> 
                                </div>
								<?php endforeach?>
                                
                                
                            <br class="clear">
                            </div><!-- row -->
                        </div><!--11-->

                    </div><!--tab-content-->
                </div>
            </div><!--tabpanel-->
        </section><!-- documentos -->

    </section>
    
<?php get_footer(); ?>