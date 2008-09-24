<div id="middle_sidebar"><?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>	<ul><li><h2><?php _e('Recently'); ?></h2><ul>

<?php

						// I love Wordpress so

						query_posts('showposts=8');

					?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<li><a title="View this post" href="<?php the_permalink() ?>"><?php the_title() ?></a></li>

<?php endwhile; endif; ?>

<h2><?php _e('Del.icio.us'); ?></h2><ul>    

<script type="text/javascript" src="http://del.icio.us/feeds/js/milo317?extended;count=10"></script>

<noscript><a href="http://del.icio.us/milo317">my del.icio.us</a></noscript><br /></ul>

</ul><?php endif; ?></div>