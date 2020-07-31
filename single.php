<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
<a href="<?php echo home_url(); ?>">home</a>
<h1><?php the_title(); ?></h1>
<h4><?php the_time('F j, Y'); ?></h4>
<p><?php echo $post->post_content; ?></p>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>