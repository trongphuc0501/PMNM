<?php
session_start();
//session_destroy();
//unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }

    #searchBoxContainer {
      display: none;
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #fff;
      padding: 10px;
      z-index: 10000;
    }
    .table,
    tr,
    td,
    th {
      border: 2px solid red;
      padding: 10px;
      text-align: center;
    }
  </style>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png">

  <title> QPFood </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="./css/font-awesome.min.css" rel="stylesheet" />
  <!--toastr-->
  <link rel="stylesheet" href="plugins/toastr.min.css">
  <!-- Custom styles for this template -->
  <link href="./css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="./css/responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid fixed-top" style="background-color: #222831;">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            QPfood
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Trang chủ </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php?act=thucdon">Thực đơn <span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Giới thiệu</a>
            </li>
          </ul>
          <div class="user_option">
              <?php
              if (isset($_SESSION['user'])) {
                echo '<a href="./index.php?act=profile" id="user_link">' . $_SESSION['user'] . ',' . '</a>';
              } else {
                echo '<a href="./index.php?act=signin" id="user_link">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      </a>';
              }
              ?>
              <a href="cart.html" class="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <i class="count-cart" aria-hidden="true">0</i>
              </a>

              <button onclick="showSearchBox()" class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>

              <div id="overlay" style="display: none;"></div>
              <div id="searchBoxContainer" style="display: none;">
                <form action="viewUser/timkiem.php" method="post">
                  <input style="width: 200px;" type="text" placeholder="Nhập từ khóa" name="timkiem">
                  <button style="width: 100px;" type="submit" name="tim">Tìm</button>
                </form>
              </div>


              <script>
                function showSearchBox() {
                  var overlay = document.getElementById("overlay");
                  var searchBoxContainer = document.getElementById("searchBoxContainer");
                  overlay.style.display = "block";
                  searchBoxContainer.style.display = "block";
                }
              </script>

              <a href="viewUser/thoat.php" class="order_online">
                Thoát
              </a>
            </div>
        </div>
      </nav>
    </div>
  </header>