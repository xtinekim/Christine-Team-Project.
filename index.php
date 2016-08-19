<?php
/**
 * The main template file for index.php
 * The first page of WordPress
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Reference: Code Pen
 *
 * @package ckim-assignment1/Portfolio
 */

get_header(); ?>

<!--Slider Image- Reference Code Pen-->
   <div class="workplis">

<figure class="snip1543 hover">

<!--First Image-->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/huswife.jpg" alt="Banner" />
  <figcaption>
    <h3>352 HAPPY CLIENTS</h3>
    <p>We provide the best available service to all our clients through connection, discussing, planning, creating, and celebrating!</p>
  </figcaption>
  <a href="#"></a>
</figure>

<!--Second Image-->
<figure class="snip1543">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/happily.jpg" alt="Banner" />
  <figcaption>
    <h3>50% SAVINGS ON AVERAGE FROM COMPETITORS</h3>
    <p>We strive to offer our clients an eloquent quality, seamless service, and peace of mind while celebrating their special day!</p>
  </figcaption>
  <a href="#"></a>
</figure>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

        <script src="js/slider.js"></script>
       </div> 

<!--3D CSS Carousel- Reference Code Pen-->
<div id="wrapper">
    <div id="image">
    <!--Image 1-->
      <div class="image i1"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/cinematography.png"></div>
    <!--Image 1-->
      <div class="image i2"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/photography.png"></div>
    <!--Image 2-->
      <div class="image i3"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/event.png"></div>
    <!--Image 3-->
      <div class="image i4"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/dj.png"></div>
    <!--Image 4-->
      <div class="image i5"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/car.png"></div>
    <!--Image 5-->
      <div class="image i6"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/travel.png"></div>
    <!--Image 6-->
      <div class="image i7"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/florist.png"></div>
    <!--Image 7-->
      <div class="image i8"><img src="http://phoenix.sheridanc.on.ca/~ccit3667/wp-content/uploads/2016/08/more.png"></div>
    </div>
  </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

	

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
