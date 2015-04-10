<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php the_content(__('Leer más'));?>	
<?php endwhile; else: ?>
<h2>No hay resultados</h2>
<p>Por favor intenta de nuevo<p/>
<p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>
<?php endif; ?>
<p><?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?></p>

<?php get_footer(); ?>