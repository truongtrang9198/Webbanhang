<?php

  if(isset($_GET['id'])){
    $mahang = $_GET['id'];
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
     <script src="QuanlyHH.js" charset="utf-8"></script>
   </head>
   <body>
     <div class="container-fluid">
       <h2>Sửa hàng hóa</h2>
       <div class="row">
         <!--  -->
         <div class="col-md-4">
           <form class="form-group" action="index.html" method="post">
             <label for="">Chọn loại hàng: </label>
              <select class="select" name="" id="loaihang">
                 <?php
                 include("../Ketnoi.php");
                 $sql = "select * from LoaiHangHoa";
                 $query = mysqli_query($conn, $sql);
                   if (mysqli_num_rows($query) != 0) {
                       while ($row = mysqli_fetch_array($query)) {
                         ?>
                           <option value="<?php echo $row['MaLoaiHang'];?>"> <?php echo $row['TenLoaiHang']; ?></option>

                         <?php
                       }
                     }else{
                       echo "Khong truy van duoc";
                     }
                  ?>
                </select>
                <br>
                <?php
                  include("../Ketnoi.php");
                  $sql ="select * from HangHoa where MSHH='$mahang'";
                  $query = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($query)!=0){
                    $row = mysqli_fetch_array($query);
                    ?>
                    <label for="mahang">Mã hàng</label>
                    <input type="text" class="form-control" name="mahang" id="mahang" value="<?php echo $row['MSHH']; ?>" readonly>
                    <label for="tenhang">Tên Sản phẩm</label>
                    <input type="text" class="form-control" name="tenhang" id="tenhang" value="<?php echo $row['TenHH']; ?>" required>
                    <label for="quycach">Quy cách</label>
                    <input type="text" class="form-control" name="quycach" id="quycach" value="<?php echo $row['QuyCach']; ?>"required>
                    <label for="gia">Giá</label>
                    <input type="text" class="form-control" name="gia" id="gia" value="<?php echo $row['Gia']; ?>"required>
                    <label for="soluong">Số lượng</label>
                    <input type="text" class="form-control" name="soluong" id="soluong" value="<?php echo $row['SoLuongHang']; ?>"required>
                    <br>
                    <button type="button" class="btn" name="button" id="btn-capnhat">Cập nhật</button>
                    <button type="button" id="huy" name="button" class="btn" onclick="window.history.back();">Hủy</button>
                    <?php
                  }else{
                    echo "Không thực hiện được truy vấn!";
                  }
                 ?>
           </form>
     </div>
     <!-- them anh -->
     <div class="col-md-6 lg-6 offset-2">
       <a  class="nav-link" data-toggle="collapse" href="#form-themanh" >
         <span class="text-muted display-1"><i class="fas fa-camera" ></i></span>
         <br> <p class="text-muted pl-3">  Thêm ảnh</p></a>
         <div class="collapse" id="form-themanh">
           <form class="" id="form-anh" method="post" enctype="multipart/form-data">
           <div class="input-group">
             <input type="text" name="mahang" id="mahang" value="<?php echo $mahang; ?>" disabled> <br>
               <input type="file" class="form-control" name="hinhanh" id="hinhanh" value="">
               <div class="input-group-prepend">
                 <button type="button" class="btn btn-outline-secondary" id="Taianh" name="button">Tải lên</button>
               </div>
               </form>
           </div>
         </div>
     </div>
   </div>
     </div>
   </body>
 </html>
