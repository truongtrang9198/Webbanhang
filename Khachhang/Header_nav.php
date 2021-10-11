<?php
  include('Ketnoi.php');
   session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="cssKH.css">
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
      <?php
        if(isset($_SESSION['MSKH']) &&  isset($_SESSION['TenKH'])){
            ?>
            <li class="nav-item">
              <div class="dropdown-left">
                <a href="#" class="nav-links" id="usr-tuychon" data-toggle="dropdown">
                  <i style="font-size:25px;" class="fas fa-user"></i></a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item nav-link" data-toggle="modal" data-target="#formDangnhap"> <?php echo $_SESSION['TenKH']; ?> </a>
                  <a href="Dangxuat.php" id="dangxuat" class="dropdown-item nav-link">Đăng xuất</a>

                </div>
              </div>

            </li>

          <?php
        }else{
          ?>
          <li class="nav-item">
            <div class="dropdown-left">
              <a href="#" class="nav-links" id="usr-tuychon" data-toggle="dropdown">
                <i style="font-size:25px;" class="fas fa-user"></i></a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item nav-link" data-toggle="modal" data-target="#formDangnhap">Đăng nhập</a>
                <a href="index.php?action=dangky" class="dropdown-item nav-link">Đăng ký</a>

              </div>
            </div>

          </li>

          <?php
        }
       ?>

      &emsp;
      <li class="nav-item">
        <div class="dropdown-up">
          <a href="#" class="nav-links" id="giohang-tuychon" data-toggle="dropdown">
            <i class="fas fa-shopping-basket" style="font-size:25px;"></i></a>
          <div class="dropdown-menu">
            <a href="#" class="nav-link dropdown-item">Xem giỏ hàng</a>
            <a href="#" class="nav-link dropdown-item">Thanh toán</a>
          </div>
        </div>


      </li>
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

            <!-- submit button -->
            <div class="modal-footer">
              <button type="submit" id="submit" class="btn" name="button" value="">Đăng Nhập</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Ket thuc form-dang nhap -->
  </div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){

  $('#form_dn').submit(function(e){
      e.preventDefault();
      var sdt = $('#sdt').val();
      var pwd = $('#matkhau').val();
    //alert(sdt);

      $.post("KiemtraDN.php",{sdt:sdt,pwd:pwd},function(data){
        if(data =="True"){
          $('#form_dn').unbind('submit');
          $('#submit').click();
        }
         else {
             alert(data);
         }
      });
 });


  });
</script>
