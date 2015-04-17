<?php
    /*
    Template Name: Noticias
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
    
    <section class="nuestra-empresa-info-accionista noticias">
    
        <section class="documentos">

            <div role="tabpanel">
                <span class="separation">
                    <div class="container">
                        <section class="list_carousel responsive">
                            <ul class="carrousel-time" role="tablist">
                                <li>
                                    <a href="#uno" role="tab" data-toggle="tab">2005</a>
                                </li>

                                <li>
                                    <a href="#dos" role="tab" data-toggle="tab">2006</a>
                                </li>

                                <li>
                                   <a href="#tres" role="tab" data-toggle="tab">2007</a>
                                </li>

                                <li>
                                   <a href="#cuatro" role="tab" data-toggle="tab">2008</a>
                                </li>

                                <li>
                                   <a href="#cinco" role="tab" data-toggle="tab">2009</a>
                                </li>

                                <li>
                                   <a href="#seis" role="tab" data-toggle="tab">2010</a>
                                </li>

                                <li>
                                    <a href="#siete" role="tab" data-toggle="tab">2011</a>
                                </li>

                                <li>
                                   <a href="#ocho" role="tab" data-toggle="tab">2012</a>
                                </li>

                                <li>
                                   <a href="#nueve" role="tab" data-toggle="tab">2013</a>
                                </li>

                                <li>
                                   <a href="#diez" role="tab" data-toggle="tab">2014</a>
                                </li>

                                <li class="active">
                                   <a href="#once" role="tab" data-toggle="tab">2015</a>
                                </li>
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
                                

                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                   
                                   <article class="box-pills ">
                                        <a href="http://impresa.elmercurio.com/Pages/NewsDetail.aspx?dt=2014-04-08&dtB=08-04-2014%200:00:00&PaginaId=9&bodyid=2" target="_blank">
                                        <div style="" class="imagen-noticia">
                                            <img src="http://www.empresasbanmedica.cl/images/noticias/2014/abril/citacionBM08-04-2014.gif" />
                                        </div>
                                        
                                            <div class="info">
                                                <small>8/4/2014</small>
                                                <h4>Diario el mercurio</h4>
                                            </div><!--info-->
                                            <br />
                                        </a>
                                    </article> 
                                </div>

                                

                            <br class="clear">
                            </div><!-- row -->
                        </div><!--11-->

                    </div><!--tab-content-->
                </div>
            </div><!--tabpanel-->
        </section><!-- documentos -->

    </section>
    <?php endwhile; else: ?>
    <?php endif; ?>
    
<?php get_footer(); ?>