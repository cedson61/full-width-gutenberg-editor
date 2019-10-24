<?php
/**
 * Plugin Name: Chase Gutenburg Fix
 * Plugin URI: https://github.com/cedson61
 * Description: Fix the Gutenberg editor width to full size
 * Author: Chase Edson
 * Author URI: https://github.com/cedson61
 * Version: 0.1.0
 * Text Domain: chasegutenburgfix
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Chase Gutenburg Fix
 */

/**
 * Add inline css editor width
 */
add_action('admin_head', 'chase_gutenberg_fix');

function chase_gutenberg_fix() {
  echo '<style>
    body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
		max-width: none !important;
	}
    .block-editor__container .wp-block {
        max-width: none !important;
    }
  </style>';
}
