 <?php
//Two functions below to set the read more text conditionally - the 2nd function forces the read more as sometimes it does not appear.
//Read More Text For Excerpt - Set conditionally based on Category slug
add_filter( 'excerpt_more', 'genesischild_read_more_link' );
function genesischild_read_more_link( $more )  {
	if( in_category('video') ) {//add in category
		return '... <a href="' . get_permalink() . '" class="more-link" title="View More">View More</a>';//change read more text
	}
	else {//what all the other categories get
		return '... <a href="' . get_permalink() . '" class="more-link" title="Read More">Read More</a>';
	}
}
//Force the Read More  - Set conditionally based on Category slug
add_filter( 'the_excerpt', 'themeprefix_excerpt_read_more_link' );
function themeprefix_excerpt_read_more_link( $output ) {
	global $post;
	if( in_category('video') ) {//add in category		
		return $output . ' <a href="' . get_permalink( $post->ID ) . '" class="more-link" title="View More">View More</a>';//change read more text
	}
	else {//what all the other categories get
		return $output . ' <a href="' . get_permalink( $post->ID ) . '" class="more-link" title="Read More">Read More</a>';
	}
}

?>