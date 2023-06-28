<?php
include('admin_aroundme/conf/config.php');
include('inc/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clients and Testimonials - AroundMe Project Management</title>
</head>

<body>
    <main id="main" data-aos="fade" data-aos-delay="1500">
        <!-- ======= Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Clients and Testimonials</h2>
                        <p>
                            <?php
                            $query = mysqli_query($koneksi,  "SELECT text FROM subtitle where title='Clients and Testimonials'");
                            $client_testi = mysqli_fetch_array($query);
                            echo $client_testi['text'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= Gallery Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-header">
                    <h2>Clients</h2>
                    <p>Our Clients and Brands</p>
                </div>
            </div>
        </section>

        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row gy-4 justify-content-center">

                    <?php
                    $query = mysqli_query($koneksi,  "SELECT * FROM client");
                    while ($client = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="gallery-item h-100">
                                <img src="admin_aroundme/app/dist/img/client/<?php echo $client['picture']; ?>" class="img-fluid" alt="<?php echo $client['name']; ?>">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->
                    <?php } ?>

                </div>
            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>What they are saying</p>
                </div>

                <div class="slides-3 swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $query = mysqli_query($koneksi,  "SELECT * FROM testimonial ");
                        while ($testimonial = mysqli_fetch_array($query)) {
                        ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <?php echo $testimonial['testimonial']; ?>
                                    </p>
                                    <div class="profile mt-auto">
                                        <img src="admin_aroundme/app/dist/img/testimonial/<?php echo $testimonial['picture']; ?>" class="testimonial-img" alt="<?php echo $testimonial['name']; ?>">
                                        <h3><?php echo $testimonial['name']; ?></h3>
                                        <h4><?php echo $testimonial['position']; ?></h4>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        <?php } ?>
                    </div>
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