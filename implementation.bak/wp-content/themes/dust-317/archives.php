<?php

/*

Template Name: Archives

*/

?>

<?php get_header(); ?>

<div id="content">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h2>Archives by Month:</h2>

<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>

<h2>Archives by Subject:</h2>

<ul>

<?php wp_list_cats(); ?>

</ul>

</div> <!-- End content -->

<div id="sidebar">

<?php include(TEMPLATEPATH."/right_sidebar.php");?>

<?php include(TEMPLATEPATH."/left_sidebar.php");?>

</div> <!-- End sidebar -->

<?php get_footer(); ?>

