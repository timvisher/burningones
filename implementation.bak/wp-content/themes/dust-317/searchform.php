<div id="searchform">
<form name="searchform" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />

<a href="javascript:document.searchform.submit()"  
onclick="return val_form_this_page()">
<img src="<?php bloginfo(template_directory); ?>/images/search.png" alt="Search" 
name="sub_but" class="png" />
</a>

<!--input type="image" src="wp-content/themes/SayIt/images/searchB.png" size="5" width="14" height="14" id="searchsubmit" value="Search"  /-->
</form>
</div> <!-- End searchform -->