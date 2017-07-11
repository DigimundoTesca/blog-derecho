jQuery(document).ready(function(){
  var $menu = document.getElementById('mobileMenu');
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    $menu.classList.toggle('active')
  });
});