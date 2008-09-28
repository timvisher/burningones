<?php get_header(); ?>

	<div id="post">
		<?php if (have_posts()) : the_post(); ?>
		<h2 id="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p id="postAuthor"><?php the_author(); ?></p>
		<div id="postContent">
			<?php the_content(); ?>
		</div>
		<p id="postErrata"><?php the_time('j F @ g:ia'); ?> - <a href=""><?php comments_popup_link('0 Comments', '1 Comment', '% Comments', '' ,'Comments Off'); ?></a></p>
		<?php else : ?>
		<h2>No Posts Here&hellip;</h2>
		<p>We're working on a better way to say this&hellip; ;)</p>
		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>