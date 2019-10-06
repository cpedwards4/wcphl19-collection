<?php

require 'stylesheets/stylesheets.php';
require 'es5/es5-block.php';

add_action('wp_head', 'create_some_function');
function create_some_function() {
	echo '<h4 style="text-align:center;">'. __FILE__ . __FUNCTION__ . __LINE__ . '</h4>';
}


add_filter( 'render_block', 'wplancpa_2019_show_block_type', 10, 2 );

function wplancpa_2019_show_block_type( $block_content, $block ) {
	// if ( true === WP_DEBUG ) {
		$block_content = "<h5 style=\"color:salmon\">{$block['blockName']}</h5><div class='wp-block' data-blockType='{$block['blockName']}'>{$block_content}</div>";
	// }
	return $block_content;
}
