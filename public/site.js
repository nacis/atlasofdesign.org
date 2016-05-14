$(document).ready(function() {
  console.log('Welcome to the Atlas of Design!');

  var nav = $('#nav');
  var menu = $('#nav .menu');
  var navButton = $('#nav-button');
  $('#nav-button').on('click', function(){
    menu.slideToggle(200);
    navButton.toggleClass('open');
  });
  var blocked = false,
      threshold = 900;
  $(window).resize(function(){
    menuCheck($(window).outerWidth(true), blocked, threshold);
  });
  function menuCheck(w, b, t) {
    if (w>t && !b) {
      menu.show();
      blocked = !b;
      $('.nav-expand').removeClass('open');
    } else if (w<=t && b) {
      menu.hide();
      blocked = !b;
    }
  }
});