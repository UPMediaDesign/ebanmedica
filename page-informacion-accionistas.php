<?php
    /*
    Template Name: Información accionistas
    */
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article>
            <h2><?php the_title(); ?></h2>
            <h6><?php echo get('info_bajada') ?></h6>
        </article>
    </figure>
    <section class="def-actions-bar mini-menu">
        <div class="container">
        </div>
    </section>

    <section class="container nuestra-empresa-info-accionista">
        <div class="row">
            <h2>Introducción</h2>
            <article class="single-picture col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <figure>
                    <img src="<?php bloginfo('template_url'); ?>/img/nuestra-empresa-info-accionistas.jpg" class="img-responsive">
                </figure>
                <div class="info">
                    <?php the_content(); ?>
                </div><!--info-->   
            </article><!--pills-->

            <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h3>Resumen</h5>
                <?php echo get('info_extracto'); ?>
            </article>

            <figure class="col-xs-12 col-sm-6 col-md-6 col-lg-6 resume-pic">
                <?php
                $otros = array("h" => 600, "w" => 1000, "zc" => 1, "q" =>100);
                $alt = array('alt'=>'Empresas banmedica', "class" => "img-responsive");
                echo get_image('info_imagen',1,1,1,NULL,$otros,$alt);
                ?>
            </figure>  
        </div><!--row-->       
    </section> <!--container-->

    <!--<span class="separation"></span>-->

    <section class="break-bg nuestra-empresa-info-accionista">
        <div class="container">
            <section class="sociedad">
                <h3>Identificación de la Sociedad</h3>
                <div class="row">
                    <ul class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <li><b>Razón Social :</b><?php echo get('sociedad_razon'); ?></li>
                        <li><b>Nombre de Fantasía :</b><?php echo get('sociedad_nombre'); ?></li>
                        <li><b>Domicilio Legal :</b><?php echo get('sociedad_domicilio'); ?></li>
                        <li><b>Inscripción:</b><?php echo get('sociedad_inscripcion'); ?></li>
                    </ul>
                    <ul class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <li><b>R.U.T.</b> <?php echo get('sociedad_rut'); ?></li>
                        <li><b>Tipo de Entidad :</b><?php echo get('sociedad_tipo'); ?></li>
                        <li><b>Información de contacto para Accionistas :</b><?php echo get('sociedad_contacto'); ?></li>
                        <li><b>Documentos Constitutivos</b> <?php echo get('sociedad_documentos'); ?></li>
                    </ul>
                </div>
            </section>

            <section class="sistema">
                <h3><?php echo get('votacion_titulo'); ?></h3>
                <h5><?php echo get('votacion_bajada'); ?></h5>
                <p><?php echo get('votacion_texto'); ?></p>
            </section>
    <?php endwhile; else: ?>
    <p><strong>No encontrado</strong><br />
    <a href="<?php echo site_url(); ?>">ir a la página de inicio</a></p>
    <?php endif; ?>
            <section class="reporte">
                <h3>Reporte Anual</h3>

                <section class="slide">
                    <ul class="bxslider-interior">
                        <?php query_posts(array('post_type' =>'accionistas'));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php $reportes = get_order_group('reporte_anual_bajada');
                            foreach($reportes as $reporte){ ?>
                            
                            <li>
                                <h5><?php echo get('reporte_anual_bajada',$reporte); ?></h5>
                                <?php echo get_image('reporte_anual_imagen',$reporte); ?>
                            </li>
                            <?php } ?>
                        
                        <?php endwhile; else: ?>
                        <?php endif; ?>   

                        
                    </ul>
                </section> <!--Slide-->
            </section>
        </div>

        <?php query_posts(array('post_type' =>'accionistas'));
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pdf-emule">
            <div role="tabpanel">
                <span class="separation">
                    <div class="container">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#dividendos" aria-controls="Dividendos" role="tab" data-toggle="tab">Dividendos</a>
                            </li>
                            
                            <li>
                                <a href="#politica" aria-controls="Política de Dividendos" role="tab" data-toggle="tab">Política de Dividendos</a>
                            </li>
                            
                            <li>
                                <a href="#utilidades" aria-controls="Utilidades Distribuibles" role="tab" data-toggle="tab">Utilidades Distribuibles</a>
                            </li>
                        </ul>
                    </div>
                </span>
                
                <div class="container">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="dividendos">
                            <section class="slide">
                                <ul class="bxslider-interior">
                                    
                                    <?php $dividendos = get_order_group('dividendos_imagen');
                                    foreach($dividendos as $dividendo){ ?>
                                    <li>
                                        <?php echo get_image('dividendos_imagen',$dividendo); ?>
                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                            </section> <!--Slide-->
                        </div><!--decada-80-->



                        <div role="tabpanel" class="tab-pane" id="politica">
                            <section class="slide">
                                <ul class="bxslider-interior-dos">
                                    
                                    <?php $politicas = get_order_group('politica_imagen');
                                    foreach($politicas as $politica){ ?>
                                    <li>
                                        <?php echo get_image('politica_imagen',$politica); ?>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </section> <!--Slide-->

                        </div><!--decada-90-->

                        <div role="tabpanel" class="tab-pane" id="utilidades">
                            <section class="slide">
                                <ul class="bxslider-interior-tres">
                                    
                                    <?php $utilidades = get_order_group('utilidades_imagen');
                                    foreach($utilidades as $utilidad){ ?>
                                    <li>
                                        <?php echo get_image('utilidades_imagen',$utilidad); ?>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </section> <!--Slide-->
                        </div><!--decada-00-->

                    </div><!--tab-content-->
                </div>
            </div><!--tabpanel-->
        </section>
        <?php endwhile; else: ?>
        <?php endif; ?> 
        
        <section class="documentos">
            <h4 class="container">Documentos y Revisiones</h4>

            <div role="tabpanel">
                <span class="separation">
                    <div class="container">
                        <section class="list_carousel responsive">
                            <ul class="carrousel-time documentos-list-title" role="tablist">
                                
                                <?php query_posts(array('post_type' =>'documentos','order' => 'ASC','showposts'=>'100'));
                                if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li>
                                    <a href="#a<?php the_title(); ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
                                </li> 
                                <?php endwhile; else: ?>
                                <?php endif; ?>                                
                            
                            </ul>

                            <div class="control">
                                <a id="prev" class="prev" href="#"><span class="glyphicon glyphicon-arrow-left pull-right" aria-hidden="true"></span></a>
                                
                                <a id="next" class="next" href="#"><span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span></a>
                            </div><!--control-->
                        </section>
                    </div><!--container-->
                </span>
                
                <div class="container ">
                    <!-- Tab panes -->
                    <div class="tab-content documentos-list-content">
                        

                        <?php query_posts(array('post_type' =>'documentos','order' => 'ASC','showposts'=>'100'));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <div role="tabpanel" class="tab-pane" id="a<?php the_title(); ?>">
                            <h3>Memorias</h3>
                            <h5><?php echo get('bajadas_memorias'); ?></h5>

                            <div class="row">
                                
                                <?php $memorias = get_order_group('memorias_fecha');
                                foreach($memorias as $memoria){ ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                   <article class="box-pills ">
                                        <a href="<?php echo get('memorias_pdf',$memoria); ?>" target="_blank">
                                            <img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
                                            <div class="info">
                                                <small><?php echo get('memorias_fecha',$memoria); ?></small>
                                                <h4><?php echo get('memorias_nombre',$memoria); ?></h4>
                                                <small><?php echo get('memorias_peso',$memoria); ?></small>
                                            </div><!--info-->
                                        </a>
                                    </article> 
                                </div>
                                <?php } ?>


                            <br class="clear">
                            </div><!-- row -->

                            <h3>Estados Financieros</h3>
                            <h5><?php echo get('bajadas_estados'); ?></h5>

                            <div class="row">
                                
                                <?php $estados = get_order_group('estados_fecha');
                                foreach($estados as $estado){ ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                   <article class="box-pills ">
                                        <a href="<?php echo get('estados_pdf',$estado); ?>" target="_blank">
                                            <img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
                                            <div class="info">
                                                <small><?php echo get('estados_fecha',$estado); ?></small>
                                                <h4><?php echo get('estados_nombre',$estado); ?></h4>
                                                <small><?php echo get('estados_peso',$estado); ?></small>
                                            </div><!--info-->
                                        </a>
                                    </article> 
                                </div>
                                <?php } ?>

                            <br class="clear">
                            </div><!-- row -->

                            <h3>Hechos Escenciales</h3>
                            <h5><?php echo get('bajadas_hechos'); ?></h5>

                            <div class="row">
                                
                                <?php $hechos = get_order_group('hechos_fecha');
                                foreach($hechos as $hecho){ ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                   <article class="box-pills ">
                                        <a href="<?php echo get('hechos_pdf',$hecho); ?>" target="_blank">
                                            <img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
                                            <div class="info">
                                                <small><?php echo get('hechos_fecha',$hecho); ?></small>
                                                <h4><?php echo get('hechos_nombre',$hecho); ?></h4>
                                                <small><?php echo get('hechos_peso',$hecho); ?></small>
                                            </div><!--info-->
                                        </a>
                                    </article> 
                                </div>
                                <?php } ?>

                            <br class="clear">
                            </div><!-- row -->

                        </div><!--1-->
                        
                        <?php endwhile; else: ?>
                        <?php endif; ?>  
                        

                    </div><!--tab-content-->
                </div>
            </div><!--tabpanel-->
        </section><!-- documentos -->

    </section>


    
<?php get_footer(); ?>