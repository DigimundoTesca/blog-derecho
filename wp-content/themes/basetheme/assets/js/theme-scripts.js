jQuery(document).ready(function(){
  var menu = $('#mobileMenu');
  var links = $('.linksli');
  
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    menu.toggleClass('active');
    links.each(function(index, el) {
    	el.classList.toggle('active');
    });
  });
});
