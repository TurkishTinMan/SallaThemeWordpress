<div id="ttr_sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="little-box">
<h2 class="title-little-box"><?php _e('Categories'); ?></h2>
<ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
    </div>
    
        <div class="little-box">
<h2 class="title-little-box"><?php _e('Archives'); ?></h2>
<ul > <?php wp_get_archives(); ?> </ul>
    </div>

</div>