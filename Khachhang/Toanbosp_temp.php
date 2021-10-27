<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
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
  <!-- Tạo form để đưa thông tin mahh vào bảng giỏ hàng xử lý -->
    <form class="" action="Giohang.php" name="form-themgiohang" method="get">
      <!-- tạo một input hidden để lưu giá trị mahh -->
      <input type="text" name="mahang" value="<?php echo $row['MSHH']; ?>" hidden>
      <span class="text-muted">MSHH: <?php echo $row['MSHH'] ?></span> <br>
      <span class="">Loại hàng: <?php echo $row['TenLoaiHang'] ?></span> <br>
      <p class="font-weight-bold">Tên mặt hàng: <?php echo $row['TenHH']; ?> </p>

      <span class="text-danger"><?php echo$row['Gia']; ?> VND</span> <br>
      <a href="Chitietsp.php?ma=<?php echo $row['MSHH']; ?>">Xem chi tiết </a>
      <button type="submit" class="btn" id="btn-themgiohang" onclick="window.alert('Sản phẩm đã được thêm vào giỏ hàng!');">
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

 // function Giohang(){
 //   var makhach = document.getElementById("makhach").value;
 //   alert(makhach);
 //   alert(makhach1);
 //   console.log(makhach);
 //   if(makhach ==''){
 //     alert('Xin vui lòng đăng nhập để mua hàng!');
 //
 //   }else{
 //
 //   //alert("Một sản phẩm được thêm vào giỏ hàng!");
 //   var mahang = document.getElementById('mahang').value;
 //   console.log(mahang);
 //   var xmlhttp=new XMLHttpRequest();
 //   xmlhttp.onreadystatechange=function() {
 //       if (this.readyState==4 && this.status==200) {
 //       alert(this.responseText);  // hiển thị kết quả trả về
 //
 //       }
 //   }
 //   xmlhttp.open("GET","Giohang.php?mahang="+mahang,true);
 //   xmlhttp.send();
 //   }
 //   }
 </script>
