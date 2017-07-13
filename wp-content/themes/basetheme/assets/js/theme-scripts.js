jQuery(document).ready(function(){
  var menu = $('#mobileMenu');
  
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    menu.toggleClass('active');
  });
});
