<?php
/**
 * Plugin Name: Blocks Boilerplate
 * Description: Our first Gutenberg Blocks!
 * Version: 1.0.0
 * Author: Jesse Braddock @ KRM
 *
 * @package blocks__boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* this function name I believe is arbitrary, but I 
* generally see  people follow 
* {namespace}_{blockname}_editor_assets as a 
* naming convention
*/
function fblocks__boilerplate() {
    wp_enqueue_script(
        // the name - also generally {namespace/blockname}
        'blocks__boilerplate/hello-world',
        // where the javscript is located
        plugins_url( 'dist/build.js', __FILE__ ),
        // and dependencies WordPress needs to serve up for us
        // you must have these two for the most basic block
        array( 'wp-blocks', 'wp-element' )
    );
};

// and then, we actually have the function run when the editor loads...
add_action( 'enqueue_block_editor_assets', 'fblocks__boilerplate' );