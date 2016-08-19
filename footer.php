<?php
/**
 * The template for displaying the footer.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ckim-assignment1/Portfolio
 */

$options=get_option( 'ck_options_settings' ); 

?>

	</div><!-- #content -->

	<!-- This is the style for my options  -->
     <style>
        #colophon .site-info{
	       background-color: <?php echo $options['ck_radio_field']; ?>
        }
    </style>

    <style>
        #colophon .site-info{
	       color: <?php echo $options['ck_select_field']; ?>
        }
    </style>

<?php if(! is_active_sidebar('sidebar-1')){
	return;
}
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
 



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
