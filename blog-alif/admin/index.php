<?php 
session_start();
if (!$_SESSION['login']) {
    echo "<script type='text/javascript'>
    alert('Maaf anda harus login terlebih dahulu !');
    window.location='../login.php'</script>";
} else {
  include('../config/database.php');
  $user = new Database();
  $user = mysqli_query($user->koneksi,
    "SELECT * FROM users WHERE password='$_SESSION[login]'");
  // var_dump($_SESSION['login']);
  $user = mysqli_fetch_array($user);
 ?>
  <!-- Header -->
  <?php include('../layouts/includes/head.php'); ?>
  <!-- End Header -->

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <!-- Navbar  -->
  <?php include('../layouts/includes/navbar.php'); ?>
  <!-- End Navbar -->
    <div class="app-body">
      <!-- Sidebar -->
      <?php include('../layouts/includes/sidebar.php'); ?>
      <!-- End Sidebar -->

      <!-- Main Conten -->
      <main class="main">
      </main>
      <!-- End Main Conten -->
      
    </div>
    <?php include('../layouts/includes/footer.php'); ?>
    <!-- CoreUI and necessary plugins-->
    <!-- Script -->
    <?php include('../layouts/includes/script.php'); ?>
    <!-- End Script -->
  </body>
</html>
<?php } ?>