<?php wp_footer(); ?>
	<footer>
        <div class="container">
        	<div class="row">
            <section class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h6>Sobre Banmédica</h6>
                <p>Todos los derechos reservados a<br />
                Empresas Banmédica ©2014</p>   

                <p>Apoquindo 3600 piso 12<br /> 
                Las Condes -  Santiago, Chile.<br />
                Fono: (56 2) 2353 3300</p>
            </section>
            
            <section class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
            	<h6>Comprometidos</h6>
                <a href="http://www.sellopropyme.gob.cl/"><img src="<?php bloginfo('template_directory')?>/img/propyme.png" alt="" style="padding:0 15px;" class="img-responsive" /></a>
            </section>
            
            
			<?php /* ?>
            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h6>Suscríbete al Newsletter</h6>

                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only">News</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-send"><span class="glyphicon glyphicon-arrow-right pull-right" aria-hidden="true"></span></button>
                </form>

                <p>Manténgase informado sobre datos de servicios de salud y sugerencias para una vida sana.</p>
            </section>
            <?php  */ ?>

			<section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs"></section>

            <section class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <h6>Website</h6>
                <ul>
                    <li>
                        <a href="<?php echo site_url(); ?>/quienes-somos/">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Nuestra Empresa
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url(); ?>/prestadores-de-salud/">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Prestadores de Salud
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url(); ?>/seguros/">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Seguros de Salud
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url(); ?>/internacional/">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Internacional
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url(); ?>/informacion-accionistas/">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Info Accionistas
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo get_page_link(1297)?>">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Contacto
                        </a>
                    </li>
                </ul>
            </section>
            </div>
        </div> 
    </footer>

	<div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          		<div class="col-md-4 col-md-offset-4">
                	<img src="<?php bloginfo('template_directory')?>/img/empresasbanmedica.png" class="img-responsive" alt="">
                </div>
                <div class="clear"></div>
          		<div class="col-md-12">
                	<form method="get" id="searchform" action="<?php bloginfo('url')?>">
                      <label class="hidden" for="s"></label>
                      
                      <div class="input-group">
                          <div class="input-group-addon"><a onclick="document.getElementById('searchform').submit();"><span class="glyphicon glyphicon-search"></span></a></div>
                          <input type="text" placeholder="¿Qué buscas?..." value="" name="s" id="s" class="form-control">
                      </div>
                      
                	</form>
                </div>
            	<div class="clear"></div>
          </div>
          
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/flowtype.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.bxslider.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php if(is_page_template('page-tabla.php')){?>
	<script>
        $('.table-responsive table').addClass('table table-bordered')
    </script> 
    <?php }?>
    <?php if(is_page(68)){?>
    <script>
		$('.hashmenu').click(function(event) {
			var ln = $(this).children('a').attr('rel');
			var lk = '#'+ln;
			
			$('html,body').animate({
			  scrollTop: $('#'+ln).offset().top
			}, 1000);
			
		});
	</script>
    <?php }?>
    
    </body>
</html>