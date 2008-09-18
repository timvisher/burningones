<?php get_header(); ?>

<?php include(TEMPLATEPATH."/right_sidebar.php");?>

<?php include(TEMPLATEPATH."/left_sidebar.php");?>

<div id="content">

<?php 
	if (have_posts()) : 
		while (have_posts()) : 
			the_post(); 
?>

<div class="post<?php if(is_home() && $post==$posts[0] && !is_paged()) echo '_firstpost';?>" id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<p class="cat">

<?php the_time('M d, Y') ?> <!-- by <?php the_author() ?> --> in <?php the_category(', ') ?>

</p>





<div class="entry">

<?php the_content('Continue reading...'); ?>

</div>



<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

</div>

<br />

<?php endwhile; ?>



<div class="navigation">

<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></div>

</div>



<?php else : ?>



<h2 class="center">Not Found</h2>

<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php include (TEMPLATEPATH . "/searchform.php"); ?>



<?php endif; ?>

</div>

<?php get_footer(); ?>

