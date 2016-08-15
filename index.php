<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ckim-assignment 1/Portfolio
 */

get_header(); ?>

    <figure class="snip1543">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wifehusband.jpg" alt="Banner" />
  <figcaption>
    <h3>Inverness McKenzie</h3>
    <p>The only skills I have the patience to learn are those that have no real application in life.</p>
  </figcaption>
  <a href="#"></a>
</figure>

<figure class="snip1543 hover">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ring.jpg" alt="Banner" />
  <figcaption>
    <h3>Alan Fresco</h3>
    <p>The real fun of living wisely is that you get to be smug about it.</p>
  </figcaption>
  <a href="#"></a>
</figure>

<figure class="snip1543">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bouquet.jpg" alt="Banner" />
  <figcaption>
    <h3>Indigo Violet</h3>
    <p>But Calvin is no kind and loving god! He's one of the old gods! He demands sacrifice! </p>
  </figcaption>
  <a href="#"></a>
</figure>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<figure class="snip1543">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/love.jpg" alt="Banner" />
  <figcaption>
    <h3>Indigo Violet</h3>
    <p>But Calvin is no kind and loving god! He's one of the old gods! He demands sacrifice! </p>
  </figcaption>
  <a href="#"></a>
</figure>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<figure class="snip1543">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/happily.jpg" alt="Banner" />
  <figcaption>
    <h3>Indigo Violet</h3>
    <p>But Calvin is no kind and loving god! He's one of the old gods! He demands sacrifice! </p>
  </figcaption>
  <a href="#"></a>
</figure>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

        <script src="js/slider.js"></script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
