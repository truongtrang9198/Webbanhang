<?php
  include_once("Ketnoi.php");
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  if(isset($_POST['madc']) && isset($_SESSION['MSKH'])){
    $madc = $_POST['madc'];
    $makhach = $_SESSION['MSKH'];
    //echo $madc;
    ob_start();
  }

 ?>
 <style media="screen">
   #btn-thanhtoan{
     margin-left: 100px;
     width: 300px !important;
   }
 </style>
 <div class="thanhtoan">
   <div class="container-fluid">
     <div class="row">
       <div class="col-5">
         <h3 class="text-center">Đơn Đặt Hàng</h3>
         <div class="card bg-light text-dark" >
           <div class="card-body" id="thongtinthanhtoan">
             <p><i class="far fa-address-card"></i> Khách hàng</p>
             <span>{hoten}</span> <br>
             <span>Công ty {tencty}</span><br>
             <span>Số điện thoại {sdt}</span> <br>
             <span>Fax {fax}</span> <br>
             <span>{diachi}</span>
           </div>
           </div>
  <?php
    $s = ob_get_clean();
    $sql = "select * from KhachHang where MSKH = '$makhach'";
    if(mysqli_query($conn, $sql)){
      $row = mysqli_fetch_array(mysqli_query($conn, $sql));
      $s = str_replace("{hoten}",$row['HoTenKH'],$s);
      $s = str_replace("{tencty}",$row['TenCongTy'],$s);
      $s = str_replace("{sdt}",$row['SoDienThoai'],$s);
      $s = str_replace("{fax}",$row['SoFax'],$s);
    }
    // include("Ketnoi.php");

    $sql = "select DiaChi from DiaChiKH where MaDC='$madc'";
    if(mysqli_query($conn, $sql)){
      $row = mysqli_fetch_array(mysqli_query($conn, $sql));
      $s = str_replace("{diachi}",$row['DiaChi'],$s);
    }
    echo $s;
   ?>
      <br>
        <div class="card bg-light text-dark" >
           <div class="card-body" id="chitietdathang">
             <p><i class="fas fa-tasks"></i> Chi tiết đơn hàng</p>
             <table class="table">
               <thead>
               </thead>
               <tbody>


             <?php

                $sql = "call Xemgiohang('$makhach')";
                $query = mysqli_query($conn,$sql);

                if(mysqli_num_rows($query)>0){
                  $n=0;
                  $thanhgia=0;
                  while($row = mysqli_fetch_array($query)){
                    $n++;
                    echo "<tr><td>".$n."</td><td>".$row['TenHH']."</td><td>".number_format($row['Gia'])."</td>
                    <td> X</td><td>".$row['Soluong']."</td>
                    <td>".number_format($row['Soluong']*$row['Gia'])."</td></tr> ";
                  //  echo $str;
                      $thanhgia = $thanhgia + ($row['Soluong']*$row['Gia']);
                  }
                  // in ra phí vận chuyển và tổng giá
                    echo "<tr><td colspan='5'>Giảm giá</td><td>0</td></tr>";
                    echo "<tr><td colspan='5'>Phí vận chuyển</td><td>".number_format('30000')."</td></tr>";
                    echo "<tr><td colspan='5'>Tổng</td><td>".number_format($thanhgia+30000)." VND</td></tr>";
                    echo "<tr><td colspan='6' class='text-muted'>Thời gian giao hàng dự kiến: Từ 5 - 7 ngày</td></tr>";

                } else{
                  echo "Lỗi hệ thống!";
                }

              ?>
              </tbody>
            </table>
           </div>
         </div>
         <br>
         <!-- btn đặt hàng -->
            <form class="" action="Xulydathang.php" method="post">
              <input type="text" name="madc" value="<?php echo $madc; ?>" hidden>
              <button type="submit" class="btn btn-success" id="btn-thanhtoan" name="button">Đặt Hàng</button>

            </form>

       </div>
       <div class="col-7">
          <img src="totoro.jpg" alt="800" width="800px"  height="500px">
          <h4 class="display-4 text-center">Totoshop's Shop</h4>
          <h5 class="font-weight-light text-muted text-center">Chuyên cung cấp các mặt hàng lưu niệm về thế giới Anime</h5>
          <h6 class=" text-center">Cảm ơn bạn đã ghé thăm!</h6>
       </div>
     </div>

   </div>
 </div>
 <br>
