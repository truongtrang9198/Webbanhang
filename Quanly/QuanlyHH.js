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

  





})
