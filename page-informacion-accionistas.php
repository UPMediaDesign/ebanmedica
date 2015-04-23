<?php
    /*
    Template Name: Información accionistas
    */
?>
<?php get_header(); ?>



    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <figure class="presentacion-interior" style="background-image:url(<?php echo $url; ?>)">
        <article>
            <h2><?php echo $post->post_title; ?></h2>
            <h6><?php echo get_field('info_bajada') ?></h6>
        </article>
    </figure>
    <section class="def-actions-bar mini-menu">
        <div class="container">
        </div>
    </section>

    <section class="container nuestra-empresa-info-accionista" id="resumen">
        <div class="row">
            
            <article class="detail col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h3>Resumen</h3>
                <?php echo $post->post_content ?>
            </article>

            <figure class="col-xs-12 col-sm-6 col-md-6 col-lg-6 resume-pic detail">
                <?php $resumen = wp_get_attachment_image_src( get_field('foto_resumen'), 'full' )?>
                <img src="<?php echo $resumen[0]?>" class="img-responsive" alt="">
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
                        <li><b>Razón Social :</b><?php echo get_field('razon_social'); ?></li>
                        <li><b>Nombre de Fantasía :</b><?php echo get_field('nombre_de_fantasia'); ?></li>
                        <li><b>Domicilio Legal :</b><?php echo get_field('domicilio_legal'); ?></li>
                        <li><b>Inscripción:</b><?php echo get_field('inscripcion'); ?></li>
                    </ul>
                    <ul class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <li><b>R.U.T.</b> <?php echo get_field('rut'); ?></li>
                        <li><b>Tipo de Entidad :</b><?php echo get_field('tipo_entidad'); ?></li>
                        <li><b>Información de contacto para Accionistas :</b><?php echo get_field('info_de_contacto'); ?></li>
                        <li><b>Documentos Constitutivos</b> <?php echo get_field('documentos_constitutivos'); ?></li>
                    </ul>
                </div>
            </section>

            <section class="sistema" id="sistema-de-votacion">
                <h3>Sistema de Votacion</h3>
                <h5>Sistema de votación Junta Ordinaria de Accionistas sociedad Banmédica S.A.</h5>
                <p><?php echo get_field('sistema'); ?></p>
            </section>



            <section class="reporte">
                <h3>Reporte Anual</h3>

                <section class="slide">
                    <ul class="bxslider-interior">
                        <?php /* query_posts(array('post_type' =>'accionistas'));
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php $reportes = get_order_group('reporte_anual_bajada');
                            foreach($reportes as $reporte){ ?>
                            
                            <li>
                                <h5><?php echo get('reporte_anual_bajada',$reporte); ?></h5>
                                <?php echo get_image('reporte_anual_imagen',$reporte); ?>
                            </li>
                            <?php } ?>
                        
                        <?php endwhile; else: ?>
                        <?php endif;  */?>   

                        
                    </ul>
                </section> <!--Slide-->
            </section>
        </div>

        <?php /* query_posts(array('post_type' =>'accionistas'));
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
        <?php endif; */ ?> 
        <section class="documentos">
            <h4 class="container">Documentos y Revisiones</h4>

            <div role="tabpanel">
                <span class="separation" id="tofix">
                    <div class="container">
                        <section class="list_carousel responsive">
                            <ul class="carrousel-time documentos-list-title" role="tablist">
                                
                                <?php $documentos = get_posts(array('post_type' =>'documentos' , 'order' => 'ASC' , 'showposts'=> -1)); ?>
                                <?php foreach($documentos as $documento):?>
                                <li>
                                      <a href="#tab-<?php echo $documento->post_name?>" role="tab" data-toggle="tab"><?php echo $documento->post_name ?></a>
                                </li> 
                                <?php endforeach ?>                                
                            
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
                        
						<?php $ef = 0 ; $ec = 0; $er = 0 ; $he = 0?>
                        
                       	<?php $documentos = get_posts(array('post_type' =>'documentos' , 'order' => 'ASC' , 'showposts'=> -1)); ?>
                        <?php $docs = 0 ; $doc = count($documentos);?>
                        <?php foreach($documentos as $documento):?>
                        <?php $docs++?>
                        <div role="tabpanel" class="tab-pane" id="tab-<?php echo $documento->post_name?>">
                            <h3 <?php if($docs == $doc){echo 'id="memorias"';}?>>Memorias</h3>
                            <h5>Memorias y Documentos ordenados por año.</h5>

                            <div class="row">
                                <?php $memorias = get_field('memorias' , $documento->ID);
								if($memorias){
									$cm = 0;
									foreach($memorias as $memoria): ?>
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
												</div><!--info-->
											</a>
										</article> 
									</div>
                                    <?php $cm++ ; if($cm % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
									<?php endforeach ?>
                                <?php }?>
								<br class="clear">
                            </div><!-- row -->
                            <?php if($docs == $doc){echo '<div id="estados-financieros" class="anchor"></div>';}?>
                            <h3>Estados Financieros Empresas Banmédica y Filiales</h3>
                            <h5>Revisiones y actualizaciones del estado de la empresa</h5>
                            <div class="row">
                                <?php $consolidados = get_field('estados_consolidados' , $documento->ID);
								if($consolidados){
									$ef = 0 ;
									foreach($consolidados as $consolidado): ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									   <article class="box-pills eeff">
											<a href="<?php echo wp_get_attachment_url($consolidado['archivo']) ?>" target="_blank">
												<img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
												<div class="info">
													<?php $date = DateTime::createFromFormat('Ymd', $consolidado['fecha_publicacion']);?>
													<small><?php echo $date->format('d-m-Y'); ?></small>
													<h4><?php echo $consolidado['nombre']; ?></h4>
													<?php $filesize = filesize( get_attached_file( $consolidado['archivo'] ) );$filesize = size_format($filesize, 2);?>
                                                    <small><?php echo $filesize;?></small>
												</div><!--info-->
											</a>
										</article> 
									</div>
                                    <?php $ef++ ; if($ef % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
									<?php endforeach ?>
                                <?php }?>
								<br class="clear">
                            </div><!-- row -->
                            
                            <?php if($docs == $doc){echo '<div id="estados-resumidos" class="anchor"></div>';}?>
                            <h3>Estados Resumidos Empresas Banmédica y Filiales</h3>
                            <h5>Revisiones y actualizaciones del estado de la empresa</h5>
                            <div class="row">
                                <?php $consolidados = get_field('estados_resumidos_filiales' , $documento->ID);
								if($consolidados){
									$er = 0 ;
									foreach($consolidados as $consolidado): ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									   <article class="box-pills box-pills-b">
											<a href="<?php echo wp_get_attachment_url($consolidado['archivo']) ?>" target="_blank">
												<img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
												<div class="info">
													<?php $date = DateTime::createFromFormat('Ymd', $consolidado['fecha_publicacion']);?>
													<small><?php echo $date->format('d-m-Y'); ?></small>
													<h4><?php echo $consolidado['nombre']; ?></h4>
													<?php $filesize = filesize( get_attached_file( $consolidado['archivo'] ) );$filesize = size_format($filesize, 2);?>
                                                    <small><?php echo $filesize;?></small>
												</div><!--info-->
											</a>
										</article> 
									</div>
                                    <?php $er++ ; if($er % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
									<?php endforeach ?>
                                <?php }?>
								<br class="clear">
                            </div><!-- row -->

                           
 							<?php if($docs == $doc){echo '<div id="hechos-esenciales" class="anchor"></div>';}?>
                            <h3>Hechos Esenciales</h3>
                            <h5>Revisiones y actualizaciones del estado de la empresa</h5>
                            <div class="row">
                                <?php $hechos = get_field('hechos_esenciales' , $documento->ID);
								if($hechos){
									$he = 0;
									foreach($hechos as $hecho): ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									   <article class="box-pills ">
											<a href="<?php echo wp_get_attachment_url($hecho['archivo']) ?>" target="_blank">
												<img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
												<div class="info">
													<?php $date = DateTime::createFromFormat('Ymd', $hecho['fecha_publicacion']);?>
													<small><?php echo $date->format('d-m-Y'); ?></small>
													<h4><?php echo $hecho['nombre']; ?></h4>
													<?php $filesize = filesize( get_attached_file( $hecho['archivo'] ) );$filesize = size_format($filesize, 2);?>
                                                    <small><?php echo $filesize;?></small>
												</div><!--info-->
											</a>
										</article> 
									</div>
                                    <?php $he++ ; if($he % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
									<?php endforeach ?>
                                <?php }?>
								<br class="clear">
                            </div><!-- row -->
                            
                            <?php if($docs == $doc){echo '<div id="presentaciones" class="anchor"></div>';}?>
                            <h3>Presentaciones</h3>
                            <h5>Press Releases</h5>
                            <div class="row">
                                <?php $intermedios = get_field('presentaciones' , $documento->ID);
								if($intermedios){
									$ec = 0;
									foreach($intermedios as $intermedio): ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									   <article class="box-pills ">
											<a href="<?php echo wp_get_attachment_url($intermedio['archivo']) ?>" target="_blank">
												<img src="<?php bloginfo('template_url'); ?>/img/icon-pdf.svg"  class="pull-left" alt="">
												<div class="info">
													<?php $date = DateTime::createFromFormat('Ymd', $intermedio['fecha_publicacion']);?>
													<small><?php echo $date->format('d-m-Y'); ?></small>
													<h4><?php echo $intermedio['nombre']; ?></h4>
													<?php $filesize = filesize( get_attached_file( $intermedio['archivo'] ) );$filesize = size_format($filesize, 2);?>
                                                    <small><?php echo $filesize;?></small>
												</div><!--info-->
											</a>
										</article> 
									</div>
                                    <?php $ec++ ; if($ec % 3 == 0){ echo '<div class="clear hidden-sm"></div>';}?>
									<?php endforeach ?>
                                <?php }?>
								<br class="clear">
                            </div><!-- row -->

                        </div>
                        
                        <?php  endforeach;?>  
                        

                    </div><!--tab-content-->
                </div>
            </div><!--tabpanel-->
        </section><!-- documentos -->

    </section>


    
<?php get_footer(); ?>