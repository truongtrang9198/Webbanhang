<?php
include_once('Ketnoi.php');
include_once('Header_nav.php');
  if(isset($_GET['ma'])){
    $mahang = $_GET['ma'];
    $sql = "select * from HangHoa
            inner join HinhHangHoa on HangHoa.MSHH = HinhHangHoa.MSHH
            where HangHoa.MSHH = '$mahang'";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) >0){
      $row = mysqli_fetch_array($query);
    }
    ?>
    <body>
      <div class="jumbotron" style="padding-top:5px;padding-bottom:5px;">
      <div class="d-flex flex-row">
      <div class="p-3 my-4"  >
        <img src="<?php echo "../Quanly/".$row['TenHinh'] ?>" alt="" width="600px" height="400px;">

      </div>

      <div class="p-3 my-3">
          <!-- <div class="jumbotron" style="height:400px;"> -->
        <span class="text-muted">MSHH: <?php echo $row['MSHH'] ?></span> <br>
        <p class="font-weight-bold">Tên mặt hàng: <?php echo $row['TenHH']; ?> </p>
         <span class="font-weight-bold">Mô tả: </span> <br>
        <span><?php echo $row['QuyCach']; ?></span><br>
        <span class="text-danger"><?php echo$row['Gia']; ?> VND</span> <br>
        <a href="Chitietsp.php?ma=<?php echo $row['MSHH']; ?>">Xem chi tiết </a> <button type="button" class="btn" name="button"><i class="fas fa-shopping-basket" style="font-size:25px;"></i></button>
      <!-- </div> -->
    </div>
      </div>
    </div>
    </body>


    <?php
  }


 ?>
