<?php
include('../conf/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Subtitle - Admin AroundMe Project Management</title>
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
                <h3 class="card-title">Subtitle Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Title</th>
                      <th>Text</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,  "SELECT * FROM subtitle ");
                    while ($subtitle = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                      <tr align="center">
                        <td width='5%'><?php echo $no; ?></td>
                        <td width='25%'><?php echo $subtitle['title']; ?></td>
                        <td><?php echo $subtitle['text']; ?></td>
                        <td width='10%'><a href="index.php?page=edit-subtitle&&id=<?php echo $subtitle['id']; ?>" class="btn btn-sm btn-success">Edit</a>
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Page specific script -->
</body>

</html>