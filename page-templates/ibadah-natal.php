<?php
/**
 * Template Name: Ibadah Natal
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

	<div class="container-fluid" id="content">
	  <div class="col-md-12">
		  <img src="http://grii-stockholm.org/wp-content/uploads/2019/11/natal2019.png" class="img-fluid" alt="Responsive image">
	  </div>
	  <div class="row">
      <div class="col-md-12 cover-2">
        <div class="container">
          <h1>IBADAH</h1>
          <h1>NATAL 2019</h1>
        </div>
      </div>

      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="lead">
                Tema Natal di PRII/MRII di seluruh negara-negara Eropa adalah "The Condescension of God", membahas bagaimana Allah merendahkan diri menjadi manusia.
              </p>
              <p class="lead">
                Rangkaian acara Natal akan dimulai dengan makan siang dan dilanjutkan dengan ibadah Natal. Saudara/saudari diundang hadir dan mengajak teman dan kerabatnya. Bagi saudara/saudari yang ingin berbagian, dapat mengisi form ini.
              </p>
            </div>
            <div class="w-100"></div>

            <div class="col-md-4">
              <h6 class="paragraph-display">Pembicara</h6>
              <p class="paragraph-title">Vic. Jack Kawira</p>

              <h6 class="paragraph-display">Info</h6>
              <p class="paragraph-title">Christina Lia - 073 675 1107.</p>
            </div>

            <div class="col-md-4">
              <h6 class="paragraph-display">Tempat</h6>
              <p class="paragraph-title">Birkagården, Karlbergsvägen 86B</p>

              <h6 class="paragraph-display">Waktu</h6>
              <p class="paragraph-title">Minggu, 1 Desember 2019, 13:30</p>
            </div>

          </div>
        </div>
      </div>
      

			<div class="col-md-12 main-quotes">

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
