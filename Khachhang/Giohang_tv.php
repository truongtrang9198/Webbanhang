<?php
  include_once ('Ketnoi.php');
  if(isset($_SESSION['MSKH'])){
    $makhach = $_SESSION['MSKH'];
    // echo $makhach;

  }
 ?>
 <style media="screen">
   .input-group-append-cs{
     width: 36.95px !important;
   }
   .input-group-cs{
     width: 40px !important;
     text-align: center;
   }
   #Thongtingiaohang{
     /* box-shadow: 5px 10px; */
     padding-right: 10px;
   }
   #input-diachi{
     width: 400px !important;
   }
   #select-diachi{
     width: 400px !important;
   }
   #btn-thanhtoan{
     background-color: #B4EEB4 !important;
     color: black;

     margin-left:800px;
     width: 200px !important;
   }
   #btn-thanhtoan:hover{
     background-color: #C1FFC1;
     color: brown;
   }
 </style>
 <div class="giohang">
   <div class="row">
     <div class="col-8">
       <table class="table" id="danhsachhanghoa">
           <thead>
             <tr>
               <th>Mã hàng</th>
               <th>Tên sản phẩm</th>
               <th>Giá</th>
               <th>Số lượng</th>
               <th>Tổng</th>
               <th></th>
               <th></th>

             </tr>
           </thead>
           <tbody>
             <!-- <form class="form_giohang" action="index.html" method="post"> -->

               <?php
               $sl = "1";
               $sql = "call Xemgiohang('$makhach')";
               $query = mysqli_query($conn,$sql);
               $n = 0;
               while($row=mysqli_fetch_array($query)){
                  $Tonggia = $row['Gia'] *$row['Soluong'];
                ?>
                <tr>
               <td><?php echo $row['MSHH']; ?></td>
               <td> <?php echo $row['TenHH']; ?></td>
               <td> <?php echo $row['Gia']; ?></td>
               <td>
                 <form class="form-capnhatsl" action="#"  method="get">

                   <input type="text" name="mahang" value="<?php echo $row['MSHH']; ?>" hidden>
                 <div class="input-group">
                   <input type="text" name="soluongmua" value=" <?php echo $row['Soluong']; ?>"
                                  class="input-group-cs" min="0" max="<?php echo $row['SoLuongHang']; ?>" required>
                  <div class="input-group-append">
                    <button type="submit" class="btn capnhatsl"  name="button">Cập nhật</button>
                  </div>
                 </div>
                </form>
               <br> <span class="Thongbao"></span> </td>
               <td> <?php echo number_format($Tonggia);  ?></td>
               <td> <a href="XoaHH.php?id=<?php echo $row['MSHH']; ?>" class="btn">
                 <i class="fas fa-trash-alt"></i></a> </td>
               <?php
             }
           ?>
             </tr>
              <!-- </form> -->
           </tbody>
       </table>
       <button type="submit" name="button" class="btn text-center" id="btn-thanhtoan">Thanh Toán</button>
       <br>
       <br>
     </div>
     <div class="col-4 offset" id="Thongtingiaohang">
       <h5 class="text-center text-muted">Thông tin giao hàng</h5>
       <?php
           include("Ketnoi.php");
          $sql1 = "select * from KhachHang where MSKH = '$makhach'";
        //  $query = mysqli_query($conn,$sql1);
            if(mysqli_query($conn,$sql1)){
               $row=mysqli_fetch_array(mysqli_query($conn,$sql1));
            }
        ?>
            <h5 class="font-weight-bold"> <?php echo $row['HoTenKH']; ?>  </h5>
            <p> <span class="font-italic text-muted"> Tên công ty </span> : <?php echo $row['TenCongTy'] ?> </p>
            <p> <span class="font-italic text-muted">  Số điện thoại </span>: <?php echo $row['SoDienThoai'] ?></p>
            <p><span class="font-italic text-muted">  Số fax </span> : <?php echo $row['SoFax'] ?></p>


        <?php
          // }

        ?>
        <span class="font-italic text-muted">Địa chỉ giao hàng:</span> <br>
        <select class="form-control" name="" id="select-diachi">


        <?php
            include("Ketnoi.php");
            $sql = "select * from DiaChiKH where MSKH = '$makhach'";
            $query = mysqli_query($conn,$sql);
               while($row=mysqli_fetch_array($query)){

                 ?>
                 <option value="<?php echo $row['MaDC']; ?>"><?php echo $row['DiaChi']; ?> </option>
        <?php

   }
        ?>
      </select>
          <a type="button" name="button" data-toggle="collapse" href="#Themdiachi" class="nav-link"
           style="font-size:20px; color:#7A8B8B ">
          <i class="fas fa-plus-circle"></i> </a>
          <div class="collapse" id="Themdiachi">
            <form class="form-group" method="post">
              <input type="text" name="" id="makhach" value="<?php echo $makhach ?>" hidden>
              <input type="text" name="diachi" value="" id="input-diachi" placeholder="Nhập vào địa chỉ" class="form-control"> <br>
              <button type="button" name="button" class="btn" id="btn-themdiachi">Thêm địa chỉ</button>
            </form>
          </div>

        <?php

   // }

 ?>
     </div>

   </div>

 </div>
 <script type="text/javascript">
      $(document).ready(function(){
    // thêm địa chỉ khách hàng
        $('#btn-themdiachi').click(function(){
          var makhach = $('#makhach').val();
          var diachi = $('#input-diachi').val();
          $.post("Themdiachi.php",{makhach:makhach,diachi:diachi},function(thongbao){
                  alert(thongbao);
                  location.reload();

          })
        });
   // cap nhat so luong mua hang
       $('.form-capnhatsl').submit(function(e){
         // alert("hi!");
         e.preventDefault();
         var form_data = $(this).serialize();
         console.log(form_data);
         $.ajax({
         url: "Capnhatsl.php",
         type: "GET",
         dataType:"text",
         data: form_data
         }).done(function(data){
           // alert(data);
           if(data=="True"){
             location.reload();
           }else{
             $('#toast-content').html(data);
             $("#Hienthithongbao").toast('show');
           }


         });
       })
      })

 </script>
