<?php
include('admin_aroundme/conf/config.php');
include('inc/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>About - AruoundMe Project Management</title>
</head>

<body>
  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <p>
              <?php
              $query = mysqli_query($koneksi,  "SELECT text FROM subtitle where title='About'");
              $about = mysqli_fetch_array($query);
              echo $about['text'];
              ?>
            </p>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Our Team (template testimonial)======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Get to Know Us</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <?php
            $query = mysqli_query($koneksi,  "SELECT * FROM team ");
            while ($team = mysqli_fetch_array($query)) {
            ?>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="profile mt-auto">
                    <img src="admin_aroundme/app/dist/img/team/<?php echo $team['picture']; ?>" class="testimonial-img" alt="<?php echo $team['name']; ?>">
                    <h3><?php echo $team['name']; ?></h3>
                    <h4><?php echo $team['position']; ?></h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

            <?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <?php
  include "inc/footer.php";
  ?>

</body>

</html>