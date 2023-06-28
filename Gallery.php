<?php
include('admin_aroundme/conf/config.php');
include('inc/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AroundMe Project Management</title>
</head>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2><span>AroundMe Project Management</span></h2>
                    <p>From <b>Passion</b> to <b>Action</b> with <b>Collaboration</b></p>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row gy-4 justify-content-center">
                    <?php
                    $query = mysqli_query($koneksi,  "SELECT * FROM gallery ");
                    while ($gallery = mysqli_fetch_array($query)) {
                    ?>


                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="admin_aroundme/app/dist/img/gallery/<?php echo $gallery['picture']; ?>" class="img-fluid" alt="<?php echo $gallery['title']; ?>">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="admin_aroundme/app/dist/img/gallery/<?php echo $gallery['picture']; ?>" title="<?php echo $gallery['title']; ?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->

                    <?php } ?>
                </div>
            </div>
        </section><!-- End Gallery Section -->
    </main><!-- End #main -->

    <?php
    include "inc/footer.php";
    ?>

</body>

</html>