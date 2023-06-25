$(document).ready(function() {
  $('.add-proizvod').click(function (){
      $('.container-fluid').css("filter", "blur(10px)");
      $('.navigacija').css("visibility", "hidden");
      $('#window-add').show();
  });
  $('.ugasi-dialog').click(function() {
    $('.container-fluid').css("filter", "none");
    $('.navigacija').css("visibility", "visible");
    $('#window-add').hide();
  });
  if($('#porukica').length){ /* Warning poruke nestanu nakon 5 sekundi.*/
    $('#porukica').delay(5000).fadeOut(400);
  }
});
