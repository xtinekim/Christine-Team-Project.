<?php
/*
Plugin Name: ChristinePlugin
Plugin URI: http://phoenix.sheridanc.on.ca/~ccit3667/wp-admin/edit.php?post_type=christiness
Description: ckim-assignment2
Author: Christine Kim
Author URI: http://phoenix.sheridanc.on.ca/~ccit3667/
*/
/*
* Reference: "http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/""
*/
// Custom Post Type


//Code for Custom Widget
class christinewidget extends WP_Widget {
    public function __construct() {
    $widget_ops    = array(
    'classname'    => 'widget_postblock',
    'description'  => __( '2 posts from custom post type: events') );
    parent::__construct('show_custompost', __('Custom Post', 'events'), $widget_ops);
               }
 
               public function widget ( $args, $instance ) {
 
    ?>
<div id="widgetstyle" role="main">
    <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$wp_query = new WP_Query();
$wp_query->query('post_type=events&posts_per_page=2' . '&paged=' . $paged);
?>
 
<?php if ($wp_query->have_posts()) : ?>
 
               <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
 
                              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                              <div id="ck_widget">
                                <?php the_title();?>
                                <?php the_post_thumbnail('medium'); ?></a>
                              </div>
                  </article>
 
               <?php endwhile; ?>
<?php endif; ?>
    </div>
    <?php
    
               }
 
}
 
add_action( 'widgets_init', function(){
     register_widget( 'christinewidget' );
});


//EVENTS
function ck_custompost() {
    register_post_type( ' christine',
   
        array(
            'labels' => array(
                'name' => __( 'EVENTS' ),
                'singular_name' => __( ' christine' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => ' christine'),
        )
    );
}

add_action( 'init', 'ck_custompost' );
function ck_custom() {

// Labels for my Custom Post Type
    $labels = array(
        'name'                => _x( ' christine', 'Post Type General Name', 'ckim-assignment1' ),
        'singular_name'       => _x( ' christines', 'Post Type Singular Name', 'ckim-assignment1' ),
        'menu_name'           => __( 'christines', 'ckim-assignment1' ),
        'parent_item_colon'   => __( 'Parent  christine', 'ckim-assignment1' ),
        'all_items'           => __( 'All posttypes', 'ckim-assignment1' ),
        'view_item'           => __( 'View posttype', 'ckim-assignment1' ),
        'add_new_item'        => __( 'Add new posttype', 'ckim-assignment1' ),
        'add_new'             => __( 'Add New', 'ckim-assignment1' ),
        'edit_item'           => __( 'Edit posttype', 'ckim-assignment1' ),
        'update_item'         => __( 'Update posttype', 'ckim-assignment1' ),
        'search_items'        => __( 'Search posttype', 'ckim-assignment1' ),
        'not_found'           => __( 'Not Found', 'ckim-assignment1' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ckim-assignment1' ),
    );

// Attributes for Custom Post Type
    $args = array(
        'label'               => __( 'posttypes', 'ckim-assignment1' ),
        'description'         => __( ' christine news and media', 'ckim-assignment1' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( ' christine', $args );
}
add_action( 'init', 'ck_custom', 0 );
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', ' christine' ) );
    return $query;
}

//Shortcode
//This is the Twitter Button.
    function Twitter($atts){
        extract(shortcode_atts(
            array(
                'title' => 'Twitter',
                'button' => '',
                ), $atts 
            ));

        return
            '<a href="https://twitter.com/theweddingco" class="twitter-follow-button" data-show-count="false">Follow @theweddingco</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>'; 
    }

    add_shortcode('button1','Twitter');

?>
