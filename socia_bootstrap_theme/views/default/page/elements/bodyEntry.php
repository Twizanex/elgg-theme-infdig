<?php
/**
 * Elgg custom index layout
 * 
 * This is just a helper view to make it easier to use Elgg's
 * page-rendering helper functions like elgg_view_page.
 */

	if (elgg_get_context() == 'login'){
		echo elgg_view_form('login');
	}elseif(elgg_get_context() == 'register'){
		echo elgg_view_form('register');
	}
 
?>
 