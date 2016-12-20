

<?php
if (!isset($_SESSION)) session_start();
include "../config.php";
include ROOT."/include/function.php";
include ROOT."/class/database.class.php";
include ROOT."/class/product.class.php";
include ROOT."/class/image.class.php";
include ROOT."/class/category.class.php";
include ROOT."/class/user.class.php";
include ROOT."/class/order.class.php";
include ROOT."/class/order-detail.class.php";
include ROOT."/class/message.class.php";
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Binary Admin</title>

      <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo SERVER_NAME ?>/admin/assets/css/bootstrap.css" rel="stylesheet" />
      <!-- FONTAWESOME STYLES-->
    <link href="<?php echo SERVER_NAME ?>/admin/assets/css/font-awesome.css" rel="stylesheet" />
      <!-- MORRIS CHART STYLES-->
    <link href="<?php echo SERVER_NAME ?>/admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
      <!-- TABLE STYLES-->
    <link href="<?php echo SERVER_NAME ?>/admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
      <!-- CUSTOM STYLES-->
    <link href="<?php echo SERVER_NAME ?>/admin/assets/css/custom.css" rel="stylesheet" />
      <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">

        <?php include ROOT.'/admin/include/header.php';?>
        <!-- /. NAV TOP  -->

        <?php include ROOT.'/admin/include/menu.php'; ?>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
          <?php $mod = getValue('mod');
            switch ($mod) {
              case '':
                include ROOT.'/admin/module/dashboard/index.php';
                break;

              case 'product':
                include ROOT.'/admin/module/product/index.php';
                break;

              case 'addProduct':
                include ROOT.'/admin/module/product/add-product.php';
                break;

              case 'editProduct':
                include ROOT.'/admin/module/product/edit-product.php';
                break;

              case 'removeProduct':
                include ROOT.'/admin/module/product/remove-product.php';
                break;

              case 'category':
                include ROOT.'/admin/module/category/index.php';
                break;

              case 'addCategory':
                include ROOT.'/admin/module/category/add-category.php';
                break;

              case 'editCategory':
                include ROOT.'/admin/module/category/edit-category.php';
                break;

              case 'removeCategory':
                include ROOT.'/admin/module/category/remove-category.php';
                break;

              case 'order':
                include ROOT.'/admin/module/order/index.php';
                break;

              case 'user':
                include ROOT.'/admin/module/user/index.php';
                break;

              default:
                # code...
                break;
            }
          ?>
        </div>
         <!-- /. PAGE WRAPPER  -->

        </div>
     <!-- /. WRAPPER  -->


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
      <!-- JQUERY SCRIPTS -->
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/bootstrap.min.js"></script>
      <!-- METISMENU SCRIPTS -->
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/jquery.metisMenu.js"></script>
      <!-- MORRIS CHART SCRIPTS -->
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/morris/morris.js"></script>
      <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo SERVER_NAME ?>/admin/assets/js/custom.js"></script>



</body>
</html>
