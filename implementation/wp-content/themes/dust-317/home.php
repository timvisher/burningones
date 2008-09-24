<?php get_header(); ?>
<div id="content">
<?php
//Get the most recent post
query_posts('showposts=1'); 
if (have_posts()) : 
while (have_posts()) : 
the_post(); 
?>
<div class="postnew">

<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="cat"><?php the_time('M d, Y') ?> by <?php the_author() ?> in <?php the_category(', ') ?></p>

<div class="entry">

<?php the_content('Continue reading...'); ?>

</div> <!-- End entry -->

<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
</div> <!-- End postnew -->

<?php 
endwhile; 
else : //Only happens if there are no posts
?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php 
endif; //Stop getting the most recent post
?>

</div> <!-- End content -->

<div id="sidebar">

<?php include(TEMPLATEPATH."/right_sidebar.php");?>

<?php include(TEMPLATEPATH."/left_sidebar.php");?>

</div> <!-- End sidebar -->

<?php get_footer(); ?>
