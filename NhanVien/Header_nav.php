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
    <title>Admin Quản lý</title>
    <style media="screen">
      body{
        background-color: #F5F5F5;
      }
      nav{
        background-color: #7A8B8B;
      }
      .nav-item >a{
        color: white;
      }
      .nav-item{

      }
      .nav-item:hover{
        background-color: #B4CDCD;
      }
      header a{
        margin-left: 10px;

      }
      header{
        background-color:#7A8B8B;
        width: 100%;
      }
    </style>
    <title></title>
  </head>
  <body>
    <header>
      <a href="#" class="nav-brand">
        <img src="logo.png" alt="" width="120px" height="80px">
      </a>
    </header>

      <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.php?action=quanlyhh" class="nav-link">Quản lý hoàng hóa</a></li>
          <li  class="nav-item"><a href="index.php?action=quanlyloai" class="nav-link">Quản lý loại hàng hóa</a></li>
          <li class="nav-item"><a href="index.php?action=quanlynhanvien"class="nav-link">Quản lý nhân viên</a></li>
          <li class="nav-item"><a href="index.php?action=qlgiohang"class="nav-link">Duyệt giỏ hàng</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#" class="nav-link"><i style="font-size:25px;" class="fas fa-user"></i></a></li>
        </ul>
    </nav>
<hr>
  </body>
</html>
