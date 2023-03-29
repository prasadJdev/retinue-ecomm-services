$('.shopEdit').click(function () {
    let id = $(this).siblings('.shopEditId').val();
    var instance = M.Modal.getInstance($('.modal'));
    instance.open();
    $('#editUpdate').click(function(){
        let newName = $('.shopNewName').val();
        
      $.ajax({
      url: 'admin.shop.php',
      type: 'POST',
      async: true,
      data: {
        'shopEdit': 1,
        'id': id,
        'newName': newName
      },
      success: function(d) {
        alert(d);
        location.reload();
        return false;
      }
    });
  return false;
  });
return false;    
});
$('.shopDelete').click(function () {
    let idD = $(this).siblings('.shopDeleteId').val();
    $.ajax({
        url: 'admin.shop.php',
        type: 'POST',
        async: true,
        data: {
          'shopDelete': 1,
          'id': idD
        },
        success: function(d) {
          alert(d);
          location.reload();
          return false;
        }
      });
});


$(document).ready(function(){
  $('.modal').modal();  
  $('.modal2').modal();  
});