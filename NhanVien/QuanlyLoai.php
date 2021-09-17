<?php
    include("../Ketnoi.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .btn{
         background-color: #7A8B8B;
       }
       #form-search >input{
         width: 300px !important;
         border-bottom: 1px solid;
         border-color: #7A8B8B;
         margin-left: 50px;
       }

     </style>
     <script src="QuanlyLoai.js"></script>
   </head>
   <body>
 <div class="container-fluid">
<h3>QUẢN LÝ LOẠI HÀNG HÓA</h3>
<div class="row">
  <div class="col-md-5">
    <form class="form-inline"   method="post">
      <input type="text" name="" value="" class="form-control" placeholder="Nhập tên loại hàng" id="Tenloai">
      <button type="button" name="button" class="btn" id="Them">Thêm</button>
    </form>
  </div>
  <div class="col-md-4 offset-3">
    <form class="form-inline" id="form-search" action="#" method="get">
            <input type="text" class="form-control" id="Timkiem" name="" value="" placeholder="Search ...">
            <button type="submit" class="btn" name="button"><i class="fas fa-search"></i> </button>
    </form>
  </div>
</div>


<table class="table table-striped table-hover" id="danhsachloai">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã loại</th>
        <th>Tên Loại</th>
        <th> </th>

      </tr>
    </thead>
    <tbody>
        <?php
        $sql ="select * from LoaiHangHoa LIMIT 6";
        $query = mysqli_query($conn,$sql);
        $n = 0;
        while($row =mysqli_fetch_array($query)){
         ?>
         <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $row['MaLoaiHang']; ?></td>
        <td><?php echo $row['TenLoaiHang']; ?></td>
        <td> <button class="btn" value=" <?php echo $row['MaLoaiHang']; ?>" id="Sualoai">
           <i class="fas fa-edit"></i></button> </td>
        <?php $n++;
      }
    ?>
      </tr>
    </tbody>
</table>
 </div>
</body>
</html>
