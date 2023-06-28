<?php
include('inc/header.php');
include('admin_aroundme/conf/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Services - AroundMe Project Management</title>
</head>

<body>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Services</h2>
            <p>
              <?php
              $query = mysqli_query($koneksi,  "SELECT text FROM subtitle where title='Services'");
              $services = mysqli_fetch_array($query);
              echo $services['text'];
              ?>
            </p>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row gy-4">

          <!-- AroundMe ID -->
          <div class="col-xl-4 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-camera-reels-fill"></i>
              <h4><a href="Aroundme-ID.php" class="stretched-link">AroundMe ID</a></h4>
              <p>
                <?php
                $query = mysqli_query($koneksi,  "SELECT text FROM services where services='AroundMe ID'");
                $ID = mysqli_fetch_array($query);
                echo $ID['text'];
                ?>
              </p>
            </div>
          </div><!-- End Service Item -->

          <!-- AroundMe Studio -->
          <div class="col-xl-4 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-camera-fill"></i>
              <h4><a href="Aroundme-Studio.php" class="stretched-link">AroundMe Studio</a></h4>
              <p>
                <?php
                $query = mysqli_query($koneksi,  "SELECT text FROM services where services='AroundMe Studio'");
                $studio = mysqli_fetch_array($query);
                echo $studio['text'];
                ?>
              </p>
            </div>
          </div><!-- End Service Item -->

          <!-- AroundMe Wedding -->
          <div class="col-xl-4 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-hearts"></i>
              <h4><a href="Aroundme-Wsedding.php" class="stretched-link">Aroundme Wedding</a></h4>
              <p>
                <?php
                $query = mysqli_query($koneksi,  "SELECT text FROM services where services='AroundMe Wedding'");
                $wedding = mysqli_fetch_array($query);
                echo $wedding['text'];
                ?>
              </p>
            </div>
          </div><!-- End Service Item -->

        </div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <?php
  include "inc/footer.php";
  ?>

</body>

</html>