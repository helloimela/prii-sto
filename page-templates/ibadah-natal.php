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
		<div class="row" style="background-color:#e4e4c1;">
			<div class="col-md-12">
			  <img src="http://grii-stockholm.org/wp-content/uploads/2020/11/Web_Header_e4e4c1.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>		

	  <div class="row">
      <div class="col-md-12 cover-2">
        <div class="container">
          <h1>IBADAH</h1>
          <h1>NATAL 2020</h1>
        </div>
      </div>

      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="lead">
                Tema Natal di PRII/MRII di seluruh negara-negara Eropa adalah "Roh TUHAN ada pada-Nya".
		<br/>
		 <em>Yesaya 11:2</em>
		 <br/>
		<em>"Roh TUHAN akan ada padanya, roh hikmat dan pengertian, roh nasihat dan keperkasaan, roh pengenalan dan takut akan TUHAN;"</em>
              </p>
            </div>
            <div class="w-100"></div>

            <div class="col-md-4">
              <h6 class="paragraph-display">Pembicara</h6>
              <p class="paragraph-title">Pdt. Billy Kristanto</p>

              <h6 class="paragraph-display">Info</h6>
              <p class="paragraph-title">Christina Lia - 073 675 1107.</p>
            </div>

            <div class="col-md-4">
              <h6 class="paragraph-display">Tempat</h6>
              <p class="paragraph-title">Birkagården, Karlbergsvägen 86B <br/> <a href="https://goo.gl/maps/9d2B9WvFTJdVeTkF8" target="_blank">Peta Lokasi</a></p>

              <h6 class="paragraph-display">Waktu</h6>
              <p class="paragraph-title">Minggu, 20 Desember 2020, 10:00</p>
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
