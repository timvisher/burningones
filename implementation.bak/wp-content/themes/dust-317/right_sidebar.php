<div id="right_sidebar">

<?php 
	if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : 
	else : 
?>		

<a title="Subscribe to our RSS Feed" href="feed:<?php bloginfo('rss2_url'); ?>"><img id="rss-feed-img-link" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" alt="RSS" /></a>

<ul>
<li><h2><?php _e('Categories'); ?></h2><ul><?php wp_list_cats('sort_column=name&hide_empty=0&optioncount=0&hierarchical=1'); ?></ul></li>
<li><h2><?php _e('Liens'); ?></h2><ul><?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?></ul></li>
</ul>		

<?php 
	endif; 
?>

</div> <!-- End right_sidebar -->