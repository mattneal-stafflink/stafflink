<?php

class stafflink_delete_property_media {

    function __construct() {

        function delete_all_attached_media( $post_id ) {

            $property_types = ['property', 'rental', 'commercial', 'land'];
        
            if(  in_array( get_post_type($post_id), $property_types ) ) {

                $attachments = get_attached_media( '', $post_id );
        
                foreach ($attachments as $attachment) {

                    wp_delete_attachment( $attachment->ID, 'true' );
                
                }
            }

        }
        add_action( 'before_delete_post', 'delete_all_attached_media' );

    }

}

$delete_property_media_on_upload = new stafflink_delete_property_media();