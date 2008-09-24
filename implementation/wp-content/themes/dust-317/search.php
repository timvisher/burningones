<?php get_header(); ?>

<div id="content">
<?php 
	if (have_posts()) : 
?>
<h2 class="pagetitle">Search Results</h2>

<?php 
		while (have_posts()) : 
			the_post(); 
?>

<div class="post">

<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

<p class="cat"><?php the_time('M d, Y') ?> <!-- by <?php the_author() ?> --> in <?php the_category(', ') ?></p>
<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

</div> <!-- End post -->
<?php 
		endwhile; //End outputing search results
	else : //No posts
?>
<h2 class="pagetitle">No posts found. Try a different search?</h2>

<form name="searchform" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

<div class="commentform">

<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
<input type="image" src="<?php bloginfo(template_directory); ?>/images/searchBlack.png" size="5" width="14" height="14" id="searchsubmit" value="Search"  />

</form> <!-- End searchform -->

</div> <!-- End commentform -->
<?php 
	endif; 
?>
</div> <!-- End content -->

<div id="sidebar">

<?php include(TEMPLATEPATH."/right_sidebar.php");?>

<?php include(TEMPLATEPATH."/left_sidebar.php");?>

</div>

<?php get_footer(); ?>