<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <?php if(is_home()){?>
            <title><?php wp_title();?></title>
        <?php }else{?>
            <title><?php wp_title();?></title>
        <?php }?>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico">

        <script src="<?php bloginfo('template_directory')?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>
   		<header>
	        <nav class="navbar navbar-fixed-top" role="navigation">
	            <section class="container def-actions-bar">
                	
                    <div class="navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo get_bloginfo('url') ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-min.png" alt=""></a>
	                </div>
                    
                	<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 4,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
                
	                <?php /* ?>
                    <div class="navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    </button>
	                    <a class="navbar-brand" href="<?php echo get_bloginfo('url') ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-min.png" alt=""></a>
	                </div>

	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                    
	                    <ul class="nav navbar-nav navbar-right">
	                        <li class="<?php if ( is_home() ) { echo ' active '; } ?>"><a href="<?php echo get_bloginfo('url'); ?>">Home</a></li>
	                        <li class="dropdown">
	                            <a data-toggle="dropdown" data-target="#">
	                                Nuestra Empresa <span class="caret"></span>
	                            </a>
	                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/quienes-somos">Quiénes somos</a></li>
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/antecedentes-de-la-sociedad">Antecedentes de la sociedad</a></li>
	                                <li class="dropdown-submenu">
	                                <a tabindex="-1" href="#">Gobiernos corporativos</a>
	                                    <ul class="dropdown-menu">
	                                        <li><a tabindex="-1" href="<?php echo get_bloginfo('url'); ?>/directorio">Directrio y comité de directores</a></li>
	                                        <li><a href="http://empresasbanmedica.upmedia.cl/wp-content/uploads/2015/04/codigo_de_etica.pdf" target="_blank">Código de etica</a></li>
	                                        <li class="dropdown-submenu">
	                                        	<a href="#">Modelo de prevención de delitos ley 20.393</a>
	                                            <ul class="dropdown-menu thirdlevel">
	                                                <li><a href="http://www.empresasbanmedica.cl/pdf/Manual/MANUAL%20MPD_FINAL.pdf" target="_blank">Manual</a></li>
	                                                <li><a href="http://cdns2.freepik.com/foto-gratis/panda-punto-de-interrogacion_17-531154305.jpg">Canal de denuncia</a></li>
	                                            </ul>
	                                        </li>
	                                        <li class="dropdown-submenu">
	                                        	<a href="#">Práctica gobierno corporativo</a>
	                                            <ul class="dropdown-menu thirdlevel">
	                                                <li><a href="http://www.empresasbanmedica.cl/pdf/practicas/Norma341GobiernosCorpor.pdf" target="_blank">Diciembre 2013</a></li>
	                                                <li><a href="http://www.empresasbanmedica.cl/pdf/practicas/Gobiernocorporativo.pdf" target="_blank">Marzo 2013</a></li>
	                                            </ul>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/administracion">Administración</a></li>
	                                <li><a href="http://cdns2.freepik.com/foto-gratis/panda-punto-de-interrogacion_17-531154305.jpg">Organigrama</a></li>
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/memorias">Memorias</a></li>
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/en-la-prensa">En la prensa</a></li>
	                                <li><a href="http://www.fundacionbanmedica.cl/">Fundación banmedica</a></li>
	                            </ul>
	                        </li>
	                        <li class="<?php if ( is_page('prestadores-de-salud')) { echo ' active '; } ?>"><a href="<?php echo get_bloginfo('url'); ?>/prestadores-de-salud">Prestadores de Salud</a></li>
	                        <li class="<?php if ( is_page('seguros')) { echo ' active '; } ?>"><a href="<?php echo get_bloginfo('url'); ?>/seguros">Seguros</a></li>
	                        <li class="<?php if ( is_page('internacional')) { echo ' active '; } ?>"><a href="<?php echo get_bloginfo('url'); ?>/internacional">Internacional</a></li>
	                        <li class="dropdown">
	                        	<a data-toggle="dropdown" data-target="#">
	                        		Info Accionistas <span class="caret"></span>
	                        	</a>
								<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/informacion-accionistas">Resumen</a></li>
	                                <li><a href="<?php echo get_bloginfo('url'); ?>/dividendos">Dividendos</a></li>
	                            	<li><a href="<?php echo get_bloginfo('url'); ?>/informacion-bursatil">Información bursátil</a></li>
	                            	<li><a href="http://www.empresasbanmedica.cl/presenta/Manual_Informacion_Interes_Mercado.pdf" target="_blank">Manejo información de interés <small>(PDF)</small></a></li>
	                            	<li><a href="http://www.empresasbanmedica.cl/pdf/Actas/Acta%20JOA2014yAnexos.pdf" target="_blank">Acta junta ordinaria de accionistas <small>(PDF)</small></a></li>
	                            	<li><a href="http://www.empresasbanmedica.cl/presenta/EstatutosBanmedica.pdf" target="_blank">Estatutos sociales <small>(PDF)</small></a></li>
	                            	<li><a href="http://www.empresasbanmedica.cl/presenta/MANUAL_POLITICA_GENERAL_HABITUALIDAD.pdf" target="_blank">Manual política general de habitualidades <small>(PDF)</small></a></li>
	                            	<li><a href="http://www.empresasbanmedica.cl/documents/Fundamentos%20de%20la%20Prop%20%20de%20Auditores%20Externos%202014-Banm%C3%A9dica.pdf" target="_blank">Fundamentos proposicion auditores externos <small>(PDF)</small></a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div><!-- /.navbar-collapse -->
                    <?php  */?>
	            </section><!-- /.container -->
	        </nav>
	    </header>




