<?php
	echo '<?xml version="1.0" encoding="ISO-8859-1" ?>';
	$template_dir = get_bloginfo('template_directory');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Burning Ones - Home</title>
<link rel="stylesheet" type="text/css" media="screen" href=<?php echo "\"$template_dir/"; ?>style.css" />
</head>
<body>
	<div id="header">
		<h1 id="titling">Burning Ones</h1>
		<img id="headerImage" src="<?php echo $template_dir; ?>/images/rotator/rotate.php" title="Burning Ones" />
	</div>
	<div id="body">
		<div id="post">
			<h2 id="postTitle">Lorem Ipsum</h2>
			<p id="postAuthor">Tim Visher</p>
			<div id="postContent">
				<p>Lorem <a href="">ipsum</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex <a href="">ea commodo consequat</a>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h3>Ipsum</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h3>Dolor</h3>
				<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></blockquote>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></blockquote></blockquote>
			</div>
			<p id="postDate">18 July @ 9:30pm</p>
			<p id="comments"><a href="">3 Comments</a></p>
		</div>
		<div id="sidebar">
			<a href="http://feeds.feedburner.com/burningonesblog" id="rssFeedLink"><img src=<?php echo "\"$template_dir/images/rss.png\""; ?> title="Burning Ones RSS Feed" /></a>
			<p id="siteSlug">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<ul id="postNav">
				<li>Previously: <a href="">Ipsum</a></li>
				<li>Next: <a href="">Dolor</a></li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<ul id="liens" class="block">
			<h2>Liens</h2>
			<li>Lorem&nbsp;<a href="">&raquo;</a></li>
			<li>Ipsum&nbsp;<a href="">&raquo;</a></li>
			<li>Dolor&nbsp;<a href="">&raquo;</a></li>
			<li>Sit&nbsp;<a href="">&raquo;</a></li>
			<li>Amet&nbsp;<a href="">&raquo;</a></li>
		</ul>
		<ul id="recently" class="block">
			<h2>Recently</h2>
			<li id="mostPopularPost">Dolor&nbsp;<a href="">&raquo;</a></li>
			<ul id="recentPosts">
				<li>Lorem&nbsp;<a href="">&raquo;</a></li>
				<li>Ipsum&nbsp;<a href="">&raquo;</a></li>
				<li>Dolor&nbsp;<a href="">&raquo;</a></li>
				<li>Sit&nbsp;<a href="">&raquo;</a></li>
				<li>Amet&nbsp;<a href="">&raquo;</a></li>
			</ul>
		</ul>
		<ul id="elsewhere" class="block">
			<ul id="delicious">
				<li>
					<script type="text/javascript" src="http://feeds.delicious.com/v2/js/stopsineman?title=%40Delicious&count=5&sort=date&extended"></script>
				</li>
			</ul>
			<ul id="twitter">
				<li>
					<div id="twitter_div">
					<h2><a href="http://twitter.com/stopsineman">@Twitter</a></h2>
					<ul id="twitter_update_list"></ul>
					</div>
				</li>
			</ul>
			<ul id="flickr">
				<li>
					<!-- Start of Flickr Badge -->
					<table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0">
						<tr>
							<td>
								<a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a>
								<table cellpadding="0" cellspacing="10" border="0" id="flickr_badge_wrapper">
									<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=5&display=latest&size=t&layout=v&source=user&user=7155116%40N04"></script>
								</table>
							</td>
						</tr>
					</table>
					<!-- End of Flickr Badge -->
				</li>
			</ul>
		</ul>
	</div>
	<p id="copyright">&copy; Burning Ones 2007-2008</p>
	<!-- Twitter Scripts after page load! -->
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/stopsineman.json?callback=twitterCallback2&amp;count=1"></script>
	<!-- End Twitter Scripts -->
</body>
</html>