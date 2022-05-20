
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php include "../inc/header.php"; ?>
<link rel="stylesheet" href="sidebar/css/style.css">
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="index.php">
                    
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                
                <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Add Admin
                  </a>
                  </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>Categories <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li ><a href="index.php?add_category">Add Categories</a></li>
                    <li><a href="index.php?view_category">View Categories</a></li>
                    
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Prdoucts <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                    <li><a href="index.php?add_product">Add Prdoucts</a></li>
                    <li><a href="index.php?view_product">View Prdoucts</a></li>
                 
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Users <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li class="active"><a href="#">Add Users</a></li>
                    <li><a href="#">View Users</a></li>
                </ul>
                <li  data-toggle="collapse" data-target="#Copoun">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>Copoun <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="Copoun">
                    <li class="active"><a href="#">Add Copoun</a></li>
                    <li><a href="#">View Copoun</a></li>

                </ul>

                <li  data-toggle="collapse" data-target="#admin">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>Admin <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="admin">
                    <li class="active"><a href="#">Add Admin</a></li>
                    <li><a href="#">View Admin</a></li>

                </ul>

            </ul>
     </div>
</div>
<div class="container float-end">
  <?php if(isset($_GET['view_category'])) include "viewCategory.php"; ?>
  <?php if(isset($_GET['update'])) include "update_category.php"; ?>
  <?php if(isset($_GET['add_category'])) include "addCategory.php"; ?>


  <?php if(isset($_GET['add_product'])) include "creatproduct.php"; ?>
  <?php if(isset($_GET['view_product'])) include "products.php"; ?>
  <?php if(isset($_GET['upadteproduct'])) include "updateproduct.php"; ?>


</div>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>