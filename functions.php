<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



function enable_extended_upload ( $mime_types =array() ) {
 
   // The MIME types listed here will be allowed in the media library.
   // You can add as many MIME types as you want.
   $mime_types['gz']  = 'application/x-gzip';
   $mime_types['eps']  = 'images/eps';
   $mime_types['zip']  = 'application/zip';
   $mime_types['rtf'] = 'application/rtf';
   $mime_types['ppt'] = 'application/mspowerpoint';
   $mime_types['ps'] = 'application/postscript';
   $mime_types['flv'] = 'video/x-flv';
 
   // If you want to forbid specific file types which are otherwise allowed,
   // specify them here.  You can add as many as possible.
   unset( $mime_types['exe'] );
   unset( $mime_types['bin'] );
 
   return $mime_types;
}
 
add_filter('upload_mimes', 'enable_extended_upload');


?>