<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="little-box">
        <h1><?php the_title(); ?></h1>
        <h4>         
            <?php the_time('F j, Y') ?>
        </h4>
        <?php the_excerpt( sprintf(wp_kses(),get_the_title()) ); ?>
        <div>
            <a href="<?php the_permalink() ?>"><?php echo __('Continua') ?></a>
        </div>
    </div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Nada'); ?></p>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>