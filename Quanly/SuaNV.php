<?php

  if(isset($_GET['id'])){
    $manv = $_GET['id'];
    include("Header_nav.php");
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .btn{
         background-color: #7A8B8B;
         color: white;
       }
     </style>
     <script src="QuanlyNV.js" charset="utf-8"></script>
   </head>
   <body>
     <div class="container-fluid">
       <h2>Sửa thông tin nhân viên</h2>
       <div class="row">
         <!--  -->
         <div class="col-md-4">
           <form class="form-group" method="post" action="XulycapnhatNV.php">
                <?php
                  include("Ketnoi.php");
                  $sql ="select * from NhanVien where MSNV='$manv'";
                  $query = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($query)!=0){
                    $row = mysqli_fetch_array($query);
                    ?>
                    <label for="mahang">MSNV</label>
                    <input type="text" class="form-control" name="manv" id="manv" value="<?php echo $row['MSNV']; ?>" readonly>
                    <label for="hoten">Họ Tên</label>
                    <input type="text" class="form-control" name="hoten" id="hoten" value="<?php echo $row['HoTenNV']; ?>" required>
                    <label for="chucvu">Chức vụ</label>
                    <input type="text" class="form-control" name="chucvu" id="chucvu" value="<?php echo $row['ChucVu']; ?>"required>
                    <label for="sdt">SDT</label>
                    <input type="text" class="form-control" name="sdt" id="sdt" value="<?php echo $row['SDT']; ?>"required>
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $row['DiaChi']; ?>"required>
                    <br>
                    <button type="submit" class="btn" name="button">Cập nhật</button>
                    <button type="button" id="huy" name="button" class="btn" onclick="window.history.back();">Hủy</button>
                    <?php
                  }else{
                    echo "Không thực hiện được truy vấn!";
                  }
                 ?>
           </form>
     </div>
   </div>
     </div>
   </body>
 </html>
