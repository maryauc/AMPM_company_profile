<?php
include('../../conf/config.php');
?>

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary">
        <div class="inner">
            <?php
            $query = mysqli_query($koneksi, "SELECT count(id) AS gallery_item  FROM gallery");
            $view = mysqli_fetch_array($query);
            ?>
            <h3><?php echo $view['gallery_item']; ?></h3>
            <h4>Main Gallery</h4>
        </div>
        <div class="icon">
            <i class="fas fa-image nav-icon"></i>
        </div>
        <a href="index.php?page=gallery-data" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <?php
            $query = mysqli_query($koneksi, "SELECT count(id) AS gallery_item  FROM aroundme_id");
            $view = mysqli_fetch_array($query);
            ?>
            <h3><?php echo $view['gallery_item']; ?></h3>
            <h4>Aroundme ID</h4>
        </div>
        <div class="icon">
            <i class="fas fa-camera-retro nav-icon"></i>
        </div>
        <a href="index.php?page=aroundme_id-data" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <?php
            $query = mysqli_query($koneksi, "SELECT count(id) AS gallery_item  FROM aroundme_studio");
            $view = mysqli_fetch_array($query);
            ?>
            <h3><?php echo $view['gallery_item']; ?></h3>
            <h4>Aroundme Studio</h4>
        </div>
        <div class="icon">
            <i class="nav-icon fas  fa-camera"></i>
        </div>
        <a href="index.php?page=aroundme_studio-data" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <?php
            $query = mysqli_query($koneksi, "SELECT count(id) AS gallery_item  FROM aroundme_wedding");
            $view = mysqli_fetch_array($query);
            ?>
            <h3><?php echo $view['gallery_item']; ?></h3>
            <h4>Aroundme Wedding</h4>
        </div>
        <div class="icon">
            <i class="fas fa-heart nav-icon"></i>
        </div>
        <a href="index.php?page=aroundme_wedding-data" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->