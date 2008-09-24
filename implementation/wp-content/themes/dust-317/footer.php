<div id="footer">

<div id="footerleft">

<div id="recentPosts">

<h2><?php _e('Recently'); ?></h2>
<?php	
//Get 5 Recent Posts
query_posts('showposts=5'); 
if (have_posts()) : 
while (have_posts()) : 
the_post();
?>
<div class="postnew">

<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<p class="cat"><?php the_time('M d, Y') ?> by <?php the_author() ?> in <?php the_category(', ') ?></p>

</div> <!-- End Recent postnew -->
<?php 
endwhile; 
endif; //Stop getting 5 Recent Posts
?>

</div> <!-- End recentPosts -->

<div id="recentComents">

</div> <!-- End recentComments -->

</div> <!-- End footerleft -->

<div id="footerright">

<div id="twitter_div">
<h2 class="twitter-title"><a href="http://twitter.com/stopsineman" title="Tim's Twitter Page.">Twitter Updates</a></h2>
<ul id="twitter_update_list"></ul>
</div> <!-- End twitter_div -->
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/stopsineman.json?callback=twitterCallback2&count=5"></script>

</div> <!-- End footerright -->

<div id="kudos">

<ul>
<li>Created by <a title="The support page for your theme." href="http://milo.peety-passion.com">milo</a><a title="Custom themes" href="http://insomnia.peety-passion.com">IIIIVII</a></li>
<li><a href="http://wordpress.org/">WordPress</a></li>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
<li><?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.</li>
</ul>

</div> <!-- End kudos -->

</div> <!-- End footer -->

<?php /* "Mumbling around" */ ?>

<?php wp_footer(); ?>

</body>

</html>

