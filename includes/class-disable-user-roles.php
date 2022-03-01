<?php

// Stop Authors from accessing the admin dashboard unless you are an admin.

class stafflink_disable_user_roles {

    function __construct() {

        function prevent_author_access() {
            if( current_user_can( 'author' ) && is_admin() )  {

                wp_safe_redirect( get_bloginfo( 'url' ) );

            }
        }
        add_action( 'admin_init', 'prevent_author_access' );

        function remove_admin_bar() {
            if (!current_user_can('administrator') && !is_admin()) {
                show_admin_bar(false);
            }
        }
        add_action('after_setup_theme', 'remove_admin_bar');
    }
}

$disable_user_roles = new stafflink_disable_user_roles();