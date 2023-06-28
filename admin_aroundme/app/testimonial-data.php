<?php
include('../conf/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tetstimonial - Admin AroundMe Project Management</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Testimonial Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Insert Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Picture</th>
                      <th>Testimonial</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,  "SELECT * FROM testimonial ");
                    while ($testimonial = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                      <tr align="center">
                        <td width='5%'><?php echo $no; ?></td>
                        <td width='15%'><?php echo $testimonial['name']; ?></td>
                        <td width='15%'><?php echo $testimonial['position']; ?></td>
                        <td width='30%'>
                          <img width='300px' src="dist/img/testimonial/<?php echo $testimonial['picture']; ?>">
                        </td>
                        <td width='25%'><?php echo $testimonial['testimonial']; ?></td>
                        <td width='15%'>
                          <a onclick="hapus_data(<?php echo $testimonial['id'] ?>)" class="btn btn-sm btn-danger">Delete</a>
                          <a href="index.php?page=edit-testimonial&&id=<?php echo $testimonial['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Insert Testimonial</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form name="insert_testimonial" method="POST" action="crud/add/insert_testimonial.php" enctype="multipart/form-data">
            <div class="modal-body">
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="Position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                  </div>
                  <div class="form-group">
                    <label for="Picture">Picture</label>
                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="picture" name="picture" required>
                  </div>
                  <div class="form-group">
                    <label for="Testimonial">Testimonial</label>
                    <input type="text" class="form-control" id="testimonial" name="testimonial" required>
                  </div>
                </div>
                <!--card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit
                  </button>
                </div>

              </div>
              <!-- /.card -->
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Page specific script -->
  <script>
    function hapus_data(testimonial_id) {
      let text;
      if (confirm("Are you sure want to delete this?") == true) {
        window.location = ("crud/delete/delete_testimonial.php?id=" + testimonial_id);
        window.alert("Deleted! Your file has been deleted.");
      } else {}
    }
  </script>
</body>

</html>