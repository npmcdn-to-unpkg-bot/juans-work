<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
	// load foundation
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css',false,'1.1','all');
	// load css after its been pulled in from SASS
	wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css',false,'1.1','all');
	// load Jquery
	wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/vendor/jquery-3.1.0.min.js', ' ', ' ', true);
	// load Zurb Foundation
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', 'jq', ' ', true);
	// load custom js
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', 'jquery', ' ', true);
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
// add stylesheets
// wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');
// wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css',false,'1.1','all');

// //add stylesheets
// wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array ( 'foundation' ), 6.2.3, true);
// wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js//vendor/foundation.min.js', array ( 'foundation' ), 6.2.3, true);