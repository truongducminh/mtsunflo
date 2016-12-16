<?php
	if (!isset($_SESSION)) session_start();
  include "config.php";
  include ROOT."/include/function.php";
  include ROOT."/class/database.class.php";
  include ROOT."/class/product.class.php";
  include ROOT."/class/user.class.php";
  include ROOT."/class/order.class.php";
  include ROOT."/class/order-detail.class.php";
  include ROOT."/class/message.class.php";
  $db = new product();
	$dbUser = new User();
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phát Tài Phát Tộc</title>
<link rel="icon" href="<?php echo SERVER_NAME ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo SERVER_NAME ?>/favicon.ico" type="image/x-icon" />


<!--CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/bootstrap/css/bootstrap.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/bootstrap/css/bootstrap-responsive.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/media/mt.lightbox.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/media/mt.thumbscroller.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/media/mt.zoom.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/colorstyle/colorstyle.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/smartmenu/css/mt.accordion.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/smartmenu/css/mt.dropdown.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/smartmenu/css/mt.tree.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/productslist/productslist.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/backtop/css/backtop.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/drillmenu/css/drillmenu.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/fancybox/jquery.fancybox-1.3.4.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/styles-responsive.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/mtslideshow/nivo-slider.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/mtslideshow/themes/default/default.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/print.css" media="print" />
<link media="all" href="<?php echo SERVER_NAME ?>/css/styles-red.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/colorstyle/colorstyle.css" media="all" >
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/contact.css" media="all" >
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/cart.css" media="all" >
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/slider.css" media="all" >
<link rel="stylesheet" type="text/css" href="<?php echo SERVER_NAME ?>/css/log.css" media="all" >

<!--JAVASCRIPT-->
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/prototype/prototype.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/lib/ccard.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/lib/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/prototype/validation.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/varien/js.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/varien/form.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/varien/menu.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.min.1.7.1.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/media/mt.lightbox.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/media/mt.thumbscroller.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/media/mt.zoom.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.megamenu.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.mt_accordionmenu.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.script.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/magenthemes/mt_sunflo/js/jquery.accordion.js"></script>
<script type="text/javascript" src="<?php echo SERVER_NAME ?>/js/cart.js"></script>

</head>




<body class=" cms-index-index cms-home cms-home">
<div class="wrapper">
  <div class="page">
    <!-- Header -->
    <?php include ROOT.'/include/header.php';?>

    <!-- Menu -->
    <?php include ROOT.'/include/menu.php'; ?>

    <!-- Banner -->
    <?php include ROOT.'/include/banner.php'; ?>

    <!--Main-->
    <div class="main-container col1-layout">
      <div class="container">
      <div class="main container">
        <div class="col-main">

          <?php
          $mod = getValue("mod");
          switch ($mod) {
            case "":
							include ROOT.'/module/product/top-product.php';
              include ROOT.'/module/product/home-view.php';
							break;

            case "product":
              include ROOT.'/module/product/index.php';
              break;

            case "info":
              include ROOT.'/module/info/index.php';
              break;

            case "contact":
              include ROOT.'/module/contact/index.php';
              break;

						case "sendMessage":
							include ROOT.'/module/contact/message-execute.php';
							break;

            case "detail":
              include ROOT.'/module/product/detail.php';
              break;

            case "cart":
              include ROOT.'/module/cart/index.php';
              break;

						case 'orderExecute':
							include ROOT.'/module/cart/order-execute.php';
							break;

            case "login":
              include ROOT.'/module/user/login.php';
              break;

						case 'loginExecute':
							include ROOT.'/module/user/login-execute.php';
							break;

						case "profile":
              include ROOT.'/module/user/profile.php';
              break;

						case "logout":
              include ROOT.'/module/user/logout.php';
              break;

						case 'register':
							include ROOT.'/module/user/register.php';
							break;

						case 'registerExecute':
							include ROOT.'/module/user/register-execute.php';
							break;

						case 'search':
							include ROOT.'/module/user/index.php';
							break;

            default:
							break;
          }

          ?>
        </div>
      </div>
    </div>

    <!--footer-->
    <?php include ROOT.'/include/footer.php'; ?>
  </div>
</div>
</body>
</html>
