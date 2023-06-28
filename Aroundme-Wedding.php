<?php
include('admin_aroundme/conf/config.php');
include('inc/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aroundme Wedding - AroundMe Project Management</title>
</head>

<body>

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>AroundMe Wedding</h2>
                        <p>
                            <?php
                            $query = mysqli_query($koneksi,  "SELECT text FROM subtitle where title='Gallery - AroundMe Wedding'");
                            $wedding = mysqli_fetch_array($query);
                            echo $wedding['text'];
                            ?>
                        </p>
                        <a class="cta-btn" href="https://linktr.ee/aroundmewd" target="_blank">For More Information</a>
                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,  "SELECT * FROM aroundme_wedding ");
                    while ($aroundme_wedding = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="admin_aroundme/app/dist/img/aroundme_wedding/<?php echo $aroundme_wedding['picture']; ?>" class="img-fluid" alt="<?php echo $aroundme_wedding['title']; ?>">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="admin_aroundme/app/dist/img/aroundme_wedding/<?php echo $aroundme_wedding['picture']; ?>" title="<?php echo $aroundme_wedding['title']; ?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->
                    <?php } ?>
                </div>

            </div>
        </section>
    </main>

    <?php
    include "inc/footer.php";
    ?>

</body>

</html>