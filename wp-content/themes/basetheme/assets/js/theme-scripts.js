jQuery(document).ready(function(){
  var $menu = document.getElementById('mobileMenu');
  var links = document.getElementsByClassName('linksli');
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    $menu.classList.toggle('active');
    for (var i = 0; i < links.length; i++) {
      links[i].classList.toggle('active')
    }
  });
});