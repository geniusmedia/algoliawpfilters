/** 
Filter to use with Algolia Wordpress plugin, enables CDN for the thumbnails 
You need to reindex after adding the code to your functions.php 
**/

function custom_post_shared_attributes( array $shared_attributes) {
	$shared_attributes['images']['thumbnail'] = str_replace( 'www.xyz.com', 'cdn.xyz.com', $shared_attributes['images']['thumbnail'] );
	return $shared_attributes;
}

add_filter( 'algolia_post_shared_attributes', 'custom_post_shared_attributes' );
add_filter( 'algolia_searchable_post_shared_attributes', 'custom_post_shared_attributes' );

