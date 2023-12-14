<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--Jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Data Table-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

</head>

<body onload="onPageLoading()" class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="user.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">QPFood</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/client3.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['admin']; ?></a>
          </div>
        </div>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <a href="unset_ss.php" class="d-block">
              <img src="dist/img/thoat.png" class="img-circle elevation-2" alt="User Image">
            </a>
          </div>
          <div class="info">
            <a href="unset_ss.php" class="d-block">Thoat</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item" style="background-color: cadetblue;">
              <a href="product.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Quản lý sản phẩm
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="order.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Quản lý đơn hàng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="user.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Quản lý người dùng
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản lý sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="form-group">
            <button class="btn btn-success" id="btn-create-product"><i class="fa fa-plus"></i>&nbsp; Thêm </button>
          </div>
        </div>
        <!-- Vouche Data Table -->
        <div class="container-fluid">
          <table class="table table-bordered table-striped table-hover" id="user-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Giá</th>
                <th>Product_name</th>
                <th>Product_code / img name</th>
                <th>Best Selling</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <?php
            function myLoad($tenClass)
            {
              include "../db_php/$tenClass.php";
            }
            spl_autoload_register('myLoad');
            $obj = new Products(); //load Products.php , Db.php
            $data = $obj->all();
            // print_r($data);
            ?>

            <?php
            foreach ($data as $item) {
            ?>
              <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['buy_price'] ?></td>
                <td><?php echo $item['product_name']; ?></td>
                <td><?php echo $item['product_code']; ?></td>
                <td>
                  <?php if ($item['product_hot'] == 1) echo "Yes"; ?>
                </td>
                <td>
                  <a href="delete.php?id=<?php echo $item['id'] ?>">Xoa</a>
                </td>

              </tr>
            <?php } ?>
          </table>
        </div>
        <!-- Vùng Modal -->

        <!-- Insert User modal -->
        <div>
          <div id="insert-new-product" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-secondary">
                  <h5 class="modal-title" id="h5-modal-title">THÊM SẢN PHẨM</h5>
                  <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="row form-group">
                      <div class="col-sm-4">
                        <label for="input-insert-ten">Tên sản phẩm</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" id="input-insert-ten" name="" placeholder="Nhập tên sản phẩm.." class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-4">
                        <label for="input-insert-ma">Mã sản phẩm</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" id="input-insert-ma" name="" placeholder="Nhập mã sản phẩm.." class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-4">
                        <label for="input-insert-anh">Ảnh</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="file" id="input-insert-anh" class="form-control" placeholder="Chọn ảnh...">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-4">
                        <label for="input-insert-description">Mô tả</label>
                      </div>
                      <div class="col-sm-8">
                        <input id="input-insert-description" class="form-control" placeholder="Nhập mô tả...">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-4">
                        <label for="input-insert-gia">Giá</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="number" id="input-insert-gia" class="form-control" placeholder="Nhập giá...">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-4">
                        <label for="input-insert-username">loại sản phẩm</label>
                      </div>
                      <div class="col-sm-8">
                        <select class="form-control" id="select-insert-productLine"></select>
                      </div>
                    </div>
                </div>
                </form>
                <div class="modal-footer">
                  <button class="btn btn-secondary" id="btn-insert-cancel" data-dismiss="modal">Hủy</button>
                  <button class="btn btn-primary" id="btn-insert-modal-product">Thêm</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- update User modal -->
    <div>
      <div id="update-product" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title" id="h5-modal-title">CẬP NHẬT SẢN PHẨM</h5>
              <button class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <form>
                <div class="row form-group">
                  <div class="col-sm-4">
                    <label for="input-update-ten">Tên </label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" id="input-update-ten" name="firstname" placeholder="Nhập tên..." class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-4">
                    <label for="input-update-ma">Mã</label>
                  </div>
                  <div class="col-sm-8">
                    <input id="input-update-ma" class="form-control" placeholder="Nhập mã...">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-4">
                    <label for="input-update-anh">Ảnh</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="file" id="input-update-anh" class="form-control" placeholder="Chọn ảnh...">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-4">
                    <label for="input-update-description">Mô tả</label>
                  </div>
                  <div class="col-sm-8">
                    <textarea id="input-update-description" class="form-control" placeholder="Nhập mô tả..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-4">
                    <label for="input-update-gia">Giá sản phẩm</label>
                  </div>
                  <div class="col-sm-8">
                    <input id="input-update-gia" class="form-control" placeholder="Nhập giá sản phẩm...">
                  </div>
                </div>
            </div>
            </form>
            <div class="modal-footer">
              <button class="btn btn-secondary" id="btn-update-cancel" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary" id="btn-update-product">Cập nhật</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete confirm modal -->
  <div>
    <div class="modal fade" tabindex="-1" id="delete-confirm-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title" id="h5-modal-title">Xóa sản phẩm</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <label>Bạn có chắc chắn muốn xóa sản phẩm này không ?</label>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" id="btn-confirm-delete-product">Xác nhận</button>
            <button class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="dist/js/product.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <!--Bootstrap-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>