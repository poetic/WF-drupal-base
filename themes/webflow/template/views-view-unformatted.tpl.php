<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<?php
	for($i = 0; $i < sizeof($rows); $i++) {
		// dpm($rows[$i]);
		if($i == 0) {
			print '<div class="w-row blog-articles">';
			print $rows[$i];
		}elseif($i%3 == 0) {
			print '</div>';
			print '<div class="w-row blog-articles">';
			print $rows[$i];
		}else {
			print $rows[$i];
		}
	}


?>