<?php
/**
 * Template Name: Mengenai kami
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

	<div class="container pt-5" id="content">

		<div class="row">

      <div class="col-md-6">
        <p class="lead">
        Deskripsi mengenai kota Stockholm secara garis besar. Bagaimana keadaan masyarakat di Stockholm dan situasi kekristenan yang mendorong untuk diadakannya PRII Stockholm.
        </p>
      </div>
      <div class="w-100"></div>

      <div class="col-md-4">
        <h2 class="serif">Panggilan hamba Tuhan dan pengurus awal</h2>
      </div>

      <div class="col-md-4">
        <h6 class="paragraph-title">NAMA HAMBA TUHAN</h6>
        <p class="paragraph-display">Deskripsi dari hamba Tuhan yang mengawali PRII Stockholm. Apa yang dilihat dari kota Stockholm dan masyarakatnya. Hubungannya dengan warga Indonesia yang berimigrasi atau berkerja di Stockholm. Mengapa butuh PRII?</p>
      </div>

      <div class="col-md-4">
        <h6 class="paragraph-title">NAMA PENGURUS</h6>
        <p class="paragraph-display">Deskripsi dari pengurus awal PRII Stockholm. Apa yang dilihat dari kota Stockholm dan masyarakatnya. Hubungannya dengan warga Indonesia yang berimigrasi atau berkerja di Stockholm. Mengapa butuh PRII?</p>
      </div>

      <div class="col-md-4 mt-5">
        <h2 class="serif">Pelayanan PRII sekarang bagi mahasiswa dan pekerja dari Indonesia?</h2>
      </div>

      <div class="col-md-8">
        <p class="lead serif">
        “Ungkapan atau harapan Pdt. Dr. Stephen Tong untuk PRII Stockholm. Chocolate cheesecake jelly-o cotton candy chupa chups. Biscuit macaroon sesame snaps chocolate bar donut. Sugar plum tart biscuit candy canes caramels toffee oat cake dragée sesame snaps. Bear claw lemon drops gummi bears bear claw.”
        </p>
      </div>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
