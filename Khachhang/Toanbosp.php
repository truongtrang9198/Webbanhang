<?php
  include_once('Ketnoi.php');


 ?>
 <body>
   <div class="container-fluid">
     <div class="d-flex flex-row flex-wrap justify-content-around">
  <?php
     $sql = "select * from HangHoa, HinhHangHoa, LoaiHangHoa
              where HangHoa.MSHH = HinhHangHoa.MSHH and LoaiHangHoa.MaLoaiHang= HangHoa.MaLoaiHang";
     $query = mysqli_query($conn,$sql);
       if(mysqli_num_rows($query) >0){
         while($row=mysqli_fetch_array($query)){

   ?>


    <div class="jumbotron" style="padding-top:5px;padding-bottom:5px;">
    <div class="p-2 my-2"  >
      <img src="<?php echo "../Quanly/".$row['TenHinh'] ?>" alt="" width="300px" height="210px;">

    </div>

    <div class="p-2 my-2">
        <!-- <div class="jumbotron" style="height:400px;"> -->
    <form class="" action="Giohang.php?id=<?php echo $row['MSHH']; ?>" method="post">

      <span class="text-muted">MSHH: <?php echo $row['MSHH'] ?></span> <br>
      <span class="">Loại hàng: <?php echo $row['TenLoaiHang'] ?></span> <br>
      <p class="font-weight-bold">Tên mặt hàng: <?php echo $row['TenHH']; ?> </p>
       <!-- <span class="font-weight-bold">Mô tả: </span> <br>
       -->
      <span class="text-danger"><?php echo$row['Gia']; ?> VND</span> <br>
      <a href="Chitietsp.php?ma=<?php echo $row['MSHH']; ?>">Xem chi tiết </a>
      <button type="submit" class="btn" name="button">
        <i class="fas fa-shopping-basket" style="font-size:25px;"></i></button>
    <!-- </div> -->
    </form>
  </div>
    </div>
    &emsp;&emsp;
  <?php
   }
 }
   ?>
 </div>
  <p class="text-muted text-center">Không còn sản phẩm nào khác!</p>
   </div>
 </body>
