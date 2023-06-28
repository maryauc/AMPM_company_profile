<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM gallery where id = '$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Gallery Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='POST' action='crud/update/update_gallery.php' enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-10">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" placeholder="Title" name="title" value="<?php echo $view['title']; ?>"></input>
                                <input class="form-control" placeholder="id" name="id" value="<?php echo $view['id']; ?>" hidden></input>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Picture</label>
                                <br>
                                <img width="300px" src="dist/img/gallery/<?php echo $view['picture']; ?>">
                                <br>
                                <input type="file" accept=".png, .jpg, .jpeg" name="picture" id="picture" value="<?php echo $view['picture']; ?>"></input>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn tbn-sm btn-info">Save</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
<!-- /.card -->
<!-- general form elements disabled -->