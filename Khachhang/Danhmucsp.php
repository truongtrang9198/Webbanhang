<?php
  include('Ketnoi.php');
  include('Header_nav.php');
  if(isset($_GET['ma'])){
    $maloai = $_GET['ma'];

  }else {
    echo "Không lấy được dữ liệu";
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Danh mục sản phẩm</title>

   </head>
   <body>
     <div class="container-fluid">

        <div class="d-flex flex-row flex-wrap">
     <?php
        $sql = "call Danhmuchh('$maloai')";
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
         <span class="text-muted">MSHH: <?php echo $row['MSHH'] ?></span> <br>
         <p class="font-weight-bold">Tên mặt hàng: <?php echo $row['TenHH']; ?> </p>
         <span class="text-danger"><?php echo$row['Gia']; ?> VND</span> <br>

       <!-- </div> -->
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
 </html>
