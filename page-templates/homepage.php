<?php
/**
 * Template Name: Full Width Page
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

		<div class="row">
      <div class="col-md-12 cover">
        <div class="container">
          <h1>Persekutuan</h1>
          <h1>Reformed</h1>
          <h1>Injili</h1>
          <h1>Indonesia</h1>
          <h2>di Stockholm</h2>
        </div>
      </div>

      <div class="col-md-12">
        <div class="container dark-box">
          <p class="text-uppercase">Ibadah Minggu</p>
          <h2 class="serif">17 November 2019, 14.30</h2>
          <p class="sm-text">Lampirkan email anda untuk info lebih lanjut mengenai PRII Stockholm</p>
          <form class="dark simple">
            <input type="email" name="" value="" placeholder="Alamat email">
            <p> <button type="button" name="button" class="btn btn-primary text-uppercase sm-text">Kirim</button></p>
          </form>
        </div>
        
      </div>

      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="lead">
                Persekutuan Reformed Injili Indonesia (PRII) di Stockholm adalah tempat dimana Anda dapat mengenal Kekristenan lebih dalam dan bertemu teman, saudara/i berbahasa Indonesia selama Anda tinggal di Stockholm.
              </p>

            </div>
            <div class="w-100"></div>

            <div class="col-md-4">
              <h2 class="serif">Bentuk persekutuan kami</h2>
            </div>

            <div class="col-md-4">
              <h6 class="paragraph-title">Puji-pujian</h6>
              <p class="paragraph-display">Agama Kristen adalah agama yang penuh pujipujian. Lagu-lagu yang kami nyanyikan seringkali diambil dari Kidung Reformed Injili (KRI) yang diterbitkan oleh Gereja Reformed Injili Indonesia (GRII). Kumpulan kidung Kristen ini meliputi khazanah musik gerejawi dari jaman Abad Pertengahan hingga masa kini seperti "Allah Jadi Benteng Kukuh (A Might Fortress Is Our God)", "Besarlah Allahku (How Great Thou Art)", "Jaminan Mulia (Blessed Assurance)" dan "Karena Dia Hidup (Because He Lives)".</p>

              <h6 class="paragraph-title">Saling mendoakan</h6>
              <p class="paragraph-display">Agama Kristen adalah agama yang berdoa sebagai bentuk kita berhubungan erat dengan Allah. Kita dapat berdoa secara pribadi dan bersama sebagai satu komunitas. Di dalam doa, kita mengenal Allah dan sesama lebih dalam lagi. Kita juga diubahkan dan saling menguatkan satu sama lain. Seminggu sekali kami mengkhususkan waktu untuk berdoa bersama dan mengangkat pokok-pokok doa temanteman, saudara/i kita.</p>
            </div>

            <div class="col-md-4">
              <h6 class="paragraph-title">Pendalaman alkitab</h6>
              <p class="paragraph-display">Agama Kristen adalah agama yang bertumbuh dalam pengenalan akan Allah, yang telah diwahyukan melalui Alkitab. Pengenalan (teologi) yang benar akan Allah mengubahkan setiap aspek hidup kita juga pada arah yang benar. Isi Alkitab begitu kaya. Kita tidak akan habishabisnya terpukau atas Allah kita yang begitu agung, adil dan penuh kasih karunia dan belas kasihan pada umat-Nya. Setiap pertemuan, kita mengupas topik dan ayat Alkitab tertentu, dengan pelayanan hamba Tuhan dari Gereja Reformed Injili Indonesia (sebulan sekali), dengan studi kelompok dari Katekismus Heidelberg, atau dengan menonton video khotbah dan diskusi bersama.</p>

              <h6 class="paragraph-title">Berbagi pergumulan</h6>
              <p class="paragraph-display">Agama Kristen ada bukan karena tempat, tapi orang-orangnya. Setiap kita akan mengalami kesulitan atau pergumulan dalam keluarga, kebutuhan finansial, pekerjaan, kesehatan, dan hal-hal lainnya dari waktu ke waktu. Dengan berbagi pergumulan, kita diberi kekuatan melalui teman-teman yang bisa menolong, menjenguk, berbicara dan saling mendoakan. Sebab seperti tubuh tanpa roh adalah mati, demikian jugalah iman tanpa perbuatan-perbuatan adalah mati (Yakobus 2:26).</p>
            </div>

          </div>
        </div>
      </div>
      

			<div class="col-md-12 main-quotes">

        <div class="container quote">

          <?php // endwhile; // end of the loop. 

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'quotes',
                'posts_per_page' => 5,
            );
            $arr_posts = new WP_Query( $args );

            if ( $arr_posts->have_posts() ) :

                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h5 class="quote-content">
                          <?php the_content(); ?>
                        </h5>
                        <h6 class="paragraph-title"><?php the_title(); ?></h6>
                    </div>
                    <?php
                endwhile;
            endif;

            ?>

        </div>

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
