<!-- Head -->
<?php
session_start();
if ($_SESSION['login']) {
?>

  <!DOCTYPE html>
  <html lang="en">
  <?php
  include('../conf/config.php');
  ?>

  <head>
    <title>Admin AroundMe Project Management</title>
  </head>
  <!-- /.head -->

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Header -->
      <?php
      include('inc/header.php');
      ?>

      <!-- Preloader -->
      <?php
      include('inc/preloarder.php');
      ?>

      <!-- Navbar -->
      <?php
      include('inc/navbar.php');
      ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php
      include('inc/sidebar.php');
      ?>
      <!-- /.sidebar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php
        include('inc/dashboard-header.php');
        ?>
        <!-- /.content-header -->

        <!-- Main content -->
        <?php
        if (isset($_GET['page'])) {
          if ($_GET['page'] == 'dashboard') {
            include('inc/dashboard.php');
          } else if ($_GET['page'] == 'team-data') {
            include('team-data.php');
          } else if ($_GET['page'] == 'edit-team') {
            include('crud/edit/edit_team.php');
          } else if ($_GET['page'] == 'gallery-data') {
            include('gallery-data.php');
          } else if ($_GET['page'] == 'edit-gallery') {
            include('crud/edit/edit_gallery.php');
          } else if ($_GET['page'] == 'aroundme_id-data') {
            include('aroundme-id.php');
          } else if ($_GET['page'] == 'edit-aroundme_id') {
            include('crud/edit/edit_aroundme-id.php');
          } else if ($_GET['page'] == 'aroundme_studio-data') {
            include('aroundme-studio.php');
          } else if ($_GET['page'] == 'edit-aroundme_studio') {
            include('crud/edit/edit_aroundme-studio.php');
          } else if ($_GET['page'] == 'aroundme_wedding-data') {
            include('aroundme-wedding.php');
          } else if ($_GET['page'] == 'edit-aroundme_wedding') {
            include('crud/edit/edit_aroundme-wedding.php');
          } else if ($_GET['page'] == 'client-data') {
            include('client-data.php');
          } else if ($_GET['page'] == 'edit-client') {
            include('crud/edit/edit_client.php');
          } else if ($_GET['page'] == 'testimonial-data') {
            include('testimonial-data.php');
          } else if ($_GET['page'] == 'edit-testimonial') {
            include('crud/edit/edit_testimonial.php');
          } else if ($_GET['page'] == 'service-data') {
            include('service-data.php');
          } else if ($_GET['page'] == 'edit-service') {
            include('crud/edit/edit_service.php');
          } else if ($_GET['page'] == 'subtitle-data') {
            include('subtitle-data.php');
          } else if ($_GET['page'] == 'edit-subtitle') {
            include('crud/edit/edit_subtitle.php');
          } else {
            include('not_found.php');
          }
        } else {
          include('inc/dashboard.php');
        }
        ?>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Footer -->
      <?php
      include('inc/footer.php');
      ?>
      <!-- /.footer -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


  </body>

  </html>
<?php
} else {
  echo '<script>window.location="../index.php";</script>';
}
?>