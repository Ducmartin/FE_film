$(document).ready(function(){
  $('#sidebar-menu .nav-item .nav-link .title').after('<span class="fa fa-angle-right arrow"></span>');
  var sidebar_menu = $('#sidebar-menu > .nav-item > .nav-link');
  sidebar_menu.on('click', function () {
      if (!$(this).parent('li').hasClass('active')) {
          $('.sub-menu').slideUp();
          $(this).parent('li').find('.sub-menu').slideDown();
          $('#sidebar-menu > .nav-item').removeClass('active');
          $(this).parent('li').addClass('active');
          return false;
      } else {
          $('.sub-menu').slideUp();
          $('#sidebar-menu > .nav-item').removeClass('active');
          return false;
      }
  });
  });