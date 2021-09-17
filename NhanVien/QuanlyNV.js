$(document).ready(function(){
  // them nhan vien
  $('#btn-themnv').click(function(){
    var hoten = $('#hoten').val();
    var chucvu = $('#chucvu').val();
    var diachi = $('#diachi').val();
    var sdt = $('#sdt').val();
    $.post("XulythemNV.php",{hoten:hoten,chucvu:chucvu,diachi:diachi,sdt:sdt},function(data){
      alert(data);
      location.reload();
    })
  });
  //   cap nhat thong tin nhan vien
  $('#btn-capnhat').click(function(){
    var manv = $('#manv').val();
    var hoten = $('#hoten').val();
    var chucvu = $('#chucvu').val();
    var diachi = $('#diachi').val();
    var sdt = $('#sdt').val();
    $.post("XulycapnhatNV.php",{manv:manv,hoten:hoten,chucvu:chucvu,diachi:diachi,sdt:sdt},function(data){
      alert(data);
      location.reload();
    })
  });


})
