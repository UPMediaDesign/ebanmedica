<?php wp_footer(); ?>
	<footer>
        <div class="container">
            <section class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h6>Sobre Banmédica</h6>
                <p>Todos los derechos reservados a<br />
                Empresas Banmédica ©2014</p>   

                <p>Apoquindo 3600 piso 12<br /> 
                Las Condes -  Santiago, Chile.<br />
                Fono: (56 2) 2353 3300</p>
            </section>
            
            <section class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
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

			<section class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></section>

            <section class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
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
                        <a href="">
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> 
                            Contacto
                        </a>
                    </li>
                </ul>
            </section>
        </div> 
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/flowtype.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.bxslider.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script>
        $('.table-responsive table').addClass('table table-bordered')
    </script> 
    </body>
</html>