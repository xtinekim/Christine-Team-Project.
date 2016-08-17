<?php
/*
Plugin Name: ckim-assignment1
Plugin URI: http://phoenix.sheridanc.on.ca/
Author: Christine Kim
Author URI: http://phoenix.sheridanc.on.ca/~ccit3667
Description: Assignment 1- Wordpress Plugin
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Reference from www.lynda.com
*/

function my_postplugin() {
    $args = array(
      'public' => true,
      'label'  => 'Events'
    );
    register_post_type( 'Events', $args );
}
add_action( 'init', 'my_postplugin' );
                </code></pre>
            </article><!-- .movie -->
            <article id="movie-0303" class="movie">
                <h3 class="movie-title">3.3 - Building out an advanced Custom Post Type</h3>
                <h4>In plugins/posttypes.php:</h4>
                <pre><code class="language-php">
function my_postplugin() {
    
    $labels = array(
        'name'               => 'Eventss',
        'singular_name'      => 'Events',
        'menu_name'          => 'Eventss',
        'name_admin_bar'     => 'Events',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Events',
        'new_item'           => 'New Events',
        'edit_item'          => 'Edit Events',
        'view_item'          => 'View Events',
        'all_items'          => 'All Eventss',
        'search_items'       => 'Search Eventss',
        'parent_item_colon'  => 'Parent Eventss:',
        'not_found'          => 'No Eventss found.',
        'not_found_in_trash' => 'No Eventss found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Eventss' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'Events', $args );
}
add_action( 'init', 'my_postplugin' );