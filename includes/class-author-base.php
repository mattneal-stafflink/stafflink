<?php 

/**
 * 
 * Need to make a variable that can be set in the options
 * somewhere and get that, otherwise use this.
 */
class stafflink_change_author_base {

    function __construct() {

        function change_author_base() {

            $base = 'meet-the-team';

            global $wp_rewrite;
            $wp_rewrite->author_base = 'meet-the-team';
            $wp_rewrite->author_structure = $base . '/%author%/';
        }
        add_action( 'init', 'change_author_base', 99 );
        
    }
}

$stafflink_author_base = new stafflink_change_author_base(); 