<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin Dashboard</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>ADM<span>IN</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logo" style="color:white;" href="../index.php">Public Site</a></li>
          <li><a class="logout" href="../login.php?status=logout">Logout</a></li>
        </ul>
      </div>
    </header>

<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="index.php"><img src="../image/<?php echo $admin_image ?>" class="img-circle" width="80"></a></p>
      <h5 class="centered"><?php echo $admin_name ?></h5>
      <li class="mt">
        <a class="active" href="index.php">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu">
        <a class="sub-menu" href="manage_admin.php">
          <i class="fa fa-dashboard"></i>
          <span>Manage Admins</span>
        </a>
      </li>

      <li class="sub-menu">
        <a href="manage_users.php">
          <i class="fa fa-desktop"></i>
          <span>Manage Users</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="manage_categories.php">
          <i class="fa fa-desktop"></i>
          <span>Manage categories</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="manage_comment.php">
          <i class="fa fa-desktop"></i>
          <span>Manage Comments</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="">
          <i class="fa fa-desktop"></i>
          <span>Manage Products</span>
        </a>
        <ul class="sub">
          <li><a href="show_products.php">Show Products</a></li>
          <li><a href="add_products.php">Add Products</a></li>

        </ul>
      </li>
      <li class="sub-menu">
        <a href="manage_order.php">
          <i class="fa fa-desktop"></i>
          <span>Orders</span>
        </a>
      </li>

    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>