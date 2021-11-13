<?php
  include('Ketnoi.php');
   session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <!-- font asomeware libary -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


<!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="cssKH.css">
  <script src="Header_nav.js"></script>
  <title>Toto's Shop</title>

  <title></title>

</head>

<body>
  <header>
    <div class="row">
      <div class="col-4">
        <div class="logo">
          <a href="#" class="nav-brand">
            <img src="logo.png" alt="" width="120px" height="80px">
          </a>
        </div>
      </div>
      <div class="col-8">
        <div class="input-group" id="tiemkiem">
          <input type="text" name="" value="" id="ip-search">
          <div class="input-group-append">
            <button type="button" class="btn" name="button" id="btn-search"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> <a href="index.php?yc=trangchu" class="nav-link">Trang chủ</a> </li>
      <li class=nav-item>
        <div class="dropdown">
          <a href="index.php?action=quanlyhh" class="nav-link dropdown-toggle" id="menu" data-toggle="dropdown">
            Danh mục sản phẩm</a>
          <div class="dropdown-menu">
            <?php

                  $sql = "select * from LoaiHangHoa;";
                  $query = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($query) >0){
                    while($row=mysqli_fetch_array($query) ){

               ?>
            <a href="Danhmucsp.php?ma=<?php echo $row['MaLoaiHang']; ?>" class="dropdown-item nav-link"><?php echo $row['TenLoaiHang']; ?></a>
            <div class="dropdown-divider"></div>
            <?php
                    }
                  }
               ?>
          </div>
        </div>
      </li>
      <li class="nav-item"><a href="#footer" class="nav-link">Thông tin</a></li>
      <li class="nav-item"><a href="index.php?action=" class="nav-link">Hỗ trợ</a></li>
      <!-- <li class="nav-item"><a href="index.php?action=qlgiohang"class="nav-link">Duyệt giỏ hàng</a></li> -->
    </ul>
    <!-- đang nhap - gio hang -->
    <ul class="navbar-nav ml-auto">
      <!-- Nếu đã đăng nhập, hiển thị tên đăng nhập, và giỏ hàng đã được lưu trên server -->
      <?php
        if(isset($_SESSION['MSKH']) &&  isset($_SESSION['TenKH'])){
            ?>
            <!-- Hiển thị tên đăng nhập, đăng xuất-->
             <li class="nav-item">
              <div class="dropdown-left">
                <a href="#" class="nav-links" id="usr-tuychon" data-toggle="dropdown">
                  <i style="font-size:25px;" class="fas fa-user"></i></a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item nav-link"> <?php echo $_SESSION['TenKH']; ?> </a>
                  <a href="Dangxuat.php" id="dangxuat" class="dropdown-item nav-link">Đăng xuất</a>

                </div>
              </div>

            </li>
            &emsp;
             <!-- Dropdown menu hiển thị giỏ hàng, thanh toán-->
            <li class="nav-item">
              <div class="dropdown-up">
                <a href="#" class="nav-links" id="giohang-tuychon" data-toggle="dropdown">
                  <i class="fas fa-shopping-basket" style="font-size:25px;"></i></a>
                <div class="dropdown-menu">
                  <a href="index.php?action=giohang_tv" class="nav-link dropdown-item" >Xem giỏ hàng</a>
                  <a href="#" class="nav-link dropdown-item">Thanh toán</a>
                </div>
              </div>
            </li>

          <?php
        }else{
          ?>
          <!-- Nếu chưa đăg nhập, hiển thị đăng ký đăng nhập, và giỏ hàng lưu trong session -->
          <!-- Hiển thị tên đăng nhập, đăng ký-->
          <li class="nav-item">
            <div class="dropdown-left">
              <a href="#" class="nav-links" id="usr-tuychon" data-toggle="dropdown">
                <i style="font-size:25px;" class="fas fa-user"></i></a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item nav-link" data-toggle="modal" data-target="#formDangnhap" id="dangnhap">Đăng nhập</a>
                <a href="index.php?action=dangky" class="dropdown-item nav-link">Đăng ký</a>

              </div>
            </div>

          </li>
          &emsp;
          <!-- Dropdown menu hiển thị giỏ hàng, thanh toán-->
          <li class="nav-item">
            <div class="dropdown-up">
              <a href="#" class="nav-links" id="giohang-tuychon" data-toggle="dropdown">
                <i class="fas fa-shopping-basket" style="font-size:25px;"></i></a>
              <div class="dropdown-menu">
                <a href="#" class="nav-link dropdown-item" data-toggle="modal" data-target="#formDangnhap">Xem giỏ hàng</a>
                <a href="#" class="nav-link dropdown-item">Thanh toán</a>
              </div>
            </div>
          </li>

          <?php
        }
       ?>


    </ul>
  </nav>
  <hr>
  <!-- Tao modal form dang nhap  -->
  <div class="modal fade bd-example-modal-sm" id="formDangnhap">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Đăng Nhập</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form class="form_dn" name="form_dn" id="form_dn" action="Xulydangnhap.php" method="post" >
            <!-- input-group sdt -->
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-tty"></i></span>
              </div>
              <input type="text" name="sdt" id="sdt" value="" class="form-control" placeholder="Số điện thoại" required>
            </div>
            <br>
            <!-- input group mat khau -->
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="matkhau" id="matkhau" value="" class="form-control" placeholder="Mật khẩu" required>
            </div>
            <p class="text-danger" id="Thongbaodangnhap"></p>
            <!-- submit button -->
            <div class="modal-footer">
                <a href="index.php?action=dangky" class="nav-link">Đăng ký</a>
              <button type="submit" id="submit" class="btn" name="button" value="">Đăng Nhập</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Ket thuc form-dang nhap -->
  </div>
  <!-- Toast thông báo -->
  <div class="toast" id="Hienthithongbao" data-delay="3000">
  <div class="toast-header">
    <!-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button> -->
  </div>
  <div class="toast-body text-danger" id="toast-content">
      <!-- Một sản phẩm được thêm vào giỏ hàng! -->
  </div>
</div>
<!-- Kết thúc Toast -->
</body>
</html>
