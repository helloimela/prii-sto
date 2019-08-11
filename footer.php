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
							<p>Persembahan melalui SWISH</p>
							<p> +46 76 022 16 03</p>	
						</div>

						<div class="col-md-4">
							<h6>Info PRII Stockholm</h6>
							<div class="column">
								<a href="">Jadwal</a>
								<a href="">Galeri</a>
								<a href="">Mengenai Kami</a>
							</div>
							<div class="column">
								<a href="">Fondasi</a>
								<a href="">Kontak & Cabang</a>
								<a href="">Facebook</a>
							</div>
						</div>

						<div class="col-md-4">
							<h6>Info Tambahan</h6>
							<div class="column">
								<a href="">Seputar Stockholm</a>
								<a href="">KPIN</a>
								<a href="">Momentum</a>
							</div>
							<div class="column">
								<a href="">RCRS</a>
								<a href="">Reformed21</a>
								<a href="">STEMI</a>
							</div>
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

