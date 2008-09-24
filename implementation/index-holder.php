<?php
	$name="Blog";
	$author="Tim Visher";
	$page_name="Burning&nbsp;Ones.com";
	require('/homepages/44/d196877028/htdocs/ssi/burningones/topRequires.ssi');
?>

<?php 
	//TODO Make this work on both local and remote
	require('/homepages/44/d196877028/htdocs/ssi/burningones/doctype.ssi');
?> 
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<?php 
			//TODO Make this work on both local and remote
			require('/homepages/44/d196877028/htdocs/ssi/burningones/meta.ssi');
		?>
		<meta http-equiv="date" content=<?php echo "\"" . date('d/m/Y', filemtime('index.php')) . "\""; ?> />
		<meta http-equiv="description" content="Two young people on a journey into the fiery heart of God." />
		<meta http-equiv="keywords" content="burning ones, Christian blog, Christian youth, tim visher, jess visher, jess biddle, Nazirites, John the Baptist, seraphim, one thing, heart of david, tabernacle of david, christian, young adults, youth" />
		<title>BurningOnes.com - <?php echo $name ?></title>
		<link rel="stylesheet" href="http://burningones.com/css/basic.css" type="text/css" /> <!-- httpRequest -->
		<?php 
			//TODO Make this work on both local and remote
			require('/homepages/44/d196877028/htdocs/ssi/burningones/favicon.ssi');
		?>
	</head>
	
	<body>
		<div id="header">
			<?php 
				require('/homepages/44/d196877028/htdocs/ssi/burningones/header.ssi');
			?>
		</div>
		<div id="container">
			<div id="main" class="column">
				<div id="crumbs"><?php breadCrumb($PATH_INFO); ?></div>
				<div id="content">
					<p><strong>We're in the process of moving to Wordpress.org.  Wish us luck!</strong></p>
				</div>
			</div>
			<div id="leftNav" class="column">
				<?php 
					require('/homepages/44/d196877028/htdocs/ssi/burningones/leftNav.ssi')
				?>
			</div>
			<div id="picsVidsAdds" class="column">
				<?php 
					require('/homepages/44/d196877028/htdocs/ssi/burningones/pva.ssi')
				?>
			</div>
		</div>
		
		<div id="footer">
			<?php 
				require('/homepages/44/d196877028/htdocs/ssi/burningones/footer.ssi')
			?>
		</div>
	</body>
	
</html>