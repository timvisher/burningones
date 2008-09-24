<div id="left_sidebar">

<?php 
	if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : 
	else : 
?>

<?php get_calendar(); ?>	

<ul>
<li><h2><?php _e('Find'); ?></h2><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
<li><h2><?php _e('Archive'); ?></h2><ul><?php wp_get_archives('type=monthly'); ?></ul></li>
</ul>		

<?php 
	endif; 
?>

</div> <!-- End left_sidebar -->