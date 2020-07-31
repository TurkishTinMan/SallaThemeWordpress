<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="little-box">
<h1><?php the_title(); ?></h1>
    <div class="data-wrapper"><div class="data-decoration"></div><div class="data-content"><h4><?php the_time('F j, Y') ?></h4></div></div>
		<?php
		the_excerpt( sprintf(
			wp_kses(

				),
			get_the_title()
			) );


		wp_link_pages( array(
			'before' => '<div class="page-links">',
			'after'  => '</div>',
			) );
			?>
			<div class="text-center">
				<a href="<?php the_permalink() ?>" class="blogpost-button"><?php echo __('Continua') ?></a>
			</div>
        
    </div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>