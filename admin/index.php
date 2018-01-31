<!DOCTYPE html>
<html>
  <?php include_once'widgets/head.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php
  //header
  $task = "id";
  if (isset($_GET["task"])) {
    # code...
    $task= $_GET["task"];
  }
  if ($task=="id") {
    # code...
    include_once'controllers/c_admin_dashboard.php';
    $controllers = new c_admin_dashboard();
    $controllers->admin_dashboard();
  }elseif ($task =="product") {
    include_once'controllers/c_admin_product.php';
    $controllers= new c_admin_product();
    $controllers->admin_product();
    # code...
  }elseif ($task=="addproduct") {
    # code...
    include_once'controllers/c_admin_product.php';
    $controllers= new c_admin_product();
    $controllers->admin_add_product();
  }
  ?>
</div>
<!-- ./wrapper -->
  <?php include_once'widgets/script.php';?>
</body>
</html>
