<?php

  include_once('Ketnoi.php');
  // Kiểm tra session đã start hay chưa
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if(isset($_SESSION['MSKH']))
      $makhach = $_SESSION['MSKH'];
  else
      $makhach = '';
   ?>
 <body>
    <input type="text" name="" id="makhach" value="<?php echo $makhach; ?>" hidden>
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
  <!-- Tạo form để đưa thông tin mahh vào bảng giỏ hàng xử lý -->
    <form class="form-themgiohang">
      <!-- tạo một input hidden để lưu giá trị mahh -->
      <input type="text" name="mahang"   value="<?php echo $row['MSHH']; ?>" hidden>
      <span class="text-muted">MSHH: <?php echo $row['MSHH'] ?></span> <br>
      <span class="">Loại hàng: <?php echo $row['TenLoaiHang'] ?></span> <br>
      <p class="font-weight-bold">Tên mặt hàng: <?php echo $row['TenHH']; ?> </p>

      <span class="text-danger"><?php echo number_format($row['Gia']); ?> VND</span> <br>
       <span class="text-muted">Còn lại: <?php echo $row['SoLuongHang'] ?></span> <br>
      <a href="Chitietsp.php?ma=<?php echo $row['MSHH']; ?>">Xem chi tiết </a>&emsp;
      <button type="submit" class="btn"  >
        <i class="fas fa-shopping-basket" style="font-size:25px;"></i></button>

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
<script type="text/javascript">

    $(document).ready(function(){

      $(".form-themgiohang").submit(function(e){
        e.preventDefault();
        var makhach = $('#makhach').val();
        if(makhach ==''){
          // $('#Thongbaodangnhap').toast('show');
          $('#formDangnhap').modal('show');
        }else{
          var form_data = $(this).serialize();
          $.ajax({
          url: "Themgiohang.php",
          type: "GET",
          dataType:"text",
          data: form_data
          }).done(function(data){
            // alert(data);
            $('#toast-content').html(data);
            $("#Hienthithongbao").toast('show');

          });
        }
      //  console.log(form_data);



      });
    })




</script>
