<?php
/**
 * The template for displaying all pages.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ckim-assignment1/Portfolio
 */

$options=get_option( 'ck_options_settings' ); 

get_header(); ?>

<!--Style for my Options Page-->
     <style>
        .site-main{
	       background-color: <?php echo $options['ck_radio_field']; ?>
        }
    </style>

    <style>
        .site-main{
	       color: <?php echo $options['ck_select_field']; ?>
        }
    </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
