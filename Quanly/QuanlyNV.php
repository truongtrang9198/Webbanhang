<?php
    include("Ketnoi.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .btn{
         background-color: #7A8B8B;
         color:white;
       }
       #form-search >input{
         width: 300px !important;
         border-bottom: 1px solid;
         border-color: #7A8B8B;

       }

     </style>
     <script src="QuanlyNV.js"></script>
   </head>
   <body>
 <div class="container-fluid">
<h3>QUẢN LÝ NHÂN VIÊN</h3>

  <div class="col-md-4">
    <form class="form-inline" id="form-search" action="#" method="get">
            <input type="text" class="form-control" id="Timkiem" name="" value="" placeholder="Search ...">
            <button type="submit" class="btn" name="button"><i class="fas fa-search"></i> </button>
    </form>
  </div>
<!-- Danh sach hang hoa -->
<table class="table table-striped table-hover" id="danhsachnhanvien">
    <thead>
      <tr>
        <th>STT</th>
        <th>MSNV</th>
        <th>Họ tên</th>
        <th>Chức vụ</th>
        <th>Địa chỉ</th>
        <th>SDT</th>
        <th></th>
        <th></th>

      </tr>
    </thead>
    <tbody>
        <?php
        $sql ="select *from NhanVien";
        $query = mysqli_query($conn,$sql);
        $n = 0;
        while($row=mysqli_fetch_array($query)){
         ?>
         <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $row['MSNV']; ?></td>
        <td><?php echo $row['HoTenNV']; ?></td>
        <td> <?php echo $row['ChucVu']; ?></td>
        <td> <?php echo $row['DiaChi']; ?></td>
        <td> <?php echo $row['SDT']; ?></td>
        <td> <a href="SuaNV.php?id=<?php echo $row['MSNV']; ?>" class="btn" id="btn-SuaNV"><i class="fas fa-edit"></i></a> </td>
        <td> <a href="XoaNV.php?id=<?php echo $row['MSNV']; ?>" class="btn" id="btn-SuaNV"><i class="far fa-trash-alt"></i></a> </td>

        <?php $n++;
      }
    ?>
      </tr>
    </tbody>
</table>
<button type="button" class="btn text-light" data-toggle="collapse" data-target="#form-themNV"  name="button">Thêm nhân viên</button>
<button type="button" name="button" class="btn" onclick="location.reload();">Tải lại</button>
<div class="collapse" id="form-themNV">
  <hr>
  <form class="inline" action="index.html" method="post">
    <label for="hoten">Họ tên</label>
    <input type="text" name="hoten" id="hoten" value="" required>
    <label for="chucvu">Chức vụ</label>
    <input type="text" name="chucvu"  id="chucvu"value="" required>
       <label for="diachi">Địa chỉ</label>
       <input type="text" name="diachi" id="diachi" value="" required>
       <label for="sdt">Số điện thoại</label>
       <input type="text" name="sdt" id="sdt" value="" required length='10' pattern="[0]?[0-9]{10,11}">
       <button type="button" class="btn" name="button" id="btn-themnv">Thêm</button>
       <button type="button" class="btn" name="button" data-toggle="collapse" data-target="#form-themNV">Hủy</button>
  </form>

</div>
 </div>
</body>
</html>
