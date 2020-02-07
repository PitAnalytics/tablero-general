$(document).ready(()=>{

  $('#btnShow').click(()=>{

    $('#formConfirm').show();
    $('#formRegister').hide();

  });

  $('#btnHide').click(()=>{

    $('#formRegister').show();
    $('#formConfirm').hide();

  });

});