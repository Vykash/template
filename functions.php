<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'qusq', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'qusq' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
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
function blankslate_widgets_init(){
    register_sidebar( array (
    'name' => __( 'Copyright', 'qusq' ),
    'id' => 'copyright',
    'before_widget' => '<span  id="%1$s" class="copyright %2$s">',
    'after_widget' => "</span>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array (
    'name' => __( 'Sidebar blog', 'qusq' ),
    'id' => 'blog-area',
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






function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolios' ),
        'singular_name' => __( 'Portfolio' )
      ),
      'public' => true,
      'taxonomies'  => array( 'category' ),
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', ),
    )
  );
}
add_action( 'init', 'create_post_type' );

/**
 * Register a private 'Genre' taxonomy for post type 'book'.
 *
 * @see register_post_type() for registering post types.
 */
function register_portfolio_cat() {
    $args = array(
        'label'        => __( 'Category portfolio', 'qusq' ),
        'public'       => true,
        'hierarchical' => true
    );
     
    register_taxonomy( 'portfolio_cat', 'portfolio', $args );
}
add_action( 'init', 'register_portfolio_cat');


remove_filter('the_content', 'wpautop');
add_filter('the_content', 'wpautop', 12);

add_shortcode('container','container');

function container($parametro, $contenuto){
    
    $apri = '<div class="container">';
    $chiudi = '</div>';
    
    $output = $apri.do_shortcode($contenuto).$chiudi;
    return $output;
}

add_shortcode('col','col');

function col($atts, $contenuto){
    if(isset($atts['apri']) && !empty($atts['apri'])){
        if($atts['apri'] == 'si'){
            $apri = '<div class="row">';
        }else{
            $apri = '';
        }
    }
    if(isset($atts['chiudi']) && !empty($atts['chiudi'])){
        if($atts['chiudi'] == 'si'){
            $chiudi = '</div>';
        }else{
            $chiudi = '';
        }
    }
    if(isset($atts['col']) && !empty($atts['col'])){
        $colonna = $atts['col'];
    }else{
        $colonna = '12';
    }
    
    $contenuto= '<div class="col-sm-'.$colonna.'">'.do_shortcode(wpautop(trim($contenuto))).'</div>';
    
    $output = $apri.$contenuto.$chiudi;
    return $output;
}
