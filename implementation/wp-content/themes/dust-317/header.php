<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); if (function_exists('is_tag') and is_tag()) { ?>Tag Archive for <?php echo $tag; } if (is_archive()) { ?> archive<?php } elseif (is_search()) { ?> Search for <?php echo wp_specialchars($s,1); } if ( !(is_404()) && (is_search()) or (is_single()) or (is_page()) or (function_exists('is_tag') and is_tag()) or (is_archive()) ) { ?> | <?php } ?> <?php bloginfo('name'); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/favicon.ico"/>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>"/>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

<script src="<?php bloginfo('template_directory'); ?>/js/addEvent.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/sweetTitles.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sweetTitles.css" media="screen,projection"/>

<?php wp_head(); ?>

</head>

<body>

<div id="header">

<h1><a title="Get back home.." href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

<img id="headerimage" src="<?php bloginfo('stylesheet_directory'); ?>/images/rotator/rotate.php" width="100%" alt="header image"/>

<div id="nav">

<li class="page_item"><a title="Get back home.." href="<?php echo get_settings('home'); ?>">Home</a></li><?php wp_list_pages('exclude=&depth=1&sort_column=ID&title_li='); ?>

</div> <!-- End nav -->

</div> <!-- End header -->

