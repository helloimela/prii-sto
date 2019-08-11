<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" >

					<div class="site-info row">

						<div class="col-md-4">
							<h4>PRII Stockholm</h4>
						</div>

						<div class="col-md-4">
							<h5>Info PRII Stockholm</h5>
							<div class="col-md-6">
								<a href="">Jadwal</a>
								<a href="">Galeri</a>
								<a href="">Mengenai Kami</a>
							</div>
							<div class="col-md-6">
								<a href="">Fondasi</a>
								<a href="">Kontak & Cabang</a>
								<a href="">Facebook</a>
							</div>
						</div>

						<div class="col-md-4">
							<h5>Info Tambahan</h5>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

