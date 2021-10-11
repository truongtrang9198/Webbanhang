$(document).ready(function(){
  $('#Them').click(function(){
    var Tenloai = $('#Tenloai').val().trim();
    $.get("Xulythemloai.php",{Tenloai:Tenloai},function(data){
      alert(data);
      location.reload();
    });
  });
// sua loai phong
$('#Sualoai').click(function(){
    var Maloai = $('#Sualoai').val().trim();
    var Tenloai = prompt("Nhập vào tên loại hàng mới:");

    if(Tenloai.length  !=0){
      $.get("Xulysualoai.php",{Maloai:Maloai,Tenloai:Tenloai},function(data){
            alert(data);
            location.reload();
      })
    }else{
      alert("Bạn chưa nhập dữ liệu!");
    }
});


})
