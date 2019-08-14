<?php
/**
 * Template Name: Jadwal
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container pt-5 pb-5" id="content">

		<div class="row">

      <div class="col-md-4 mb-5">
          <h2 class="serif">Berikut kegiatan rutin PRII Stockholm setiap minggunya.</h2>
          <p class="sm-text mt-5">Lampirkan email anda untuk info lebih lanjut mengenai PRII Stockholm</p>
          <form class="dark simple mb-5">
            <input type="email" name="" value="" placeholder="Alamat email">
            <p> <button type="button" name="button" class="btn btn-primary text-uppercase sm-text">Kirim</button></p>
          </form>
        </div>

        <div class="col-md-5 offset-md-3">
          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'loop-templates/content', 'blank' ); ?>

          <?php endwhile; // end of the loop. ?>
        </div>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
