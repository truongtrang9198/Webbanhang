//  them hang hoa
$(document).ready(function(){
  $('#btn-themhang').click(function(){
    var tenhang = $('#tenhang').val();
    var maloai = $('#loaihang').val();
    var quycach = $('#quycach').val();
    var soluong =$('#soluong').val();
    var gia =$('#gia').val();
    $.post("XulythemHH.php",{tenhang:tenhang,maloai:maloai,quycach:quycach,soluong:soluong,gia:gia},function(data){
      alert(data);
      location.reload();
    })
  });
  //  xoa hang hoa
  $('#XoaHH').click(function(){
    var mahang = $('#XoaHH').val();
    var xacnhan = confirm("Bạn muốn xóa sản phẩm ra khỏi kho?");
    if(xacnhan){
      $.post("XulyxoaHH.php",{mahang:mahang},function(data){
        alert(data);
        location.reload();
      })
    }
  });

    // cap nhat anh






})
