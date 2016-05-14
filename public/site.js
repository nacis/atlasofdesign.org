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

  // translations
  // only execute this if TRANSLATIONS data exist
  if (typeof TRANSLATIONS !== 'undefined') {
    // create translation tabs
    console.log('some transin to do');
    var langMenu = $('#language-menu');
    for (lang in TRANSLATIONS) {
      var l = TRANSLATIONS[lang];
      var button = $('<li>').prop('id', lang).text(l.language).addClass('language-button');
      if (lang == 'EN') {
        button.addClass('active');
        $('#language-call').html(nl2br(l.call));
        $('#language-call-title').html(nl2br(l.call_title));
      }
      langMenu.append(button);
    }
  }
  

  function nl2br(str, is_xhtml) {   
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';    
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
  }

  // translation click and update form
  $('#language-menu li').on('click', function(e) {
    var id = $(this).prop('id');

    // if it isn't already active
    if (!$(this).hasClass('active')) {

      // update tabs
      $('#language-menu li').removeClass('active');
      $(this).addClass('active');

      translate(TRANSLATIONS[id]);
    }
  });

  function translate(lang) {
    
    // update form
    $('.language-title-wrap label').text(lang.title);
    $('.language-title-wrap .ninja-forms-field-description').text(lang.title_help);
    $('.language-authors-wrap label').text(lang.authors);
    $('.language-authors-wrap .ninja-forms-field-description').text(lang.authors_help);
    $('.language-description-wrap label').text(lang.description);
    $('.language-email-wrap label').text(lang.email);
    $('.language-country-wrap label').text(lang.country);
    $('.language-upload-wrap label').text(lang.upload);
    $('.language-upload-wrap .ninja-forms-field-description').text(lang.upload_help);
    $('.language-submit').prop('value', lang.submit);

    // update content
    $('#language-call').html(nl2br(lang.call));
    $('#language-call-title').html(nl2br(lang.call_title));

    // update the rest
  }
});