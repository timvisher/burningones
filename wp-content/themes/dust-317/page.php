<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<h2><?php the_title(); ?></h2>

<div class="entry">

<?php the_content('<p class="serif">Continue reading...</p>'); ?>



<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>



</div> <!-- End entry -->



<?php endwhile; endif; ?>



<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

</div> <!-- End post -->



<div class="commentform">

<?php comments_template(); ?>

</div> <!-- End commentform -->



</div> <!-- End content -->

<div id="sidebar">

<?php include(TEMPLATEPATH."/right_sidebar.php");?>

<?php include(TEMPLATEPATH."/left_sidebar.php");?>

</div> <!-- End sidebar -->

<?php get_footer(); ?>